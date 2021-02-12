<div class="form-row bg-info justify-content-center">
	<sapn class="text-white py-1">Data Umum</sapn>
</div>
<div class="pb-3"></div>

<div class="form-row">
	<input type="hidden" name="id_sumur" id="id_sumur" value="<?= isset($sumur) ? $sumur['id_sumur'] : null ?>">
	<label class="col-sm-2 col-form-label col-form-label-sm mr-0 pr-0">Nama Perusahan</label>
	<div class="form-group col-md-3 pl-0 ml-0">
		<select name="id_perusahaan" id="id_perusahaan">
			<?php foreach ($perusahaan as $v) : ?>
				<option <?= (isset($sumur['id_perusahaan']) && $sumur['id_perusahaan'] == $v['id_perusahaan']) ? 'selected' : '' ?> value="<?= $v['id_perusahaan'] ?>"><?= $v['nama_perusahaan'] ?></option>
			<?php endforeach; ?>
		</select>
	</div>

	<label class="col-sm-2 col-form-label col-form-label-sm mr-0 pr-0">No. Sumur</label>
	<div class="form-group col-md-3 pl-0 ml-0">
		<input type="text" class="col-md-10 form-control form-control-sm" id="no_sumur" name="no_sumur" value="<?= isset($sumur) ? $sumur['no_sumur'] : null ?>">
	</div>
</div>

<div class="form-row">
	<label class="col-sm-2 col-form-label col-form-label-sm mr-0 pr-0">Jenis Sumur</label>
	<div class="form-group col-md-3 pl-0 ml-0">
		<select name="id_jenis_sumur" id="id_jenis_sumur">
			<?php foreach ($jenis_sumur as $v) : ?>
				<option <?= (isset($sumur['id_jenis_sumur']) && $sumur['id_jenis_sumur'] == $v['id']) ? 'selected' : '' ?> value="<?= $v['id'] ?>"><?= $v['jenis_sumur'] ?></option>
			<?php endforeach; ?>
		</select>
	</div>

	<label class="col-sm-2 col-form-label col-form-label-sm mr-0 pr-0">Status Perizinan</label>
	<div class="form-group col-md-3 pl-0 ml-0">
		<select name="status_izin" id="status_izin">
			<option <?= (isset($sumur['status_izin']) && $sumur['status_izin'] == '1') ? 'selected' : '' ?> value="1">Ada</option>
			<option <?= (isset($sumur['status_izin']) && $sumur['status_izin'] == '2') ? 'selected' : '' ?> value="2">Tidak Ada</option>
		</select>
	</div>
</div>

<div class="form-row">
	<label class="col-sm-2 col-form-label col-form-label-sm mr-0 pr-0">No. SIPA</label>
	<div class="form-group col-md-3 pl-0 ml-0">
		<input type="text" class="col-md-10 form-control form-control-sm" id="no_sipa" name="no_sipa" value="<?= isset($sumur['no_sipa']) ? $sumur['no_sipa'] : null ?>">
	</div>

	<div class="form-group col-md-3 pl-0 ml-0">
		<input type="file" class="ml-2 pl-0 col-sm-10 form-control-file form-control-sm" name="file_sipa" id="file_sipa" value="" />
	</div>
</div>

<div class="form-row">
	<label class="col-sm-2 col-form-label col-form-label-sm mr-0 pr-0">Tanggal Terbit SIPA</label>
	<div class="form-group col-md-3 pl-0 ml-0">
		<input type="text" class="col-md-10 form-control form-control-sm" id="tgl_terbit_sipa" name="tgl_terbit_sipa" value="<?= isset($sumur['tgl_terbit_sipa']) ? date_indo($sumur['tgl_terbit_sipa']) : null ?>">
	</div>

	<label class="col-sm-2 col-form-label col-form-label-sm mr-0 pr-0">Masa Berlaku SIPA</label>
	<div class="form-group col-md-3 pl-0 ml-0">
		<input type="text" class="col-md-10 form-control form-control-sm" id="tgl_ahir_sipa" name="tgl_ahir_sipa" value="<?= isset($sumur['tgl_ahir_sipa']) ? date_indo($sumur['tgl_ahir_sipa']) : null ?>">
	</div>
</div>

<div class="form-row mb-2">
	<label class="col-sm-2 col-form-label col-form-label-sm mr-0 pr-0">Koordinat</label>
	<div class="col-sm-2 px-0">
		<div class="input-group row pl-2">
			<input type="text" class="form-control form-control-sm col-sm-4" value="<?= isset($sumur['koor_d_ls']) ? $sumur['koor_d_ls'] : '' ?>" placeholder="00&deg;">
			<input type="text" class="form-control form-control-sm col-sm-4" value="<?= isset($sumur['koor_m_ls']) ? $sumur['koor_m_ls'] : '' ?>" placeholder="00&#8216;">
			<input type="text" class="form-control form-control-sm col-sm-4" value="<?= isset($sumur['koor_s_ls']) ? $sumur['koor_s_ls'] : '' ?>" placeholder="00.00&#8220;">
		</div>
	</div>
	<span class="col-sm-1 col-form-label col-form-label-sm m-0 p-0">L/S</span>
	<div class="col-sm-2">
		<div class="input-group row pl-2">
			<input type="text" class="form-control form-control-sm col-sm-4" value="<?= isset($sumur['koor_d_bt']) ? $sumur['koor_d_bt'] : '' ?>" placeholder="&deg;">
			<input type="text" class="form-control form-control-sm col-sm-4" value="<?= isset($sumur['koor_m_bt']) ? $sumur['koor_m_bt'] : '' ?>" placeholder="&#8216;">
			<input type="text" class="form-control form-control-sm col-sm-4" value="<?= isset($sumur['koor_s_bt']) ? $sumur['koor_s_bt'] : '' ?>" placeholder="&#8220;">
		</div>
	</div>
	<span class="col-sm-1 col-form-label col-form-label-sm m-0 p-0">B/T</span>
</div>

<div class="form-row">
	<label class="col-sm-2 col-form-label col-form-label-sm mr-0 pr-0">Lokasi/Alamat Sumur</label>
	<div class="form-group col-md-3 pl-0 ml-0">
		<input type="text" class="col-md-10 form-control form-control-sm" id="lokasi_sumur" name="lokasi_sumur" value="<?= isset($sumur['lokasi_sumur']) ? $sumur['lokasi_sumur'] : '' ?>">
	</div>

	<div class="form-group col-md-3 pl-0 ml-0">
		<input type="file" class="ml-2 pl-0 col-sm-10 form-control-file form-control-sm" name="peta_lokasi" id="file_sipa" value="" />
	</div>
</div>

<div class="form-row">
	<label class="col-sm-2 col-form-label col-form-label-sm mr-0 pr-0">Zona</label>
	<div class="form-group col-md-3 pl-0 ml-0">
		<select name="id_zona" id="id_zona">
			<option <?= (isset($sumur['id_zona']) && $sumur['id_zona'] == '1') ? 'selected' : '' ?> value="1">AMAN</option>
			<option <?= (isset($sumur['id_zona']) && $sumur['id_zona'] == '2') ? 'selected' : '' ?> value="2">RAWAN</option>
			<option <?= (isset($sumur['id_zona']) && $sumur['id_zona'] == '3') ? 'selected' : '' ?> value="3">KRITIS</option>
			<option <?= (isset($sumur['id_zona']) && $sumur['id_zona'] == '4') ? 'selected' : '' ?> value="4">RESAPAN</option>
			<option <?= (isset($sumur['id_zona']) && $sumur['id_zona'] == '5') ? 'selected' : '' ?> value="5">RUSAK</option>
		</select>
	</div>
</div>

<div class="form-row">
	<label class="col-sm-2 col-form-label col-form-label-sm mr-0 pr-0">Sertifikat Uji Kualitas Air</label>
	<div class="form-group col-md-3 pl-0 ml-0">
		<input type="file" class="ml-2 pl-0 col-sm-10 form-control-file form-control-sm" name="hasil_uji_air" id="hasil_uji_air" value="" />
	</div>
</div>

<div class="form-row">
	<label class="col-sm-2 col-form-label col-form-label-sm mr-0 pr-0">Photo Sumur</label>
	<div class="form-group col-md-3 pl-0 ml-0">
		<button type="button" class="btn btn-success btn-sm" id="addPoto">tambah</button>
	</div>
</div>

<div class="form-row mb-2">
	<div class="col-sm-2"></div>
	<div id="poto_sumur"></div>
</div>

<div class="form-row bg-info justify-content-center">
	<sapn class="text-white py-1">Data Teknis</sapn>
</div>
<div class="pb-3"></div>

<div class="form-row">
	<label class="col-sm-2 col-form-label col-form-label-sm mr-0 pr-0">Kedalamamn Sumur</label>
	<div class="form-group col-md-3 pl-0 ml-0">
		<input type="text" class="form-control form-control-sm" name="kedalaman_sumur" id="kedalaman_sumur" value="<?= isset($sumur['kedalaman_sumur']) ? $sumur['kedalaman_sumur'] : '' ?>">
	</div>
	<label class="col-sm-2 col-form-label col-form-label-sm mr-0 pr-0">Debit Izin</label>
	<div class="form-group col-md-2 pl-0 ml-0">
		<input type="text" class="form-control form-control-sm" name="debit_izin" id="debit_izin" value="<?= isset($sumur['debit_izin']) ? $sumur['debit_izin'] : '' ?>">
	</div>
	<div class="col-md-1">m<sup>3</sup>/hari</div>
</div>

<div class="form-row">
	<label class="col-sm-2 col-form-label col-form-label-sm mr-0 pr-0">Material Pipa</label>
	<div class="form-group col-md-2 pl-0 ml-0">
		<input type="text" class="form-control form-control-sm" name="material_pipa" id="material_pipa" value="<?= isset($sumur['material_pipa']) ? $sumur['material_pipa'] : '' ?>">
	</div>
	<div class="col-md-1"></div>
	<label class="col-sm-2 col-form-label col-form-label-sm mr-0 pr-0">Ukuran Pipa Konstruksi</label>
	<div class="form-group col-md-2 pl-0 ml-0">
		<input type="text" class="form-control form-control-sm" name="dia_pipa_kons" id="dia_pipa_kons" value="<?= isset($sumur['dia_pipa_kons']) ? $sumur['dia_pipa_kons'] : '' ?>">
	</div>
	<span class="col-md-1">inch</span>
</div>

<div class="form-row">
	<label class="col-sm-2 col-form-label col-form-label-sm mr-0 pr-0">Ukuran Pipa Naik</label>
	<div class="form-group col-md-2 pl-0 ml-0">
		<input type="text" class="form-control form-control-sm" name="dia_pipa_naik" id="dia_pipa_naik" value="<?= isset($sumur['dia_pipa_naik']) ? $sumur['dia_pipa_naik'] : '' ?>">
	</div>
	<span class="col-md-1">inch</span>
	<label class="col-sm-2 col-form-label col-form-label-sm mr-0 pr-0">Ukuran Pipa Isap</label>
	<div class="form-group col-md-2 pl-0 ml-0">
		<input type="text" class="form-control form-control-sm" name="dia_pipa_isap" id="dia_pipa_isap" value="<?= isset($sumur['dia_pipa_isap']) ? $sumur['dia_pipa_isap'] : '' ?>">
	</div>
	<span class="col-md-1">inch</span>
</div>

<div class="form-row">
	<label class="col-sm-2 col-form-label col-form-label-sm mr-0 pr-0">Ukuran Pipa Naik</label>
	<div class="form-group col-md-2 pl-0 ml-0">
		<input type="text" class="form-control form-control-sm" name="muka_air_tanah" id="muka_air_tanah" value="<?= isset($sumur['muka_air_tanah']) ? $sumur['muka_air_tanah'] : '' ?>">
	</div>
	<span class="col-md-1">m/bmt</span>
</div>

<div class="form-row bg-info justify-content-center">
	<sapn class="text-white py-1">Data Menis Pompa</sapn>
</div>
<div class="pb-3"></div>

<div class="form-row">
	<label class="col-sm-2 col-form-label col-form-label-sm mr-0 pr-0">Merek Mesin Pompa</label>
	<div class="form-group col-md-3 pl-0 ml-0">
		<input type="text" class="form-control form-control-sm" name="brand_pompa" id="brand_pompa" value="<?= isset($sumur['brand_pompa']) ? $sumur['brand_pompa'] : '' ?>">
	</div>
	<label class="col-sm-2 col-form-label col-form-label-sm mr-0 pr-0">No. Seri</label>
	<div class="form-group col-md-3 pl-0 ml-0">
		<input type="text" class="form-control form-control-sm" name="no_seri_pompa" id="no_seri_pompa" value="<?= isset($sumur['no_seri_pompa']) ? $sumur['no_seri_pompa'] : '' ?>">
	</div>
</div>

<div class="form-row">
	<label class="col-sm-2 col-form-label col-form-label-sm mr-0 pr-0">Type Mesin Pompa</label>
	<div class="form-group col-md-3 pl-0 ml-0">
		<input type="text" class="form-control form-control-sm" name="type_pompa" id="type_pompa" value="<?= isset($sumur['type_pompa']) ? $sumur['type_pompa'] : '' ?>">
	</div>
	<label class="col-sm-2 col-form-label col-form-label-sm mr-0 pr-0">Kapasitas</label>
	<div class="form-group col-md-2 pl-0 ml-0">
		<input type="text" class="form-control form-control-sm" name="kapasit_pompa" id="kapasit_pompa" value="<?= isset($sumur['kapasit_pompa']) ? $sumur['kapasit_pompa'] : '' ?>">
	</div>
	<span class="col-md-1">HP</span>
</div>

<div class="form-row">
	<label class="col-sm-2 col-form-label col-form-label-sm mr-0 pr-0">Posisi Pompa</label>
	<div class="form-group col-md-2 pl-0 ml-0">
		<input type="text" class="form-control form-control-sm" name="posisi_pompa" id="posisi_pompa" value="<?= isset($sumur['posisi_pompa']) ? $sumur['posisi_pompa'] : '' ?>">
	</div>
	<span class="col-md-1">m/bmt</span>
</div>

<div class="form-row bg-info justify-content-center">
	<sapn class="text-white py-1">Data Meter Air</sapn>
</div>
<div class="pb-3"></div>

<div class="form-row">
	<label class="col-sm-2 col-form-label col-form-label-sm mr-0 pr-0">Merek Meter Air</label>
	<div class="form-group col-md-3 pl-0 ml-0">
		<input type="text" class="form-control form-control-sm" name="brand_meter_air" id="brand_meter_air" value="<?= isset($sumur['brand_meter_air']) ? $sumur['brand_meter_air'] : '' ?>">
	</div>
	<label class="col-sm-2 col-form-label col-form-label-sm mr-0 pr-0">No. Seri</label>
	<div class="form-group col-md-3 pl-0 ml-0">
		<input type="text" class="form-control form-control-sm" name="no_meter_air" id="no_meter_air" value="<?= isset($sumur['no_meter_air']) ? $sumur['no_meter_air'] : '' ?>">
	</div>
</div>

<div class="form-row">
	<label class="col-sm-2 col-form-label col-form-label-sm mr-0 pr-0">Tanggal Tera Meter</label>
	<div class="form-group col-md-3 pl-0 ml-0">
		<input type="text" class="form-control form-control-sm" name="tgl_tera" id="tgl_tera" value="<?= isset($sumur['tgl_tera']) ? date_indo($sumur['tgl_tera']) : '' ?>">
	</div>
	<label class="col-sm-2 col-form-label col-form-label-sm mr-0 pr-0">Masa Berlaku Tera</label>
	<div class="form-group col-md-3 pl-0 ml-0">
		<input type="text" class="form-control form-control-sm" name="tgl_ahir_tera" id="tgl_ahir_tera" value="<?= isset($sumur['tgl_ahir_tera']) ? date_indo($sumur['tgl_ahir_tera']) : '' ?>">
	</div>
</div>

<div class="form-row">
	<label class="col-sm-2 col-form-label col-form-label-sm mr-0 pr-0">Angka Awal</label>
	<div class="form-group col-md-3 pl-0 ml-0">
		<input type="text" class="form-control form-control-sm" name="angka_awal" id="angka_awal" value="<?= isset($sumur['angka_awal']) ? $sumur['angka_awal'] : '' ?>">
	</div>
</div>

<div class="form-row">
	<label class="col-sm-2 col-form-label col-form-label-sm mr-0 pr-0">No. Tera</label>
	<div class="form-group col-md-3 pl-0 ml-0">
		<input type="text" class="form-control form-control-sm" name="no_tera" id="no_tera" value="<?= isset($sumur['no_tera']) ? $sumur['no_tera'] : '' ?>">
	</div>
	<label class="col-sm-2 col-form-label col-form-label-sm mr-0 pr-0"></label>
	<div class="form-group col-md-3 pl-0 ml-0">
		<input type="file" class="ml-2 pl-0 col-sm-10 form-control-file form-control-sm" name="fiel_tera" id="file_tera" value="" />
	</div>
</div>
