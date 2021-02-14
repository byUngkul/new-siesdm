<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
</div>

<div class="card shadow mb-4">
	<div class="card-header py-3">
		<div class='btn-group btn-group-sm float-right' role='group'>
			<a href="<?= base_url('sumur/tambah') ?>" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Tambah</a>
			<!-- <a href="<?= base_url('sumur/tambah') ?>" class="btn btn-primary float-right">Tambah</a> -->
			<button class="btn btn-success" data-toggle="modal" data-target="#cetakDialog"><i class="fas fa-print"></i> Cetak</button>
		</div>
	</div>
	<div class="card-body">
		<!-- <div class="col-md-12">
            <div class="form-row">
                <div class="col-md-2 pl-0 ml-0">
                    <input type="text" id="sCari" name="sCari" class="form-control form-control-sm" placeholder="Cari">
                </div>
            </div>
        </div> -->
		<div class="table-responsive-md">
			<table class="table table-hover table-striped table-sm" id="table_sumur">
				<thead class="bg-info text-white">
					<tr>
						<th class="text-center">No</th>
						<th class="text-center">Nama Perusahaan</th>
						<th class="text-center">No Sumur</th>
						<th class="text-center">Jenis Sumur</th>
						<th class="text-center">Status Izin SIPA</th>
						<th class="text-center">No SIPA</th>
						<th class="text-center">Masa Berlaku</th>
						<th class="text-center">Wilayah</th>
						<th class="text-center" width="150px">Aksi</th>
					</tr>
				</thead>
				<tbody></tbody>
			</table>
		</div>
	</div>
</div>

<!-- MODAL CETAK -->
<div class="modal fade" id="cetakDialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-gray-300">
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
						<?php foreach ($wilayah as $v): ?>
						<option value="<?= $v->id ?>"><?= $v->nama_kota ?></option>
						<?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Jenis Sumur</label>
                    <select name="jenis_sumur_cetak" id="jenis_sumur_cetak" class="form-control">
                        <option value="">Pilih</option>
						<?php foreach ($jenis_sumur as $v): ?>
						<option value="<?= $v['id']?>"><?= $v['jenis_sumur'] ?></option>
						<?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Masa Berlaku SIPA</label>
                    <input type="text" class="form-control" name="tgl_pendataan_cetak" id="tgl_pendataan_cetak">
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
                <div>
                    <button type="button" id="btnPdf" class="btn btn-sm btn-primary float-right ml-2"><i class="fas fa-file-pdf"></i> PDF</button>
                    <button type="button" id="btnExcel" class="btn btn-sm btn-info float-right"><i class="fas fa-file-excel"></i> Excel</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL DELETE -->
<div class="modal fade" id="deleteDialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header bg-danger text-white">
				<h5 class="modal-title" id="exampleModalLabel">Cetak Data</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<input type="hidden" name="idDialogHapus" id="idDialogHapus">
				<input type="text" name="messageDialog" id="messageDialog" class="form-control form-control-sm" value="Yakin akan hapus data ini?" readonly>
			</div>
			<div class="modal-footer">
				<button type="button" id="btnHapus" class="btn btn-sm btn-danger float-right"><i class="fas fa-trash"></i> Hapus</button>
				<button type="button" class="btn btn-sm btn-info float-right" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
