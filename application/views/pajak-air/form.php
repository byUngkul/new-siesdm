<div class="form-row">
    <input type="hidden" name="id_pjk" id="id_pjk" value="<?= isset($pajakabt) ? $pajakabt->id_pjk : null ?>">
    <label class="col-md-3 col-form-label col-form-label-sm mr-0 pr-0">Nama Perusahan</label>
    <div class="form-group col-md-6 pl-0 ml-0">
        <select name="id_perusahaan" id="id_perusahaan" class="form-control form-control-sm" onchange="noSumurDropdown()">
            <?php foreach ($perusahaan as $v) : ?>
                <option <?= (isset($pajakabt) && $pajakabt->id_pers == $v['id_perusahaan']) ? 'selected' : '' ?> value="<?= $v['id_perusahaan'] ?>"><?= $v['nama_perusahaan'] ?></option>
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
    <label class="col-md-3 col-form-label col-form-label-sm mr-0 pr-0">Nilai Pajak</label>
    <div class="form-group col-md-6 pl-0 ml-0">
        <input type="text" style="text-align: right;" class="col-md-6 form-control form-control-sm" id="nilai_pajak" name="nilai_pajak" value="<?= isset($pajakabt) ? $pajakabt->nilai_pjk : null ?>">
    </div>
</div>

<div class="form-row">
    <label class="col-md-3 col-form-label col-form-label-sm mr-0 pr-0">Tanggal Pembayaran</label>
    <div class="form-group col-md-6 pl-0 ml-0">
        <input type="text" class="col-md-6 form-control form-control-sm" id="tgl_bayar" name="tgl_bayar" value="<?= isset($pajakabt) ? date('d-m-Y', strtotime($pajakabt->tgl_pjk)) : null ?>">
    </div>
</div>
