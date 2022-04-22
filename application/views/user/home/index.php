<!-- Header-->
<header class="bg-info py-5">
    <div class="container px-5">
        <div class="row gx-5 align-items-center justify-content-center">
            <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-4" src="<?= base_url(); ?>assets/img/section/header2.png" alt="..." /></div>
            <div class="col-lg-8 col-xl-7 col-xxl-6">
                <div class="my-5 text-center text-xl-start">
                    <h1 class="display-5 fw-bold fs-5er text-white mb-2">Welcome To<br>STMIK Mardira Indonesia</h1>
                    <p class="lead fw-normal text-white mb-4">Selamat datang di website STMIK Mardira Indonesia.</p>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                        <a class="btn btn-light text-info btn-lg px-4" href="#tentang-stmik-mi">Tentang Kampus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<header class="py-5" id="tentang-stmik-mi">
    <div class="container px-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xxl-6">
                <div class="text-center my-5">
                    <img src="<?= base_url(); ?>assets/img/section/<?= $section[0]['gambar']; ?>" width="100%">
                    <h2 class="fw-bolder my-4 mt-5">Tentang STMIK-MI</h2>
                    <p class="lead text-muted mb-0"><?= $section[0]['isi']; ?></p>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- About section one-->
<section class="py-5 bg-light" id="scroll-target">
    <div class="container px-5 my-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0" src="<?= base_url(); ?>assets/img/section/<?= $section[1]['gambar']; ?>" width="600px" height="400px" /></div>
            <div class="col-lg-6">
                <h2 class="fw-bolder">VISI</h2>
                <p class="lead fw-normal text-muted mb-0"><?= $section[1]['isi']; ?></p>
            </div>
        </div>
    </div>
</section>

<!-- About section two-->
<section class="py-5 bg-light">
    <div class="container px-5 my-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6 order-first order-lg-last"><img class="img-fluid rounded mb-5 mb-lg-0" src="<?= base_url(); ?>assets/img/section/<?= $section[2]['gambar']; ?>" width="600px" height="400px" /></div>
            <div class="col-lg-6">
                <h2 class="fw-bolder">MISI</h2>
                <p class="lead fw-normal text-muted mb-0"><?= $section[2]['isi']; ?></p>
            </div>
        </div>
    </div>
</section>

<!-- About section one-->
<section class="py-5" id="jurusan">
    <div class="container px-5 my-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0" src="<?= base_url(); ?>assets/img/section/<?= $section[3]['gambar']; ?>" width="600px" height="400px" /></div>
            <div class="col-lg-6">
                <h2 class="fw-bolder">JURUSAN</h2>
                <p class="lead fw-normal text-muted mb-0"><?= $section[3]['isi']; ?></p>
            </div>
        </div>
    </div>
</section>

<!-- Team members section-->
<section class="py-5 bg-light" id="organisasiMahasiswa">
    <div class="container px-5 my-5">
        <div class="text-center">
            <h2 class="fw-bolder">Organisasi Mahasiswa</h2>
            <p class="lead fw-normal text-muted mb-5">...</p>
        </div>
        <div class="row gx-5 row-cols-1 row-cols-sm-2 row-cols-xl-4 justify-content-center">
        <?php foreach( $ukm as $row ) : ?>
            <div class="col mb-5 mb-5 mb-xl-5">
                <div class="text-center">
                    <img class="img-fluid rounded-circle mb-4 px-4" src="<?= base_url(); ?>assets/img/ukm/<?= $row['gambar']; ?>" width="150px" height="150px" />
                    <h5 class="fw-bolder"><?= $row['nama']; ?></h5>
                    <!-- <div class="fst-italic text-muted">Founder &amp; CEO</div> -->
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Blog preview section-->
<section class="py-5" id="berita"> 
    <div class="container px-5 my-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-8 col-xl-6">
                <div class="text-center">
                    <h2 class="fw-bolder">Berita</h2>
                    <p class="lead fw-normal text-muted mb-5">...</p>
                </div>
            </div>
        </div>
        <div class="row gx-5">
            <?php foreach( $berita as $row ) : ?>
            <div class="col-lg-4 mb-5">
                <div class="card h-100 shadow border-0">
                    <img class="card-img-top" src="<?= base_url(); ?>assets/img/berita/<?= $row['gambar']; ?>" width="316px" height="184px"/>
                    <div class="card-body p-4">
                        <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div>
                        <a class="text-decoration-none link-dark stretched-link" href="<?= base_url(); ?>berita/detail/<?= $row['id']; ?>"><h5 class="card-title mb-3"><?= $row['judul']; ?></h5></a>
                        <p class="card-text mb-0"><?= substr($row['isi'], 10, 65) ?> (...)</p>
                    </div>
                    <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                        <div class="d-flex align-items-end justify-content-between">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle me-3" src="<?= base_url(); ?>assets/SBAdmin/img/undraw_profile.svg" width="40px" />
                                <div class="small">
                                    <div class="fw-bold">Administrator</div>
                                    <div class="text-muted"><?= mdate('%d %M %Y  &middot;  %h:%i %A', strtotime($row['tanggal'])); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Page content-->
<section class="py-5 bg-light" id="kontak">
    <div class="container px-5 mb-0 my-5">
        <!-- Contact cards-->
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-8 col-xl-6">
                <div class="text-center">
                    <h2 class="fw-bolder">Hubungi Kami</h2>
                    <p class="lead fw-normal text-muted mb-5">...</p>
                </div>
            </div>
        </div>
        <div class="row gx-5 row-cols-2 row-cols-lg-4 py-5 text-center">
            <div class="col text-center">
                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-geo-alt"></i></div>
                <div class="h5">Alamat</div>
                <p class="text-muted mb-0"><?= $section[4]['isi']; ?></p>
            </div>
            <div class="col text-center">
                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-telephone"></i></div>
                <div class="h5">Telepon</div>
                <p class="text-muted mb-0"><?= $section[5]['isi']; ?></p>
            </div>
            <div class="col text-center">
                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                <div class="h5">Email</div>
                <p class="text-muted mb-0"><?= $section[6]['isi']; ?></p>
            </div>
            <div class="col text-center">
                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-whatsapp"></i></div>
                <div class="h5">Whatsapp</div>
                <p class="text-muted mb-0"><?= $section[7]['isi']; ?></p>
            </div>
        </div>
    </div>
</section>

