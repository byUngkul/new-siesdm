<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
</div>

<div class="col-md-10 ">
    <div class="card shadow-sm ml-0 mb-4">
        <div class="card-header py-3">
        </div>
        <form action="<?= base_url('user/simpan') ?>" method="POST" class="">

            <div class="card-body ">
                <?php $this->load->view('user/form'); ?>
            </div>

            <div class="card-footer pb-5">
                <button type="submit" class="btn btn-primary btn-sm float-right">Simpan</button>
                <a href="<?= base_url('user') ?>" class="btn btn-info btn-sm float-right mr-2">Kembali</a>
            </div>
        </form>
    </div>
</div>