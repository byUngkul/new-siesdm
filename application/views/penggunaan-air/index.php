<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class='btn-group btn-group-sm float-right' role='group'>
            <a href="<?= base_url('penggunaanair/tambah') ?>" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Tambah</a>
            <button class="btn btn-success" data-toggle="modal" data-target="#cetakDialog"><i class="fas fa-print"></i> Cetak</button>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped" id="tabelPenggunaanAir">
                <thead class="bg-info text-white">
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Nama Perusahaan</th>
                        <th class="text-center">Kota</th>
                        <th class="text-center">No. Sumur</th>
                        <th class="text-center">Bulan</th>
                        <th class="text-center">Tahun</th>
                        <th class="text-center">Jml Pengambilan</th>
                        <th class="text-center">Debit Izin Perhari</th>
                        <th class="text-center">Debit Izin Perbulan</th>
                        <th class="text-center">Status</th>
                        <th class="text-center" width="150px">Aksi</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="cetakDialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cetak Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Wilayah</label>
                    <select name="wilayah_cetak" id="wilayah_cetak" class="form-control">
                        <option value="">Pilih</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Status Modal</label>
                    <select name="status_modal_cetak" id="status_modal_cetak" class="form-control">
                        <option value="">Pilih</option>
                        <option value="PMDN">PMDN</option>
                        <option value="PMA">PMA</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Tanggal Pendataan</label>
                    <input type="text" class="form-control" name="create_cetak" id="create_cetak">
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
                <div>
                    <button type="button" class="btn btn-sm btn-primary float-right ml-2"><i class="fas fa-file-pdf"></i> PDF</button>
                    <button type="button" class="btn btn-sm btn-info float-right"><i class="fas fa-file-excel"></i> Excel</button>
                </div>
            </div>
        </div>
    </div>
</div>
