<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Floating Bottom Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">
    <!-- <style>
        .bottom-navbar {
            position: fixed;
            bottom: 15px;
            left: 50%;
            transform: translateX(-50%);
            width: 95%;
            background: #02ab5a;
            border-radius: 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            z-index: 1000;
            padding: 10px 0;
        }

        .splide__slide {
            text-align: center;
            font-size: 14px;
            padding: 5px;
            color: white !important;
        }

        .splide__slide a {
            color: white !important;
        }

        .nav-icon {
            font-size: 20px;
            display: block;
        }
    </style> -->


    <style>
        .bottom-navbar {
            position: fixed;
            bottom: 15px;
            left: 50%;
            transform: translateX(-50%);
            width: 95%;
            background: #02ab5a;
            border-radius: 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            z-index: 1000;
            padding: 10px 0;
        }

        .splide__slide {
            text-align: center;
            font-size: 14px;
            padding: 5px;
            color: white !important;
        }

        .splide__slide a {
            color: black !important;
        }

        .nav-icon {
            font-size: 20px;
            display: block;
        }

        .splide__track {
            overflow: visible !important;
        }
    </style>
</head>



<!-- Floating Bottom Navbar -->
<!-- <div class="bottom-navbar d-lg-none d-block">
    <div id="navbarSplide" class="splide">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide">
                    <a href="#" class="text-dark text-decoration-none">
                        <i class="bi bi-house nav-icon"></i>
                        Profile
                    </a>
                </li>
                <li class="splide__slide">
                    <a href="#" class="text-dark text-decoration-none">
                        <i class="bi bi-search nav-icon"></i>
                        Potensi
                    </a>
                </li>
                <li class="splide__slide">
                    <a href="#" class="text-dark text-decoration-none">
                        <i class="bi bi-bell nav-icon"></i>
                        Fasilitas
                    </a>
                </li>
                <li class="splide__slide">
                    <a href="#" class="text-dark text-decoration-none">
                        <i class="bi bi-person nav-icon"></i>
                        Layanan
                    </a>
                </li>
                <li class="splide__slide">
                    <a href="#" class="text-dark text-decoration-none">
                        <i class="bi bi-gear nav-icon"></i>
                        Sumber&nbsp;Daya
                    </a>
                </li>
                <li class="splide__slide">
                    <a href="#" class="text-dark text-decoration-none">
                        <i class="bi bi-gear nav-icon"></i>
                        Kontak
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div> -->


<style>
    .bottom-navbar {
        position: fixed;
        bottom: 15px;
        left: 50%;
        transform: translateX(-50%);
        width: 95%;
        background: #02ab5a;
        border-radius: 20px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        z-index: 1000;
        padding: 10px 0;
    }

    .splide__slide {
        text-align: center;
        font-size: 14px;
        padding: 5px;
        color: white !important;
    }

    .splide__slide a {
        color: white !important;
    }

    .nav-icon {
        font-size: 20px;
        display: block;
    }
</style>
<!-- Floating Bottom Navbar -->
<div class="bottom-navbar d-lg-none d-block">
    <div id="navbarSplide" class="splide">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide">
                    <a href="#" class="text-dark text-decoration-none">
                        <i class="bi bi-house nav-icon"></i>
                        Profile
                    </a>
                </li>
                <li class="splide__slide">
                    <a href="#" class="text-dark text-decoration-none">
                        <i class="bi bi-search nav-icon"></i>
                        Potensi
                    </a>
                </li>
                <li class="splide__slide">
                    <a href="#" class="text-dark text-decoration-none">
                        <i class="bi bi-bell nav-icon"></i>
                        Fasilitas
                    </a>
                </li>

                <!-- GANTI INI: Dropdown -->
                <li class="splide__slide dropdown dropup">
                    <a class="text-dark text-decoration-none dropdown-toggle" href="#" id="dropdownMenuButton" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person nav-icon"></i>
                        Layanan
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="#">Layanan 1</a></li>
                        <li><a class="dropdown-item" href="#">Layanan 2</a></li>
                        <li><a class="dropdown-item" href="#">Layanan 3</a></li>
                    </ul>
                </li>
                <!-- END Dropdown -->

                <li class="splide__slide">
                    <a href="#" class="text-dark text-decoration-none">
                        <i class="bi bi-gear nav-icon"></i>
                        Sumber&nbsp;Daya
                    </a>
                </li>
                <li class="splide__slide">
                    <a href="#" class="text-dark text-decoration-none">
                        <i class="bi bi-telephone nav-icon"></i>
                        Kontak
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>



<!-- Modal Layanan -->
<div class="modal fade" id="layananModal" tabindex="-1" aria-labelledby="layananModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <!-- kecil biar estetik -->
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header">
                <h5 class="modal-title" id="layananModalLabel">Layanan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <p>Pilih layanan yang tersedia:</p>
                <a href="#" class="btn btn-success w-100 mb-2">Layanan A</a>
                <a href="#" class="btn btn-outline-success w-100 mb-2">Layanan B</a>
                <a href="#" class="btn btn-outline-success w-100">Layanan C</a>
            </div>
        </div>
    </div>
</div>



<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<script>
    new Splide('#navbarSplide', {
        type: 'slide',
        perPage: 4,
        gap: '10px',
        pagination: false,
        arrows: false,
        drag: 'free',
    }).mount();
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>