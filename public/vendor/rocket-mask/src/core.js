import { MaskPlaceStatic, MaskPlace } from './places';

export default class Mask {
  constructor(mask, placeholder) {
    this._name = 'nebo15-mask';
    this._mask = Mask.parseMask(mask);
    this._states = [];
    this._stateIdx = -1;
    this._placeholder = placeholder;
  }

  // public interfaces
  get viewValue() {
    throw new Error('get view value must me overrited');
  }
  set viewValue(value) {
    throw new Error('get view value must me overrited');
  }

  get value() {
    return this.viewValue;
  }
  set value(value) {
    this.model = Mask.parse(value, this.mask);
  }
  get model() {
    return this._modelGetter();
  }
  set model(modelValue) {
    this._modelSetter(modelValue);
  }

  _modelGetter() {
    return Mask.parse(this.value, this.mask);

  }
  _modelSetter(modelValue) {
    this.viewValue = this._placeholder ?
    Mask.formatWithPlaceholder(modelValue, this.mask, this._placeholder) :
    Mask.format(modelValue, this.mask);
  }

  _getModelPosition(maskPosition) {
    return this.mask.slice(0, maskPosition).reduce((sum, cur) => sum += !(cur instanceof MaskPlaceStatic), 0);
  }
  _getMaskPosition(modelPosition) {
    return this.mask.reduce(
      (sum, cur) => {
        if (modelPosition === -1) return sum;
        if (cur instanceof MaskPlaceStatic) return sum + 1;
        modelPosition--;
        return sum + 1;
      }, -1
    );
  }
  _getCursorPosition(leftPlaces) {
    let finish = false;

    return this.mask.reduce(
      (sum, cur, i) => {
        if (finish) return sum;
        if (cur instanceof MaskPlaceStatic) {
          return sum + 1;
        }
        if (leftPlaces === -1) {
          finish = true;
          return sum;
        }
        leftPlaces--;
        return sum + 1;
      }
    , 0);
  }

  get __modelSize() {
    return this.mask.reduce((sum, cur) => sum += !(cur instanceof MaskPlaceStatic), 0);
  }
  /**
   * Adding string/char by cursort position.
   * By default. insert at the end of the mask
   * @param {string} char - insert string
   * @param {number} position - cursor position
   * @returns {number} cursor position
   */
  add(char = '', position = this.value.length) {
    const modelPosition = this._getModelPosition(position);
    const model = this.model;
    const leftPlaces = this.__modelSize - model.length;

    let insertChunk = char.split('').map((i, idx) => {
      const nextMask = this.mask[this._getMaskPosition(modelPosition + idx)];

      return nextMask.test(i) ? i : '';
    }).join('').slice(0, leftPlaces);

    if (insertChunk.length === 0) return position;
    const newModel = model.slice(0, modelPosition) + insertChunk + model.slice(modelPosition);

    this.model = newModel;
    this.saveState(newModel);

    let newPosition = this._getCursorPosition(modelPosition + (insertChunk.length - 1));
    let maxPosition = this._getCursorPosition(newModel.length - 1);

    return newPosition > maxPosition ? maxPosition : newPosition;
  }
  /**
   * Remove from mask by start and end selection positions
   * @param {number} start selection`s start cursor position
   * @param {number} end selection`s end cursor position
   * @throws end must be >= start
   * @returns {number} cursor position
   */
  remove(start, end) {
    const model = this.model;

    if (end < start) return start;

    const startModel = this._getModelPosition(start);
    const endModel = this._getModelPosition(end);
    const newModel = model.slice(0, startModel) + model.slice(endModel);

    this.model = newModel;
    this.saveState(newModel);

    return start;
  }
  backspace(position) {
    if (position === 0) return position;
    const prevCharacter = this._getModelPosition(position);

    if (prevCharacter === 0) return position;
    return this.remove(this._getCursorPosition(prevCharacter - 2), position);
  }
  forwardDelete(position) {
    if (position === this.mask.length) return position;
    const prevCharacter = this._getModelPosition(position);

    return this.remove(position, this._getCursorPosition(prevCharacter));
  }
  undo(position) {
    if (this._stateIdx === -1) return position;

    this._stateIdx -= 1;
    this.model = this._states[this._stateIdx];
    let maxPosition = this._getCursorPosition(this.model.length - 1);

    return Math.min(position, maxPosition);
  }
  redo(position) {
    const nextState = this._states[this._stateIdx + 1];

    if (!nextState) return position;
    this._stateIdx++;
    this.model = nextState;
    let maxPosition = this._getCursorPosition(this.model.length - 1);

    return Math.min(position, maxPosition);
  }
  saveState(state) {
    this._states = this._states.slice(0, this._stateIdx + 1);
    this._states.push(state);
    this._stateIdx = this._states.length - 1;
  }
  autocomplete(value) {
    return Mask.autocomplete(value, this.mask);
  }

  get name() {
    return this._name;
  }
  get mask() {
    return this._mask;
  }
}
Mask.maskedOptions = {
  '1': /\d/,
  'w': /[a-zA-Z]/
};
Mask.parseMask = function (mask = '') {
  return String(mask).split('').map((i, idx) => MaskPlace.create(Mask.maskedOptions[i] || i, idx));
};
Mask.format = function (value, maskArr = []) {
  value = value || '';
  return typeof maskArr[0] === 'undefined' ? '' :
  maskArr[0] instanceof MaskPlaceStatic ? (maskArr[0].pattern + Mask.format(value, maskArr.slice(1))) :
  maskArr[0].test(value[0]) ? ((value[0] || '') + Mask.format(value.slice(1), maskArr.slice(1))) : '';
};
Mask.formatWithPlaceholder = function (value, maskArr = [], placeholder = '_') {
  const formattedValue = Mask.format(value, maskArr);

  return maskArr.slice(formattedValue.length).reduce(
    (cur, i) => cur + ((i instanceof MaskPlaceStatic) ? i.pattern : String(placeholder)[0]),
    formattedValue
  );
};
Mask.parse = function (value, maskArr = []) {
  value = value || '';
  return typeof maskArr[0] === 'undefined' ? '' :
  maskArr[0] instanceof MaskPlaceStatic ?
  maskArr[0].test(value[0]) ?
  (Mask.parse(value.slice(1), maskArr.slice(1))) :
  '' :
  maskArr[0].test(value[0]) ? (value[0] + Mask.parse(value.slice(1), maskArr.slice(1))) : '';
};

const isInMask = (char, maskArr) => maskArr.some(i => i.test(char));

Mask.autocomplete = function (value, maskArr = []) {
  value = value || '';
  const [char, ...restValue] = value;
  const [maskChar, ...restMask] = maskArr;

  if (typeof maskChar === 'undefined' || typeof char === 'undefined') return '';
  if (!isInMask(char, maskArr)) return Mask.autocomplete(restValue, maskArr);

  return maskChar.test(char) ?
    (char + Mask.autocomplete(restValue, restMask)) :
    (maskChar instanceof MaskPlaceStatic) ?
      (maskChar.pattern + Mask.autocomplete(value, restMask)) :
      '';
};
