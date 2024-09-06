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
        background-image: url('assets/img/about-us/Hero-about-us.png');
        background-size: cover;
        background-position: center;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* .hero-content {
        z-index: 2;
    } */

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

    .line {
        width: 7%;
        height: 5px;
        background-color: white;
        margin-top: 1px;
    }

    .title {
        font-size: 4rem;
        font-weight: bold;
        color: #fff;
        text-transform: uppercase;
        margin-left: 50px;
    }


    .subtitle {
        /* font-size: 1.5rem;
        color: #fff; */
        margin-left: 50px;
        /* letter-spacing: 2px; */
        font-family: 'Chakra Petch', sans-serif;
    }

    .gradient {
        background-image: linear-gradient(180deg,
                rgba(255, 255, 255, 0.01),
                rgba(255, 255, 255, 0) 85%),
            radial-gradient(ellipse at center left,
                rgba(128, 0, 128, 0.15),
                /* Purple */
                transparent 50%),
            radial-gradient(ellipse at center right,
                rgba(0, 128, 0, 0.15),
                /* Green */
                transparent 50%),
            radial-gradient(ellipse at center right,
                rgba(0, 0, 255, 0.15),
                /* Blue */
                transparent 50%),
            radial-gradient(ellipse at center left,
                rgba(255, 192, 203, 0.15),
                /* Pink */
                transparent 50%);
        padding: 96px 0;
    }

    .black-background {
        background-color: black;
        height: 128px;
        width: 100%;
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
                    <p>Unveiling Our Journey: Nurturing Connectivity, Inspiring Futures</p>
                    <h1 class="chakra-petch-bold">Bridging Communities</h1>
                    <h1 class="chakra-petch-bold">Enriching Lives</h1>
                    <a href="#" class="btn btn-outline-light btn-lg chakra-petch-medium" data-mdb-ripple-init>Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</header>

<section>
    <div class="container-fluid gradient" style="background-color:#000; padding: 60px 0;">
        <div class="row">
            <div class="col text-start" style="width: 100%; max-width: 800px; margin: 0 auto;">
                <h1 class="title chakra-petch-bold" style=" margin-bottom: 20px;">A BRIEF STORY</h1>
                <p class="subtitle text-white chakra-petch-regular" style="text-align: justify; line-height: 1.8;">
                    PT. SaranaInsan MudaSelaras, a company that provides multimedia services, debuted the brand Jogja Medianet in Yogyakarta and its environs to support the vision of the city of Jogja, namely "Jogja Never Ending Asia."
                </p>
                <p class="subtitle text-white chakra-petch-regular" style="text-align: justify; line-height: 1.8;">
                    In August of 2001, Jogja Medianet established a presence in Yogyakarta by conducting a survey and designing infrastructure development based on the findings of a Marketing Research study on multimedia services.
                </p>
                <p class="subtitle text-white chakra-petch-regular" style="text-align: justify; line-height: 1.8;">
                    Due to the demand for Multimedia Services, which is the convergence of Data, Voice, and Image services, Hybrid Fiber Coax (HFC) technology, a combination of fiber optic cable and coaxial cable technology, has been chosen. Several European and North American nations have evaluated this Broadband Access technology.
                </p>
                <p class="subtitle text-white chakra-petch-regular" style="text-align: justify; line-height: 1.8;">
                    Construction of the HFC Network infrastructure began in October 2001 using RF equipment from Scientific Atlanta (SA), the primary HFC Network equipment supplier in the United States.
                </p>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container-fluid p-0 position-relative">
        <div class="row">
            <div class="col">
                <!-- Background Image -->
                <img src="assets/img/about-us/image 39.png" alt="About Us Image" class="img-fluid w-100" style="object-fit: cover;">
                <!-- Dark Overlay and Text -->
                <div class="text-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(0, 0, 0, 0.5);">
                    <div class="container text-white" style="max-width: 800px;">
                        <h1 class="subtitle text-white chakra-petch-bold" style="text-align: justify; margin-bottom:40px;">The basic configuration of the Jogja Medianet HFC network</h1>
                        <p class="subtitle text-white chakra-petch-regular" style="text-align: justify;">
                            In January 2002, during the ATF (Asean Tourism Forum) international event held at the Jogja Expo Center (JEC), Jogja Medianet began offering its services.
                        </p>
                        <p class="subtitle text-white chakra-petch-regular" style="text-align: justify;">
                            The JEC Building has then become Multimedia Services Ready supported by the HFC infrastructure of Jogja Medianet.
                        </p>
                        <p class="subtitle text-white chakra-petch-regular" style="text-align: justify;">
                            In accordance with the progression of telecommunications technology, PT SIMS is migrating its services to FTTH (Fiber To The Home).
                        </p>
                        <p class="subtitle text-white chakra-petch-regular" style="text-align: justify;">
                            Infrastructure: Currently, Jogja’s entire service infrastructure utilizes Fiber Optics to reach residences, in an endeavor to introduce new products and services with a new vision as the leading digital lifestyle in Yogyakarta, the new Lifemedia Brand is introduced.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="black-background"></div>
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
<?= $this->endSection() ?>