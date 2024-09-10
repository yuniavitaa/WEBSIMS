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
<?= $this->endSection() ?>