<?= $this->extend('Layout/template'); ?>

<?= $this->section('content'); ?>
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?= base_url('assets/images/carousel.jpg') ?>" class="d-block w-100" height="600" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <h3 style="color: black;">Edelweisflorist Surabaya</h3>
                <p style="color: black;">Semua macam tipe bunga ada disini</p>
            </div>

        </div>
        <div class="carousel-item">
            <img src="<?= base_url('assets/images/carousel2.jpg') ?>" class=" d-block w-100" height="600" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <h3 style="color: black;">Semua Tersedia</h3>
                <p style="color: black;">Berbagai bunga yang masih segar.</p>
            </div>
        </div>

    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="display-4" style="text-align: center;">
                Produk Kami
            </h2>
        </div>
    </div>


    <!-- alert -->
    <div class="alert alert-danger alert-dismissible fade show" id="exampleAlert" role="alert">
        <strong>Ups!</strong>
        Silahkan Login Terlebih Dahulu

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    <script>
        $(document).ready(function() {
            document.getElementById('exampleAlert').style.display = "none";
        });

        function alert() {
            document.getElementById('exampleAlert').style.display = "block";
        }
    </script>

    <!-- card -->
    <div class="container">
        <div class="card-deck">
            <div class="card" style="max-width: 15rem;">
                <img src="<?= base_url('assets/images/flower1.jpg') ?>" class="card-img-top" alt="First-card" onclick="alert()">
                <div class="card-body">
                    <h5 class="card-title">Baymax Flower</h5>
                    <p class="card-text">Rp85.000</p>
                    <p class="card-text"><small class="text-muted">Outlet Surabaya</small></p>
                </div>
            </div>
            <div class="card" style="max-width: 15rem;">
                <img src="<?= base_url('assets/images/flower2.jpg') ?>" class="card-img-top" alt="Second-card" onclick="alert()">
                <div class="card-body">
                    <h5 class="card-title">Cotton Flower</h5>
                    <p class="card-text">Rp105.000</p>
                    <p class="card-text"><small class="text-muted">Outlet Malang</small></p>
                </div>
            </div>
            <div class="card" style="max-width: 15rem;">
                <img src="<?= base_url('assets/images/flower3.jpg') ?>" class="card-img-top" alt="third-card" onclick="alert()">
                <div class="card-body">
                    <h5 class="card-title">Money Flower</h5>
                    <p class="card-text">Rp500.000</p>
                    <p class="card-text"><small class="text-muted">Outlet Surabaya</small></p>
                </div>
            </div>
            <div class="card" style="max-width: 15rem;">
                <img src="<?= base_url('assets/images/flower4.jpg') ?>" class="card-img-top" alt="Fourth-card" onclick="alert()">
                <div class="card-body">
                    <h5 class="card-title">Sun Flower</h5>
                    <p class="card-text">Rp250.000</p>
                    <p class="card-text"><small class="text-muted">Outlet Malang</small></p>
                </div>
            </div>
            <div class="card" style="max-width: 15rem;">
                <img src="<?= base_url('assets/images/flower5.jpg') ?>" class="card-img-top" alt="Fifth-card" onclick="alert()">
                <div class="card-body">
                    <h5 class="card-title">Blooming Box</h5>
                    <p class="card-text">Rp500.000</p>
                    <p class="card-text"><small class="text-muted">Outlet Surabaya</small></p>
                </div>
            </div>
        </div>
    </div>
    <?= $this->endSection(); ?>