<style>
    .lightbox-gallery {
        /* background-image: linear-gradient(#4A148C, #E53935); */
        background-repeat: no-repeat;
        color: #000;
        overflow-x: hidden
    }

    .lightbox-gallery p {
        color: #fff
    }

    .lightbox-gallery h2 {
        font-weight: bold;
        margin-bottom: 40px;
        padding-top: 40px;
        color: #fff
    }

    @media (max-width:767px) {
        .lightbox-gallery h2 {
            margin-bottom: 25px;
            padding-top: 25px;
            font-size: 24px
        }
    }

    .lightbox-gallery .intro {
        font-size: 16px;
        max-width: 500px;
        margin: 0 auto 40px
    }

    .lightbox-gallery .intro p {
        margin-bottom: 0
    }

    .lightbox-gallery .photos {
        padding-bottom: 20px
    }

    .lightbox-gallery .item {
        padding-bottom: 30px
    }
</style>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
</div>

<div class="card">
    <div class="card-header py-2">
        <a href="<?= base_url('perusahaan') ?>" class="btn btn-info btn-sm mr-2">Kembali</a>
    </div>
    <div class="card-body">
        <div class="col-md-12">
            <span class="h4 font-weight-bold"><?= $perusahaan['nama_perusahaan'] ?></span>
            <hr class="mt-1">
        </div>
        <div class="col-md-12">
            <div class="row">

                <div class="col-md-8">
                    <div class="col-md-12">
                        <div class="row align-items-center p-0">
                            <div class="col">
                                <h6 class="mb-0">Nama Pemilik</h6>
                            </div>
                            <div class="col-auto">
                                <small class="text-muted"><?= $perusahaan['nama_pemilik'] ?></small>
                            </div>
                        </div>
                        <hr class="my-1">
                    </div>

                    <div class="col-md-12">
                        <div class="row align-items-center p-0">
                            <div class="col">
                                <h6 class="mb-0">Bidang Usaha</h6>
                            </div>
                            <div class="col-auto">
                                <small class="text-muted"><?= $perusahaan['jns_usaha'] ?></small>
                            </div>
                        </div>
                        <hr class="my-1">
                    </div>

                    <div class="col-md-12">
                        <div class="row align-items-center p-0">
                            <div class="col">
                                <h6 class="mb-0">Wilayah</h6>
                            </div>
                            <div class="col-auto">
                                <small class="text-muted"><?= $perusahaan['nama_kota'] ?></small>
                            </div>
                        </div>
                        <hr class="my-1">
                    </div>

                    <div class="col-md-12">
                        <div class="row align-items-center p-0">
                            <div class="col">
                                <h6 class="mb-0">Status Modal</h6>
                            </div>
                            <div class="col-auto">
                                <small class="text-muted"><?= $perusahaan['status_modal'] ?></small>
                            </div>
                        </div>
                        <hr class="my-1">
                    </div>

                    <div class="col-md-12">
                        <div class="row align-items-center p-0">
                            <div class="col">
                                <h6 class="mb-0">Telp./Fax Perusahaan</h6>
                            </div>
                            <div class="col-auto">
                                <small class="text-muted"><?= $perusahaan['tlp_perusahaan'] . '/' . $perusahaan['tlp_perusahaan'] ?></small>
                            </div>
                        </div>
                        <hr class="my-1">
                    </div>

                    <div class="col-md-12">
                        <div class="row align-items-center p-0">
                            <div class="col">
                                <h6 class="mb-0">Email Perusahaan</h6>
                            </div>
                            <div class="col-auto">
                                <small class="text-muted"><?= $perusahaan['email'] ?></small>
                            </div>
                        </div>
                        <hr class="my-1">
                    </div>

                    <div class="col-md-12">
                        <div class="row align-items-center p-0">
                            <div class="col">
                                <h6 class="mb-0">Penanggung Jawab Perusahaan</h6>
                            </div>
                            <div class="col-auto">
                                <small class="text-muted"><?= $perusahaan['kontak_person'] ?></small>
                            </div>
                        </div>
                        <hr class="my-1">
                    </div>

                    <div class="col-md-12">
                        <div class="row align-items-center p-0">
                            <div class="col">
                                <h6 class="mb-0">Tlp./HP Penanggung Jawab</h6>
                            </div>
                            <div class="col-auto">
                                <small class="text-muted"><?= $perusahaan['tlp_person'] ?></small>
                            </div>
                        </div>
                        <hr class="my-1">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="lightbox-gallery">
                        <div class="container">
                            <?php
                            $arr_img = '';
                            if ($perusahaan['poto_perusahaan'] != null) {
                                $remove_char = str_replace(str_split('[]"'), '', $perusahaan['poto_perusahaan']);
                                $arr_img = explode(',', $remove_char);
                            }

                            ?>

                            <div class="row photos">
                                <?php
                                if ($arr_img != '') :
                                    foreach ($arr_img as $img) :
                                ?>
                                        <div class="col-md-6 item">
                                            <a href="<?= base_url('uploads/poto_perusahaan/') . $img ?>" data-lightbox="photos">
                                                <img class="img-fluid" src="<?= base_url('uploads/poto_perusahaan/') . $img ?>">
                                            </a>
                                        </div>
                                <?php
                                    endforeach;
                                endif;
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>