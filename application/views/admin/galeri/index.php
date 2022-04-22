<!-- Begin Page Content -->
<div class="container-fluid">

	<?php if( $this->session->flashdata('notification') ) : ?>
	<div class="alert alert-success alert-dismissible fade show" role="alert">
		Data galeri berhasil <strong><?= $this->session->flashdata('notification'); ?></strong>.
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
	<?php endif; ?>

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Galeri</h1>
		<span href="<?= base_url('admin_dashboard'); ?>" class="d-none d-sm-inline-block mr-1"><a href="">Dashboard</a>
			/ Galeri</span>
	</div>

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-body">
			<div class="table-responsive">
				<a href="<?= base_url('admin_galeri/tambah'); ?>" class="btn btn-sm btn-primary float-right ml-3">Tambah
					Data</a>
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th width="1%">No</th>
							<th>Judul</th>
							<th>Gambar</th>
							<th width="1%">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=1; ?>
						<?php foreach( $galeri as $row ) : ?>
						<tr>
							<td><?= $no++; ?></td>
							<td><?= $row['judul']; ?></td>
							<td><img src="<?= base_url(); ?>assets/img/galeri/<?= $row['gambar']; ?>" height="100px">
							</td>
							<td>
								<a href="<?= base_url('admin_galeri/ubah/') . $row['id']; ?>"
									class="btn btn-sm btn-success mb-1">Ubah</a>
								<a href="<?= base_url('admin_galeri/hapus/') . $row['id']; ?>"
									class="btn btn-sm btn-danger" onclick="return confirm('yakin?')">Hapus</a>
							</td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!-- /.container-fluid -->
