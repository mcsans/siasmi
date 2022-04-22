<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>STMIK Mardira Indonesia | <?= $title; ?></title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="<?= base_url(); ?>assets/img/icon/stmik-mi.png"/>
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet"/>
        <link href="<?= base_url(); ?>assets/Startbootstrap/css/styles.css" rel="stylesheet"/>
        <link href="<?= base_url(); ?>assets/SBAdmin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-info pt-3" id="navbar">
                <div class="container px-5">
                    <!-- <a class="navbar-brand" href="<?= base_url(); ?>assets/index.html">STMIK Mardira Indonesia</a> -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 m-auto">
                            <li class="nav-item mx-3 fw-bold fs-5">
                                <a href="<?= base_url(); ?>#navbar" class="nav-link text-light text-light <?= $this->uri->segment(1) == NULL ? 'link-active' : ''; ?>">Beranda</a>
                            </li>
                            <li class="nav-item mx-3 fw-bold fs-5">
                                <a href="<?= base_url(); ?>#tentang-stmik-mi" class="nav-link text-light text-light">Tentang</a>
                            </li>
                            <li class="nav-item mx-3 fw-bold fs-5">
                                <a href="<?= base_url(); ?>#jurusan" class="nav-link text-light text-light">Jurusan</a>
                            </li>
                            <li class="nav-item mx-3 fw-bold fs-5">
                                <a href="<?= base_url(); ?>#organisasiMahasiswa" class="nav-link text-light text-light">Organisasi Mahasiswa</a>
                            </li>
                            <li class="nav-item mx-3 fw-bold fs-5">
                                <a href="<?= base_url(); ?>#berita" class="nav-link text-light text-light <?= $this->uri->segment(1) == 'berita' ? 'link-active' : ''; ?>">Berita</a>
                            </li>
                            <li class="nav-item mx-3 fw-bold fs-5">
                                <a href="<?= base_url(); ?>galeri" class="nav-link text-light text-light <?= $this->uri->segment(1) == 'galeri' ? 'link-active' : ''; ?>">Galeri</a>
                            </li>
                            <li class="nav-item mx-3 fw-bold fs-5">
                                <a href="<?= base_url(); ?>#kontak" class="nav-link text-light text-light">Kontak</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>