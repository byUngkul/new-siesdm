<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
</div>

<div class="card shadow mb-4">
	<div class="card-header py-3">
	</div>
	<form action="<?= base_url('user/simpan_password') ?>" method="POST">
		<div class="card-body ">
			<input type="hidden" name="id_user" id="id_user" value="<?= $id_user ?>">
			<div class="form-row mb-2">
				<label class="col-md-2 col-form-label col-form-label-sm mr-0 pr-0">Password Lama</label>
				<div class="col-md-3 pl-0 ml-0">
					<input type="password" class="form-control form-control-sm" name="password_lama" id="password_lama" value="">
					<span style="color: red; font-size: 11px;">
						<?= form_error('password_lama'); ?>
					</span>
				</div>
			</div>

			<div class="form-row  mb-2">
				<label class="col-md-2 col-form-label col-form-label-sm mr-0 pr-0">Password</label>
				<div class="col-md-3 pl-0 ml-0">
					<input type="password" class="form-control form-control-sm" id="password" name="password" value="">
					<span style="color: red; font-size: 11px;">
						<?= form_error('password'); ?>
					</span>
				</div>
			</div>

			<div class="form-row  mb-2">
				<label class="col-md-2 col-form-label col-form-label-sm mr-0 pr-0">Ulangi Password</label>
				<div class="col-md-3 pl-0 ml-0">
					<input type="password" class="form-control form-control-sm" id="passconf" name="passconf" value="">
					<span style="color: red; font-size: 11px;">
						<?= form_error('passconf'); ?>
					</span>
				</div>
			</div>
			<?= validation_errors() ?>
		</div>
		<div class="card-footer pb-5">
			<button type="submit" class="btn btn-primary btn-sm float-right">simpan</button>
			<a href="<?= base_url('user') ?>" class="btn btn-info btn-sm float-right mr-2">Kembali</a>
		</div>
	</form>
</div>
