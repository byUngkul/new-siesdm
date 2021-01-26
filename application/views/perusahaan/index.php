<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class='btn-group btn-group-sm float-right' role='group'>
            <a href="<?= base_url('perusahaan/tambah') ?>" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Tambah</a>
            <a href="<?= base_url('perusahaan/cetak_pdf') ?>" target="_blank" class="btn btn-success"><i class="fas fa-print"></i> Cetak</a>
            <a href="<?= base_url('perusahaan/cetak_excel') ?>"  class="btn btn-warning"><i class="fas fa-file-excel"></i> Cetak</a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped" id="tabelPerusahaan">
                <thead class="bg-info text-white">
                    <tr>
                        <th>No</th>
                        <th>Nama Perusahaan</th>
                        <th>Pemilik</th>
                        <th>Jenis Usaha</th>
                        <th>Alamat</th>
                        <th>Wilayah</th>
                        <th width="150px">#</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
</div>