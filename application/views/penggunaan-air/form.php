<div class="form-row">
    <input type="hidden" name="id_perusahaan" id="id_perusahaan" value="<?= isset($perusahaan) ? $perusahaan['id_perusahaan'] : null ?>">
    <label class="col-sm-2 col-form-label col-form-label-sm mr-0 pr-0">Nama Perusahan</label>
    <div class="form-group col-md-3 pl-0 ml-0">
        <input type="text" class="form-control form-control-sm" name="nama_perusahaan" id="nama_perusahaan" value="<?= isset($perusahaan) ? $perusahaan['nama_perusahaan'] : null ?>">
    </div>

    <label class="col-sm-2 col-form-label col-form-label-sm mr-0 pr-0">Pemilik</label>
    <div class="form-group col-md-3 pl-0 ml-0">
        <input type="text" class="col-md-10 form-control form-control-sm" id="nama_pemilik" name="nama_pemilik" value="<?= isset($perusahaan) ? $perusahaan['nama_pemilik'] : null ?>">
    </div>
</div>

<div class="form-row">
    <label class="col-sm-2 col-form-label col-form-label-sm mr-0 pr-0">Penanggung Jawab</label>
    <div class="form-group col-md-3 pl-0 ml-0">
        <input type="text" class="col-md-10 form-control form-control-sm" id="kontak_person" name="kontak_person" value="<?= isset($perusahaan) ? $perusahaan['kontak_person'] : null ?>">
    </div>

    <label class="col-sm-2 col-form-label col-form-label-sm mr-0 pr-0">Telp Kontak</label>
    <div class="form-group col-md-3 pl-0 ml-0">
        <input type="text" class="col-md-6 form-control form-control-sm" id="tlp_person" name="tlp_person" value="<?= isset($perusahaan) ? $perusahaan['tlp_person'] : null ?>">
    </div>
</div>



<div class="form-row">
    <label class="col-sm-2 col-form-label col-form-label-sm mr-0 pr-0">Jenis Usaha</label>
    <div class="form-group col-md-3 pl-0 ml-0">
        <input type="text" class="col-md-6 form-control form-control-sm" id="jns_usaha" name="jns_usaha" value="<?= isset($perusahaan) ? $perusahaan['jns_usaha'] : null ?>">
    </div>

    <label class="col-sm-2 col-form-label col-form-label-sm mr-0 pr-0">Status</label>
    <div class="form-group col-md-3 pl-0 ml-0">
        <select type="text" class="col-md-4 form-control form-control-sm" id="status_modal" name="status_modal">
            <option value="">Pilih</option>
            <?php 
                $status_modal = '';
                if (isset($perusahaan)) {
                    $status_modal = $perusahaan['status_modal'];
                }
            ?>
            <option <?= ($status_modal == 'PMDN')  ? 'selected' : '' ?> value="PMDN">PMDN</option>
            <option <?= ($status_modal == 'PMA')  ? 'selected' : '' ?> value="PMA">PMA</option>
        </select>
    </div>
</div>

<div class="form-row">
    <label class="col-sm-2 col-form-label col-form-label-sm mr-0 pr-0">Wilayah</label>
    <div class="form-group col-md-3 pl-0 ml-0">
        <select name="wilayah" id="wilayah" class="col-md-6 form-control form-control-sm">
            <option value="">Pilih</option>
            <?php
            foreach ($kota as $kt) :
                $select = '';
                if (isset($perusahaan)) {
                    $select = ($perusahaan['id_kota'] == $kt->id) ? 'selected' : '';
                }

                echo '<option value="'. $kt->id .'"'. $select .'>'.
                     $kt->nama_kota
                .'</option>';
            endforeach; ?>
        </select>
    </div>

    <label class="col-sm-2 col-form-label col-form-label-sm mr-0 pr-0">Alamat</label>
    <div class="form-group col-md-3 pl-0 ml-0">
        <textarea type="text" class="form-control form-control-sm" id="alamat_perusahaan" name="alamat_perusahaan" rows="1"><?= isset($perusahaan) ? $perusahaan['alamat_perusahaan'] : null ?></textarea>
    </div>
</div>

<div class="form-row">
    <label class="col-sm-2 col-form-label col-form-label-sm mr-0 pr-0">Telp.</label>
    <div class="form-group col-md-3 pl-0 ml-0">
        <input type="text" class="col-md-6 form-control form-control-sm" id="tlp_perusahaan" name="tlp_perusahaan" value="<?= isset($perusahaan) ? $perusahaan['tlp_perusahaan'] : null ?>">
    </div>

    <label class="col-sm-2 col-form-label col-form-label-sm mr-0 pr-0">Fax</label>
    <div class="form-group col-md-3 pl-0 ml-0">
        <input type="text" class="col-md-6 form-control form-control-sm" id="fax_perusahaan" name="fax_perusahaan" value="<?= isset($perusahaan) ? $perusahaan['fax_perusahaan'] : null ?>">
    </div>
</div>

<div class="form-row">
    <label class="col-sm-2 col-form-label col-form-label-sm mr-0 pr-0">Email</label>
    <div class="form-group col-md-3 pl-0 ml-0">
        <input type="text" class="col-md-6 form-control form-control-sm" id="email" name="email" value="<?= isset($perusahaan) ? $perusahaan['email'] : null ?>">
    </div>

    <label class="col-sm-2 col-form-label col-form-label-sm mr-0 pr-0">Luas Area (m<sup>2</sup>)</label>
    <div class="form-group col-md-3 pl-0 ml-0">
        <input type="text" class="col-md-3 form-control form-control-sm" id="luas_area" name="luas_area" value="<?= isset($perusahaan) ? $perusahaan['luas_area'] : null ?>">
    </div>

</div>

<div class="form-row">
    <label class="col-sm-2 col-form-label col-form-label-sm mr-0 pr-0">Photo</label>
    <div class="form-group col-md-3 pl-0 ml-0">
        <button type="button" class="btn btn-success btn-sm" id="addPoto">tambah</button>
    </div>
</div>

<div class="form-row">
    <div class="col-sm-2"></div>
    <div id="poto_perusahaan">

    </div>
</div>