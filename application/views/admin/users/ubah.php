<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Ubah Data Admin</h1>
		<span class="d-none d-sm-inline-block mr-1"><a href="<?= base_url('admin_dashboard'); ?>">Dashboard</a>
			/ Admin</span>
	</div>

	<div class="card">
		<?= form_open_multipart(); ?>
		<input type="hidden" name="id" value="<?= $users['id']; ?>">
		<div class="card-body">
			<div class="row">
				<div class="form-group col-6">
					<label for="nama">Nama</label>
					<input type="text" class="form-control" id="nama" name="nama" value="<?= $users['nama']; ?>">
					<small class="form-text text-danger mt-0"><?= form_error('nama'); ?></small>
				</div>
				<div class="col-6"></div>

				<div class="form-group col-6">
					<label for="email">Email</label>
					<input type="text" class="form-control" id="email" name="email" value="<?= $users['email']; ?>">
					<small class="form-text text-danger mt-0"><?= form_error('email'); ?></small>
				</div>

				<div class="form-group col-6">
					<label for="password">Password</label>
					<input type="password" class="form-control" id="password" name="password"
						value="<?= $users['password']; ?>">
					<small class="form-text text-danger mt-0"><?= form_error('password'); ?></small>
				</div>
			</div>
		</div>

		<div class="card-footer bg-white">
			<a href="<?= base_url('admin_users'); ?>"><button type="button"
					class="btn btn-secondary col-2">Kembali</button></a>
			<button type="submit" class="btn btn-success col-2 float-right">Ubah</button>
		</div>
		<?= form_close(); ?>
	</div>

</div>
<!-- /.container-fluid -->
