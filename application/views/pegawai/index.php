<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
</div>

<div class="card shadow mb-4">
	<div class="card-header py-3">
		<div class='btn-group btn-group-sm float-right' role='group'>
			<a href="<?= base_url('pegawai/tambah') ?>" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Tambah</a>
		</div>
	</div>
	<div class="card-body">
		<div class="table-responsive-md">
			<table class="table table-hover table-striped table-sm" id="tabelPegawai">
				<thead class="bg-info text-white">
					<tr>
						<th class="text-center">No</th>
						<th class="text-center">Nama</th>
						<th class="text-center">Jabatan</th>
						<th class="text-center">NIP</th>
						<th class="text-center" width="150px">Aksi</th>
					</tr>
				</thead>
				<tbody></tbody>
			</table>
		</div>
	</div>
</div>

<div class="modal fade" id="deleteDialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header bg-danger text-gray-200">
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
				<button type="button" class="btn btn-sm btn-danger float-info" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
