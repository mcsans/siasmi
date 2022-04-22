<!-- Begin Page Content -->
<div class="container-fluid">

	<?php if( $this->session->flashdata('notification') ) : ?>
	<div class="alert alert-success alert-dismissible fade show" role="alert">
		Data berita berhasil <strong><?= $this->session->flashdata('notification'); ?></strong>.
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
	<?php endif; ?>

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Berita</h1>
		<span class="d-none d-sm-inline-block mr-1"><a href="<?= base_url('admin_dashboard'); ?>">Dashboard</a>
			/ Berita</span>
	</div>

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-body">
			<div class="table-responsive">
				<!-- <a href="<?= base_url('admin_section/tambah/'); ?>" class="btn btn-sm btn-primary float-right ml-3">Tambah Data</a> -->
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th width="1%">No</th>
							<th width="1%">Section</th>
							<th>Isi</th>
							<th>Gambar</th>
							<th width="1">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=1; ?>
						<?php foreach( $section as $row ) : ?>
						<tr>
							<td><?= $no++; ?></td>
							<td><?= $row['section']; ?></td>
							<td><?= substr($row['isi'], 0, 250); ?> (...)</td>
							<td><img src="<?= base_url(); ?>assets/img/section/<?= $row['gambar']; ?>" alt=""
									height="100px"></td>
							</td>
							<td>
								<a href="<?= base_url('admin_section/ubah/') . $row['section']; ?>"
									class="btn btn-sm btn-success mb-1">Ubah</a>
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
