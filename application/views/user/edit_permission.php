<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
</div>

<div class="card shadow mb-4">
	<div class="card-header py-3">
			<h5 class="mt-3">Daftar Permission</h5>
	</div>
	<form action="<?= base_url('user/simpan_permission') ?>" method="POST" enctype="multipart/form-data">
		<div class="card-body ">
			<input type="hidden" name="iduser" id="iduser" value="<?= $iduser ?>">
			<div id="permission_list"></div>
		</div>
		<div class="card-footer pb-5">
			<button type="submit" class="btn btn-primary btn-sm float-right">Simpan</button>
			<a href="<?= base_url('user') ?>" class="btn btn-info btn-sm float-right mr-2">Kembali</a>
		</div>
	</form>
</div>
