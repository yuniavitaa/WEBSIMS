<?= $this->extend('layout/frontend_template') ?>
<?= $this->section('style') ?>
<style>
    .navbar {
        background-color: transparent;
        border-bottom: none;
        transition: background-color 0.3s ease;
    }

    .navbar.navbar-dark .navbar-nav .nav-link {
        color: white !important;
    }

    .navbar.navbar-dark .navbar-toggler {
        background-color: white !important;
    }

    .navbar.scrolled {
        background-color: rgba(0, 0, 0, 0.8) !important;
    }

    .hero-section {
        position: relative;
        width: 100%;
        height: 100vh;
        background-image: url('assets/img/Blog/Frame Blog.png');
        background-size: cover;
        background-position: center;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
    }


    .hero-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        /* z-index: 1; */
    }

    .hero-content h1 {
        font-size: 3rem;
        margin-bottom: 1rem;
    }

    .hero-content p {
        font-size: 1.5rem;
        margin-bottom: 2rem;
    }

    .btn-group .btn.active {
        background-color: #6f42c1;
        color: white;
        border-color: #6f42c1;
    }

    .input-group .form-control {
        border-radius: 20px 0 0 20px;
    }

    .input-group .btn {
        border-radius: 0 20px 20px 0;
        background-color: #6f42c1;
        border: none;
    }
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- Hero Section -->
<header class="hero-section">
    <div class="hero-overlay"></div>
    <div class="container" style="z-index: 1;">
        <div class="row">
            <div class="col">
                <div class="hero-content">
                    <h1>PT SIMS has become the tenth decacorn company in Indonesia</h1>
                    <p class="chakra-petch-bold">Digital TV service employs FTTH (fiber To The Home) technology and offers numerous Free To Air and Premium channels.</p>
                    <a href="#" class="btn btn-outline-light btn-lg chakra-petch-medium" data-mdb-ripple-init>Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</header>

<section>
    <div class="container mt-4">
        <div class="row align-items-center">
            <div class="col-auto">
                <div class="btn-group" role="group" aria-label="Filter Options">
                    <button type="button" class="btn active rounded-4 ">Event</button>
                    <button type="button" class="btn rounded-4">News</button>
                    <button type="button" class="btn rounded-4">Article</button>
                </div>
            </div>

            <div class="col"></div>

            <div class="col-auto ">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" aria-label="Search">
                    <button class="btn btn-primary" type="button" style="width: 50px;">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
</br>
<section>
    <div class="card shadow" style="width: 18rem; margin-left: 115px;">
        <img class="card-img-top" src="assets/img/blog/Media.png" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
</section>
</br>
<?= $this->endSection() ?>