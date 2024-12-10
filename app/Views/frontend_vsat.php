<?= $this->extend('layout/frontend_template') ?>

<?= $this->section('style') ?>
<style>
    body {
        overflow-x: hidden;
    }

    .navbar .btn {
        max-width: 150px;
        /* Batasi lebar maksimal */
        width: auto;
        /* Gunakan ukuran otomatis */
        padding: 10px 20px;
        /* Tambahkan padding secukupnya */
    }


    .hero {
        background-image: url('<?= base_url('assets/img/vsat.png') ?>');
        background-size: cover;
        background-position: center;
        height: 100vh;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        color: white;
        position: relative;
    }

    .hero a {
        padding: 12px 30px;
        background-color: #fff;
        color: #000;
        text-decoration: none;
        font-size: 18px;
        border-radius: 5px;
    }

    .hero::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
    }

    .hero-content {
        position: relative;
        z-index: 1;
    }

    .hero .btn {
        background-color: transparent;
        border: 1px solid white;
        color: white;
        padding: 0.75rem 2rem;
        text-transform: uppercase;
    }

    .hero .btn:hover {
        background-color: #0056b3;
    }

    .card {
        border: 1px solid #ddd;
        border-radius: 10px;
        transition: transform 0.2s;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .card:hover {
        transform: scale(1.05);
    }

    .card-header {
        background-color: #007bff;
        /* Warna latar belakang header */
        color: white;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .btn {
        width: 100%;
    }

    .highlight {
        background-color: #e9ecef;
        padding: 15px;
        border-radius: 5px;
        margin-bottom: 20px;
        text-align: center;
    }
</style>
<?= $this->endSection() ?>


<?= $this->section('content') ?>
<div class="hero">
    <div class="position-relative z-1 container">
        <div class="row">
            <div class="col">
                <h1 class="fw-bold">Very Small Aperture</h1>
                <p class="fs-6 my-3 arcade-interlaced-regular">Solusi layanan untuk mengakomodasi kobutuhan telekomunikas</p>
                <a href="#" class="btn">Selengkapnya</a>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>