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
				<?php if( $dashboard[1] <= 5 ) : ?>
				<a href="<?= base_url('admin_berita/tambah/'); ?>" class="btn btn-sm btn-primary float-right ml-3">Tambah Data</a>
				<?php else : ?>
				<a href="#" class="btn btn-sm btn-primary float-right ml-3" onclick="return alert('Maksimal hanya bisa membuat 6 Berita.');">Tambah Data</a>
				<?php endif; ?>
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th width="1%">No</th>
							<th>Judul</th>
							<th>Gambar</th>
							<th>Isi</th>
							<th>Tanggal</th>
							<th width="1">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=1; ?>
						<?php foreach( $berita as $row ) : ?>
						<tr>
							<td><?= $no++; ?></td>
							<td><?= $row['judul']; ?></td>
							<td><img src="<?= base_url(); ?>assets/img/berita/<?= $row['gambar']; ?>" alt=""
									height="100px"></td>
							<td><?= substr($row['isi'], 0, 250); ?> (...)</td>
							<td><?= mdate('%d/%m/%Y - %h:%i %A', strtotime($row['tanggal'])); ?></td>
							</td>
							<td>
								<a href="<?= base_url('admin_berita/ubah/') . $row['id']; ?>"
									class="btn btn-sm btn-success mb-1">Ubah</a>
								<a href="<?= base_url('admin_berita/hapus/') . $row['id']; ?>"
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
