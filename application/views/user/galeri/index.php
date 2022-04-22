<!-- Page Content-->
<section class="py-5">
    <div class="container px-5 my-5">
        <div class="text-center mb-5">
            <h1 class="fw-bolder">Galeri STMIK-MI</h1>
            <p class="lead fw-normal text-muted mb-0">...</p>
        </div>
        <div class="row gx-5">
            <?php foreach( $galeri as $row ) : ?>
            <div class="col-lg-4">
                <div class="position-relative mb-5 text-center">
                    <img class="img-fluid rounded-3 mb-3" src="<?= base_url(); ?>assets/img/galeri/<?= $row['gambar']; ?>" width="600px" height="400" />
                    <!-- <span class="h6 fw-bolder text-decoration-none link-dark stretched-link"><?= $row['nama']; ?></span> -->
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>