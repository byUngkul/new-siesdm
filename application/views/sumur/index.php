<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
</div>
    
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="<?= base_url('user/tambah') ?>" class="btn btn-primary float-right">Tambah</a>
    </div>
    <div class="card-body">
        <div class="col-md-12">
            <div class="form-row">
                <div class="col-md-2 pl-0 ml-0">
                    <input type="text" class="form-control form-control-sm" placeholder="Cari">
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped" id="table_sumur">
                <thead class="bg-info text-white">
                    <tr>
                        <th>No</th>
                        <th>Nama Perusahaan</th>
                        <th>No Sumur</th>
                        <th>Jenis Sumur</th>
                        <th>Status Izin SIPA</th>
                        <th>No SIPA</th>
                        <th>Masa Berlaku</th>
                        <th>Wilayah</th>
                        <th width="150px">#</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
</div>