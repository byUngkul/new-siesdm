<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
</div>

<!-- Content Row -->
<div class="row">
	<div class="col-xl-12 col-md-6 mb-4">
		<div class="card border-left-primary shadow-sm h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="row">

							<div class="col-md-1 pl-0 mr-2">
								<img src="<?= base_url() . $data_dinas['logo_dinas']  ?>" style="width: 100%;">
							</div>
							<div class="col-md-10">
								<div class="row pt-2">
									<div class="h2  mb-0 text-gray-800">
										<strong><?= $data_dinas['nama_dinas'] . ' - ' . $data_dinas['singkatan_dinas'] ?></strong>
									</div>
								</div>
								<div class="row">
									<div class="h3 pl-0 text-gray-800">
										Cabang <?= $data_dinas['cabang_dinas'] ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php if ($this->session->userdata('id_bidang') == 1 || $this->acl->_is_admin()) : ?>
	<div class="row">
		<h4 class="pl-3 text-gray-800">Air Tanah</h3>
	</div>

	<div class="row">
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-primary shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Perusahaan</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800">
								<span id="tot_perusahaan_abt">0</span>
							</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-database fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-primary shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Sumur</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800">
								<span id="tot_sumur_abt">0</span>
							</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-database fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-primary shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah SIPA Habis</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800">
								<span id="tot_sipa_habis">0</span>
							</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-database fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-primary shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah SIPA Berlaku</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800">
								<span id="tot_sipa_aktip">0</span>
							</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-database fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-primary shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Perusahaan Tidak Berizin</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800">
								<span id="tot_abt_tidak_berizin">0</span>
							</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-database fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>

<?php if ($this->session->userdata('id_bidang') == 2 || $this->acl->_is_admin()) : ?>
	<div class="row">
		<h4 class="pl-3 text-gray-800">Pertambangan</h3>
	</div>

	<div class="row">
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-primary shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Perusahaan Berizin</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800">
								<span id="tot_tambang_berizin">0</span>
							</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-database fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-primary shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Perusahaan Tidak Berizin</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800">
								<span id="tot_tambang_tidak_berizin">0</span>
							</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-database fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>
