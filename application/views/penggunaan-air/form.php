<div class="form-row">
    <input type="hidden" name="id_penggunaanair" id="id_penggunaanair" value="<?= isset($penggunaanair) ? $penggunaanair['id_penggunaanair'] : null ?>">
    <label class="col-md-3 col-form-label col-form-label-sm mr-0 pr-0">Nama Perusahan</label>
    <div class="form-group col-md-6 pl-0 ml-0">
        <select name="id_perusahaan" id="id_perusahaan" class="form-control form-control-sm" onchange="noSumurDropdown()">
            <?php foreach ($perusahaan as $v) : ?>
                <option <?= (isset($penggunaanair) && $penggunaanair['id_perusahaan'] == $v['id_perusahaan']) ? 'selected' : '' ?> value="<?= $v['id_perusahaan'] ?>"><?= $v['nama_perusahaan'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>

</div>

<div class="form-row">
    <label class="col-md-3 col-form-label col-form-label-sm mr-0 pr-0">Sumur</label>
    <div class="form-group col-md-6 pl-0 ml-0">
        <select name="id_sumur" id="id_sumur" class="form-control form-control-sm col-md-10">
            <option value="">Pilih</option>
        </select>
    </div>
</div>

<div class="form-row">
    <label class="col-md-3 col-form-label col-form-label-sm mr-0 pr-0">Debit Air</label>
    <div class="form-group col-md-6 pl-0 ml-0">
        <input type="text" class="col-md-10 form-control form-control-sm" id="debit_air" name="debit_air" value="<?= isset($penggunaanair) ? $penggunaanair['debit_air'] : null ?>">
    </div>

</div>

<div class="form-row">
    <label class="col-md-3 col-form-label col-form-label-sm mr-0 pr-0">Bulan</label>
    <div class="form-group col-md-6 pl-0 ml-0">
        <input type="text" class="col-md-6 form-control form-control-sm" id="bulan" name="bulan" value="<?= isset($penggunaanair) ? $penggunaanair['bulan'] : null ?>">
    </div>
</div>

<div class="form-row">
    <label class="col-md-3 col-form-label col-form-label-sm mr-0 pr-0">Tahun</label>
    <div class="form-group col-md-6 pl-0 ml-0">
        <input type="text" class="col-md-6 form-control form-control-sm" id="tahun" name="tahun" value="<?= isset($penggunaanair) ? $penggunaanair['tahun'] : null ?>">
    </div>
</div>