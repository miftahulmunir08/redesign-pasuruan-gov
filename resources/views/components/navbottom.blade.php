<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Floating Bottom Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">
</head>

<body>

    <style>
        .bottom-navbar {
            position: fixed;
            bottom: 15px;
            left: 50%;
            transform: translateX(-50%);
            width: 95%;
            max-width: 500px;
            /* Lebar maksimal agar terlihat bagus di tablet */
            background: #02ab5a;
            border-radius: 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            z-index: 1000;
            padding: 10px 0;
        }

        .splide__slide {
            text-align: center;
            font-size: 14px;
            color: white;
        }

        .splide__slide a {
            color: white !important;
            text-decoration: none;
        }

        /* Penting: Agar menu dropdown tidak terpotong */
        .splide__track,
        .splide__list {
            overflow: visible;
        }

        .nav-icon {
            font-size: 20px;
            display: block;
        }

        /* Styling untuk dropdown menu */
        .dropup .dropdown-menu {
            margin-bottom: -150px !important;
            /* Memberi jarak antara menu dan navbar */
            border-radius: 15px;
        }

        .dropdown-toggle::after {
            display: none !important;
        }

        /* Sembunyikan ikon panah default Bootstrap */
        .dropdown-toggle::after {
            display: none;
        }

        /* ==============================================
   ANIMASI DROPUP MENU (GAYA BARU)
   ============================================== */

        /* 1. Atur kondisi awal menu (saat tersembunyi) */
        .dropup .dropdown-menu {
            display: block;
            /* Penting agar transisi berfungsi */
            opacity: 0;
            visibility: hidden;
            transform: translateY(20px);
            /* Mulai dari posisi sedikit di bawah */
            transition: all 0.3s ease;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
            border: none;
            border-radius: 15px;
            margin-bottom: 10px !important;
        }

        /* 2. Atur kondisi awal untuk setiap item di dalam menu */
        .dropup .dropdown-menu .dropdown-item {
            opacity: 0;
            transform: translateY(20px);
            /* Item juga mulai dari bawah */
            transition: all 0.3s ease;
        }

        /* 3. Saat menu aktif (memiliki class .show), tampilkan menu */
        .dropup .dropdown-menu.show {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
            /* Kembali ke posisi normal */
        }

        /* 4. Saat menu aktif, animasikan juga setiap item */
        .dropup .dropdown-menu.show .dropdown-item {
            opacity: 1;
            transform: translateY(0);
            /* Item kembali ke posisi normal */
        }

        /* 5. Beri jeda (delay) untuk menciptakan efek stagger/bergantian */
        .dropup .dropdown-menu.show .dropdown-item:nth-child(1) {
            transition-delay: 0.1s;
        }

        .dropup .dropdown-menu.show .dropdown-item:nth-child(2) {
            transition-delay: 0.2s;
        }

        .dropup .dropdown-menu.show .dropdown-item:nth-child(3) {
            transition-delay: 0.3s;
        }

        .dropup .dropdown-menu.show .dropdown-item:nth-child(4) {
            transition-delay: 0.4s;
        }
    </style>

    <div class="bottom-navbar d-lg-none d-block">
        <div id="navbarSplide" class="splide">
            <div class="splide__track">
                <ul class="splide__list">

                    <li class="splide__slide dropup">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-house nav-icon"></i>
                            Profil
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" style="color: black !important;" href="#">Visi dan Misi</a></li>
                            <li><a class="dropdown-item" style="color: black !important;" href="#">Arti Lambang</a></li>
                            <li><a class="dropdown-item" style="color: black !important;" href="#">Peta Pasuruan</a></li>
                            <li><a class="dropdown-item" style="color: black !important;" href="#">Sejarah</a></li>
                        </ul>
                    </li>
                    <li class="splide__slide">
                        <a href="#">
                            <i class="bi bi-search nav-icon"></i>
                            Potensi
                        </a>
                    </li>
                    <li class="splide__slide">
                        <a href="#">
                            <i class="bi bi-bell nav-icon"></i>
                            Fasilitas
                        </a>
                    </li>

                    <li class="splide__slide dropup">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person nav-icon"></i>
                            Layanan
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Layanan A</a></li>
                            <li><a class="dropdown-item" href="#">Layanan B</a></li>
                            <li><a class="dropdown-item" href="#">Layanan C</a></li>
                        </ul>
                    </li>
                    <li class="splide__slide">
                        <a href="#">
                            <i class="bi bi-gear nav-icon"></i>
                            Sumber&nbsp;Daya
                        </a>
                    </li>
                    <li class="splide__slide">
                        <a href="#">
                            <i class="bi bi-telephone nav-icon"></i>
                            Kontak
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Splide('#navbarSplide', {
                type: 'slide',
                perPage: 4,
                gap: '10px',
                pagination: false,
                arrows: false,
                drag: 'free',
            }).mount();
        });
    </script>
</body>

</html>