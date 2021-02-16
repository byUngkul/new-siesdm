<input type="hidden" name="id_user" id="id_user" value="<?= isset($user) ? $user->id_user : null ?>">
<div class="form-row mb-2">
	<label class="col-md-2 col-form-label col-form-label-sm mr-0 pr-0">Username</label>
	<div class="col-md-3 pl-0 ml-0">
		<input type="text" class="form-control form-control-sm" name="username" id="username" value="<?= isset($user) ? $user->username : set_value('username') ?>">
		<span style="color: red; font-size: 11px;">
			<?= form_error('username'); ?>
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
		<input type="password" class="form-control form-control-sm" id="password_conf" name="password_comf" value="">
		<span style="color: red; font-size: 11px;">
			<?= form_error('password_conf'); ?>
		</span>
	</div>
</div>

<div class="form-row  mb-2">
	<label class="col-md-2 col-form-label col-form-label-sm mr-0 pr-0">Pegawai</label>
	<div class="col-md-3 pl-0 ml-0">
		<select name="id_pegawai" id="id_pegawai" class="form-control form-control-sm">
			<option value="">Pilih</option>
			<?php foreach ($pegawais as $pegawai) : ?>
				<option <?= (isset($user) && $pegawai['id_pegawai'] == $user->id_pegawai) ? 'selected' : '' ?> value="<?= $pegawai['id_pegawai'] ?>"><?= $pegawai['nama_pegawai'] ?></option>
			<?php endforeach; ?>
		</select>
	</div>
</div>

<div class="form-row  mb-2">
	<label class="col-md-2 col-form-label col-form-label-sm mr-0 pr-0">Otoritas</label>
	<div class="col-md-3 pl-0 ml-0">
		<select name="id_role" id="id_role" class="form-control form-control-sm">
			<option value="">Pilih</option>
			<?php foreach ($roles as $role) : ?>
				<option <?= (isset($user) && $role['id_role'] == $user->id_role) ? 'selected' : '' ?> value="<?= $role['id_role'] ?>"><?= $role['name_role'] ?></option>
			<?php endforeach; ?>
		</select>
		<span style="color: red; font-size: 11px;">
			<?= form_error('id_role'); ?>
		</span>
	</div>
</div>

<div class="form-row  mb-2">
	<label class="col-md-2 col-form-label col-form-label-sm mr-0 pr-0">Bidang</label>
	<div class="col-md-3 pl-0 ml-0">
		<select name="id_bidang" id="id_bidang" class="form-control form-control-sm">
			<option value="">Pilih</option>
			<option <?= (isset($user) && $user->id_bidang == '1') ? 'selected' : '' ?> value="1">Air Tanah</option>
			<option <?= (isset($user) && $user->id_bidang == '2') ? 'selected' : '' ?> value="2">Pertambangan</option>
		</select>
	</div>
</div>
