<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

	<!-- Sidebar - Brand -->
	<a class="sidebar-brand d-flex align-items-center justify-content-center"
		href="<?= base_url('admin_dashboard'); ?>">
		<div class="sidebar-brand-icon rotate-n-15">
			<i class="fas fa-graduation-cap"></i>
		</div>
		<div class="sidebar-brand-text mx-3">SIASMI</div>
	</a>

	<!-- Divider -->
	<hr class="sidebar-divider my-0">

	<!-- Nav Item - Dashboard -->
	<li class="nav-item <?= $this->uri->segment(1) == 'admin_dashboard' ? 'active' : ''; ?>">
		<a class="nav-link" href="<?= base_url('admin_dashboard'); ?>">
			<i class="fas fa-tachometer-alt fa-fw"></i>
			<span>Dashboard</span></a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Heading -->
	<div class="sidebar-heading">
		Manage User
	</div>

	<li class="nav-item <?= $this->uri->segment(1) == 'admin_users' ? 'active' : ''; ?>">
		<a class="nav-link" href="<?= base_url('admin_users'); ?>">
			<i class="fas fa-user fa-fw"></i>
			<span>Admin</span></a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Heading -->
	<div class="sidebar-heading">
		Manage Data
	</div>

	<li class="nav-item <?= $this->uri->segment(1) == 'admin_section' ? 'active' : ''; ?>">
		<a class="nav-link" href="<?= base_url('admin_section'); ?>">
			<i class="fas fa-align-left fa-fw"></i>
			<span>Section</span></a>
	</li>

	<li class="nav-item <?= $this->uri->segment(1) == 'admin_berita' ? 'active' : ''; ?>">
		<a class="nav-link" href="<?= base_url('admin_berita'); ?>">
			<i class="fas fa-newspaper fa-fw"></i>
			<span>Berita</span></a>
	</li>

	<li class="nav-item <?= $this->uri->segment(1) == 'admin_galeri' ? 'active' : ''; ?>">
		<a class="nav-link" href="<?= base_url('admin_galeri'); ?>">
			<i class="fas fa-images fa-fw"></i>
			<span>Galeri</span></a>
	</li>

	<li class="nav-item <?= $this->uri->segment(1) == 'admin_ukm' ? 'active' : ''; ?>">
		<a class="nav-link" href="<?= base_url('admin_ukm'); ?>">
			<i class="fas fa-users fa-fw"></i>
			<span>Ukm</span></a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Heading -->
	<div class="sidebar-heading">
		Account
	</div>

	<li class="nav-item">
		<a class="nav-link" href="<?= base_url('admin/logout'); ?>">
			<i class="fas fa-sign-out-alt fa-fw"></i>
			<span>Logout</span></a>
	</li>

</ul>
<!-- End of Sidebar -->
