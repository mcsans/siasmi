<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Tambah ukm</h1>
		<span class="d-none d-sm-inline-block mr-1"><a href="<?= base_url('admin_dashboard'); ?>">Dashboard</a>
			/ UKM</span>
	</div>

	<div class="card">
		<?= form_open_multipart(); ?>
		<div class="card-body">
			<div class="row">
				<div class="form-group col-6">
					<label for="nama">Nama</label>
					<input type="text" class="form-control" id="nama" name="nama" value="<?= set_value('nama'); ?>">
					<small class="form-text text-danger mt-0"><?= form_error('nama'); ?></small>
				</div>

				<div class="form-group col-6">
					<label for="gambar">Gambar (.jpg/.jpeg/.png)</label>
					<div class="input-group">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="gambar" name="gambar" required>
							<label class="custom-file-label" for="gambar">Pilih Gambar</label>
						</div>
					</div>
					<small class="form-text text-danger mt-0"><?= form_error('gambar'); ?></small>
				</div>
			</div>
		</div>

		<div class="card-footer bg-white">
			<a href="<?= base_url('admin_ukm'); ?>"><button type="button"
					class="btn btn-secondary col-2">Kembali</button></a>
			<button type="submit" class="btn btn-success col-2 float-right">Tambah</button>
		</div>
		<?= form_close(); ?>
	</div>

</div>
<!-- /.container-fluid -->
