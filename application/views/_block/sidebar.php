<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

	<!-- Sidebar - Brand -->
	<a class="sidebar-brand d-flex align-items-center justify-content-left" href="index.html">
		<div class="sidebar-brand-icon">
			<?php
			$dinas = dinas_helper();
			?>
			<img src="<?= base_url() . $dinas['logo_dinas'] ?>" width="50px">
		</div>
		<div class="sidebar-brand-text font-weight-bold h4 mx-1"><?= $dinas['singkatan_dinas'] ?></div>
	</a>

	<!-- Divider -->
	<hr class="sidebar-divider my-0">

	<!-- Nav Item - Dashboard -->
	<li class="nav-item <?= (isset($parent_menu) && $parent_menu == 'home') ? 'active' : '' ?>">
		<a class="nav-link" href="<?= base_url() ?>">
			<i class="fas fa-fw fa-tachometer-alt"></i>
			<span>Home</span></a>
	</li>

	<li class="nav-item <?= (isset($parent_menu) && $parent_menu == 'perusahaan') ? 'active' : '' ?>">
		<a class="nav-link" href="<?= base_url(); ?>perusahaan">
			<i class="fas fa-fw fa-building"></i>
			<span>Perusahaan</span></a>
	</li>

	<?php if ($this->session->userdata('id_bidang') == 1 || $this->acl->_is_admin()) : ?>
		<li class="nav-item <?= (isset($parent_menu) && $parent_menu == 'abt') ? 'active' : '' ?>">
			<a class="nav-link <?= (isset($parent_menu) && $parent_menu == 'abt') ? '' : 'collapsed' ?> " href="#" data-toggle="collapse" data-target="#collapseSatu" aria-expanded="true" aria-controls="collapseTwo">
				<i class="fas fa-fw fa-water"></i>
				<span>ABT</span>
			</a>
			<div id="collapseSatu" class="collapse <?= (isset($parent_menu) && $parent_menu == 'abt') ? 'show' : '' ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
				<div class="bg-white py-2 collapse-inner rounded">
					<a class="collapse-item <?= (isset($child_menu) && $child_menu == 'sumur') ? 'active' : '' ?>" href="<?= base_url(); ?>sumur">Data Sumur</a>
					<a class="collapse-item <?= (isset($child_menu) && $child_menu == 'ambil_air') ? 'active' : '' ?>" href="<?= base_url(); ?>penggunaanair">Data Pengambilan Air</a>
					<a class="collapse-item <?= (isset($child_menu) && $child_menu == 'pajak_air') ? 'active' : '' ?>" href="<?= base_url(); ?>pajakabt">Data Pajak ABT</a>
				</div>
			</div>
		</li>
	<?php endif; ?>

	<?php if ($this->session->userdata('id_bidang') == 2 || $this->acl->_is_admin()) : ?>
		<li class="nav-item <?= (isset($parent_menu) && $parent_menu == 'tambang') ? 'active' : '' ?>">
			<a class="nav-link <?= (isset($parent_menu) && $parent_menu == 'tambang') ? '' : 'collapsed' ?>" href="#" data-toggle="collapse" data-target="#collapseDua" aria-expanded="true" aria-controls="collapseTwo">
				<i class="fas fa-fw fa-bolt"></i>
				<span>Tambang</span>
			</a>
			<div id="collapseDua" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
				<div class="bg-white py-2 collapse-inner rounded">
					<a class="collapse-item <?= (isset($child_menu) && $child_menu == 'ot') ? 'active' : '' ?>" href="#" title="Objek Tambang">Objek Tambang</a>
					<a class="collapse-item <?= (isset($child_menu) && $child_menu == 'ktt') ? 'active' : '' ?>" href="#" title="Kepala Teknis Tambang">KTT</a>
					<a class="collapse-item <?= (isset($child_menu) && $child_menu == 'jamrek') ? 'active' : '' ?>" href="#" title="Jaminan Reklamasi & Pasca Tambang">JAMREK</a>
					<a class="collapse-item <?= (isset($child_menu) && $child_menu == 'rkab') ? 'active' : '' ?>" href="#" title="Rencana Kerja & Anggaran Belanja Tambang">RKAB Tambang</a>
				</div>
			</div>
		</li>
	<?php endif; ?>

	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Heading -->
	<div class="sidebar-heading">
		Setting
	</div>

	<!-- Nav Item - Charts -->
	<li class="nav-item <?= (isset($parent_menu) && $parent_menu == 'dinas') ? 'active' : '' ?>">
		<a class="nav-link" href="<?= base_url('dinas') ?>">
			<i class="fas fa-fw fa-university"></i>
			<span>Dinas</span></a>
	</li>

	<!-- Nav Item - Tables -->
	<li class="nav-item <?= (isset($parent_menu) && $parent_menu == 'pegawai') ? 'active' : '' ?>">
		<a class="nav-link" href="<?= base_url('pegawai') ?>">
			<i class="fas fa-fw fa-users"></i>
			<span>Pegawai</span></a>
	</li>

	<!-- Nav Item - Tables -->
	<li class="nav-item <?= (isset($parent_menu) && $parent_menu == 'user') ? 'active' : '' ?>">
		<a class="nav-link" href="<?= base_url('user') ?>">
			<i class="fas fa-fw fa-user-cog"></i>
			<span>Pengguna</span></a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider d-none d-md-block">

	<!-- Sidebar Toggler (Sidebar) -->
	<div class="text-center d-none d-md-inline">
		<button class="rounded-circle border-0" id="sidebarToggle"></button>
	</div>

</ul>
