<div class="form-row">
    <input type="hidden" name="id_pegawai" id="id_pegawai" value="<?= isset($pegawai) ? $pegawai['id_pegawai'] : null ?>">
    <label class="col-md-3 col-form-label col-form-label-sm mr-0 pr-0">Nama Pegawai</label>
    <div class="form-group col-md-6 pl-0 ml-0">
        <input type="text" class="form-control form-control-sm" id="nama_pegawai" name="nama_pegawai" value="<?= isset($pegawai) ? $pegawai['nama_pegawai'] : null ?>">
    </div>

</div>

<div class="form-row">
    <label class="col-md-3 col-form-label col-form-label-sm mr-0 pr-0">Jabatan</label>
    <div class="form-group col-md-6 pl-0 ml-0">
        <input type="text" class="form-control form-control-sm" id="jabatan_pegawai" name="jabatan_pegawai" value="<?= isset($pegawai) ? $pegawai['jabatan_pegawai'] : null ?>">
    </div>
</div>

<div class="form-row">
    <label class="col-md-3 col-form-label col-form-label-sm mr-0 pr-0">NIP</label>
    <div class="form-group col-md-6 pl-0 ml-0">
        <input type="text" class="form-control form-control-sm" id="nip_pegawai" name="nip_pegawai" value="<?= isset($pegawai) ? $pegawai['nip_pegawai'] : null ?>">
    </div>
</div>
