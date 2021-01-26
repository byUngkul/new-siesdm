<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
</div>

<div class="col-md-6">
    <div class="card shadow-sm mb-4">
        <div class="card-header">
        </div>
        <form action="<?= base_url('dinas/simpan') ?>" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <div class="form-row">
                    <input type="hidden" name="id_dinas" id="id_dinas" value="<?= isset($dinas) ? $dinas['id_dinas'] : null ?>">
                    <label class="col-sm-2 col-form-label col-form-label-sm mr-0 pr-0">Nama Dians</label>
                    <div class="form-group col-md-6 pl-0 ml-0">
                        <input type="text" readonly class="form-control form-control-sm" name="nama_dinas" id="nama_dinas" value="<?= isset($dinas) ? $dinas['nama_dinas'] : null ?>">
                    </div>
                </div>
    
                <div class="form-row">
                    <label class="col-sm-2 col-form-label col-form-label-sm mr-0 pr-0">Singkatan</label>
                    <div class="form-group col-md-6 pl-0 ml-0">
                        <input type="text" readonly class="form-control form-control-sm" id="singkatan_dinas" name="singkatan_dinas" value="<?= isset($dinas) ? $dinas['singkatan_dinas'] : null ?>">
                    </div>
                </div>
    
                <div class="form-row">
                    <label class="col-sm-2 col-form-label col-form-label-sm mr-0 pr-0">Cabang</label>
                    <div class="form-group col-md-6 pl-0 ml-0">
                        <input type="text" readonly class="form-control form-control-sm" id="cabang_dinas" name="cabang_dinas" value="<?= isset($dinas) ? $dinas['cabang_dinas'] : null ?>">
                    </div>
                </div>
    
                <div class="form-row">
                    <label class="col-sm-2 col-form-label col-form-label-sm mr-0 pr-0">Alamat</label>
                    <div class="form-group col-md-6 pl-0 ml-0">
                        <textarea readonly name="alamat_dinas" id="alamat_dinas" class="form-control form-control-sm" cols="30" rows="1"><?= isset($dinas) ? $dinas['alamat_dinas'] : null ?></textarea>
                    </div>
                </div>
    
                <div class="form-row">
                    <label class="col-sm-2 col-form-label col-form-label-sm mr-0 pr-0">Alamat</label>
                    <div class="form-group col-md-6 pl-0 ml-0">
                        <input type="file" class="ml-2 pl-0 col-sm-10 form-control-file form-control-sm" id="logo" name="logo" value="" />
                    </div>
                </div>
    
                <div class="form-row">
                    <?php $logo = base_url() . 'uploads/logo/logo-jabar.png' ?>
    
                    <div class="col-md-12 justify-content-center">
                        <img src="<?= $logo ?>" width="50%" class="rounded mx-auto d-block" id="logoPreview">
                    </div>
                </div>
    
            </div>
            <div class="card-footer mb-4">
                <button type="submit" class="btn btn-primary btn-sm float-right" id="btnSimpan" style="display: none;">Simpan</button>
                <button type="button" class="btn btn-warning btn-sm float-right" id="btnEdit">Edit</button>
                <a href="<?= base_url('perusahaan') ?>" class="btn btn-info btn-sm float-right mr-2">Kembali</a>
            </div>
        </form>
    </div>
</div>