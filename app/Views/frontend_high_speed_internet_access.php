<?= $this->extend('layout/frontend_template') ?>

<?= $this->section('style') ?>
<style>
    body {
        overflow-x: hidden;
        margin: 0;
        padding: 0;
    }

    /*     
    .navbar {
        background-color: transparent;
        border-bottom: none;
        transition: background-color 0.3s ease;
    }

    .navbar.navbar-dark .navbar-nav .nav-link {
        color: white;
    }

    .navbar.navbar-dark .navbar-toggler {
        background-color: white;
    }

    .navbar.scrolled {
        background-color: rgba(0, 0, 0, 0.8) !important;
    } */

    /* Hero Section */
    .hero-section {
        position: relative;
        width: 100%;
        height: 100vh;
        background-image: url('assets/img/high-speed/Media.png');
        background-size: cover;
        background-position: center;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .hero-content h1 {
        margin: 0;
        font-size: 4rem;
        font-weight: bold;
        text-transform: uppercase;
        animation: fadeInDown 1.5s ease-in-out;
    }

    .hero-content p {
        margin-top: 20px;
        font-size: 1.2rem;
        letter-spacing: 1px;
        animation: fadeInUp 1.5s ease-in-out;
    }

    /* Animations */
    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-50px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(50px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .cta-button {
        padding: 15px 30px;
        font-size: 1.2rem;
        font-weight: bold;
        color: #fff;
        background-color: #000;
        border: 4px solid #fff;
        text-transform: uppercase;
        transition: all 0.3s ease;
        animation: fadeInUp 2s ease-in-out;
    }

    .cta-button:hover {
        background-color: transparent;
        color: #000;
    }

    /* Paket Layanan Section */
    .paket-section {
        padding: 50px 0;
        background-color: #f7f7f7;
        text-align: center;
    }

    .paket-title {
        font-size: 2.5rem;
        font-weight: bold;
        color: #333;
        margin-bottom: 20px;
    }

    .paket-container {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
    }

    .paket-card {
        background: #fff;
        padding: 20px;
        margin: 15px;
        width: 25%;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s;
    }

    .paket-card:hover {
        transform: translateY(-10px);
    }

    .paket-card h3 {
        font-size: 1.8rem;
        color: #333;
        margin-bottom: 10px;
    }

    .paket-card p {
        font-size: 1.1rem;
        color: #666;
    }

    .paket-card .price {
        font-size: 2.5rem;
        font-weight: bold;
        color: #000;
        margin-bottom: 20px;
    }

    .paket-card .btn-pilih {
        background-color: #000;
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
        text-transform: uppercase;
        transition: background-color 0.3s ease;
    }

    .paket-card .btn-pilih:hover {
        background-color: #333;
    }

    /* Testimonial Section */
    .testimonial-section {
        background-color: #222;
        padding: 60px 0;
        color: white;
    }

    .testimonial-title {
        font-size: 2.5rem;
        color: white;
        text-align: center;
        margin-bottom: 30px;
    }

    .testimonial-container {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
        text-align: center;
    }

    .testimonial-card {
        background: #333;
        padding: 30px;
        border-radius: 10px;
        width: 30%;
        margin: 10px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s;
    }

    .testimonial-card:hover {
        transform: translateY(-10px);
    }

    .testimonial-card img {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        margin-bottom: 15px;
    }

    .testimonial-card p {
        font-size: 1rem;
        line-height: 1.6;
    }

    .testimonial-card h4 {
        margin-top: 10px;
        font-size: 1.2rem;
        color: #f7c946;
    }

    /* FAQ Section */
    .faq-section {
        padding: 60px 0;
        background-color: #f9f9f9;
    }

    .faq-title {
        font-size: 2.5rem;
        font-weight: bold;
        color: #333;
        text-align: center;
        margin-bottom: 40px;
    }

    .accordion-button {
        font-size: 1.2rem;
        font-weight: bold;
        color: #333;
        background-color: #fff;
        border: none;
        outline: none;
        padding: 20px;
        text-align: left;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .accordion-button:hover {
        background-color: #f7f7f7;
    }

    .accordion-item {
        border: none;
        border-bottom: 1px solid #ddd;
        margin-bottom: 15px;
    }

    .accordion-body {
        background-color: #fff;
        padding: 20px;
        border: none;
        font-size: 1rem;
        color: #666;
        line-height: 1.6;
    }
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="hero-section">
    <div class="container" style="z-index: 1;">
        <div class="row">
            <div class="col">
                <div class="hero-content">
                    <h1 class="chakra-petch-bold">Unleash the Power of Speed</h1>
                    <p class="arcade-interlaced-regular">Fast, reliable, and secure internet connection for all your needs</p>
                    <br>
                    <a href="#" class="btn btn-outline-light btn-lg chakra-petch-medium cta-button">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Paket Layanan Section -->
<section class="paket-section">
    <h2 class="paket-title">Our Packages</h2>
    <div class="paket-container">
        <div class="paket-card">
            <h3>Basic Plan</h3>
            <p>For light users</p>
            <div class="price">$20/month</div>
            <a href="#" class="btn-pilih">Choose Plan</a>
        </div>
        <div class="paket-card">
            <h3>Premium Plan</h3>
            <p>For regular users</p>
            <div class="price">$40/month</div>
            <a href="#" class="btn-pilih">Choose Plan</a>
        </div>
        <div class="paket-card">
            <h3>Pro Plan</h3>
            <p>For heavy users</p>
            <div class="price">$60/month</div>
            <a href="#" class="btn-pilih">Choose Plan</a>
        </div>
    </div>
</section>

<!-- Testimonial Section -->
<section class="testimonial-section">
    <h2 class="testimonial-title">What Our Customers Say</h2>
    <div class="testimonial-container">
        <div class="testimonial-card">
            <img src="assets/img/testimonial/user1.jpg" alt="User 1">
            <p>"Amazing service! Fast and reliable, perfect for my daily needs."</p>
            <h4>John Doe</h4>
        </div>
        <div class="testimonial-card">
            <img src="assets/img/testimonial/user2.jpg" alt="User 2">
            <p>"The best internet I've ever used, and the support team is great."</p>
            <h4>Jane Smith</h4>
        </div>
        <div class="testimonial-card">
            <img src="assets/img/testimonial/user3.jpg" alt="User 3">
            <p>"Super fast internet with no downtime, perfect for streaming."</p>
            <h4>Alex Johnson</h4>
        </div>
    </div>
</section>


<!-- FAQ Section -->
<section class="faq-section">
    <div class="container">
        <h2 class="faq-title">Frequently Asked Questions</h2>
        <div class="accordion" id="faqAccordion">
            <!-- FAQ 1 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faq1">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                        Bagaimana cara saya memasang layanan internet ini di rumah?
                    </button>
                </h2>
                <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="faq1" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Untuk memasang layanan internet kami di rumah, Anda cukup menghubungi tim pemasaran atau mendaftar melalui situs web kami. Setelah itu, teknisi kami akan mengunjungi lokasi Anda untuk pemasangan perangkat dan mengaktifkan layanan internet dengan cepat.
                    </div>
                </div>
            </div>

            <!-- FAQ 2 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faq2">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                        Apakah layanan internet tersedia di seluruh wilayah Indonesia?
                    </button>
                </h2>
                <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="faq2" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Layanan internet kami saat ini tersedia di sebagian besar wilayah Indonesia. Namun, untuk memastikan bahwa layanan tersedia di wilayah Anda, silakan periksa dengan memasukkan kode pos Anda di situs web kami atau hubungi tim layanan pelanggan.
                    </div>
                </div>
            </div>

            <!-- FAQ 3 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faq3">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                        Apa yang membedakan layanan ini dari penyedia lain?
                    </button>
                </h2>
                <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="faq3" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Layanan internet kami unggul karena kecepatan tinggi, koneksi yang stabil, keamanan data terbaik, dan dukungan pelanggan yang responsif. Kami juga menawarkan harga kompetitif dengan berbagai pilihan paket yang sesuai dengan kebutuhan pengguna.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script>
    document.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
</script>

<script>
    // Ensure Bootstrap Accordion functionality works
    const accordion = document.querySelectorAll('.accordion-button');
    accordion.forEach(button => {
        button.addEventListener('click', () => {
            const accordionCollapse = button.nextElementSibling;

            accordion.forEach(otherButton => {
                if (otherButton !== button) {
                    otherButton.classList.add('collapsed');
                    otherButton.nextElementSibling.classList.remove('show');
                }
            });

            if (!accordionCollapse.classList.contains('show')) {
                accordionCollapse.classList.add('show');
            }
        });
    });
</script>
<?= $this->endSection() ?>