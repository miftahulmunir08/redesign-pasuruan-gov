@once
    {{-- Removed duplicate CSS loads - already in layout.blade.php --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> --}}
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css"> --}}

    <style>
        /* =======================================================
                                                       STYLE UNTUK NAVBAR DESKTOP (SUBMENU FLYOUT)
                                                       ======================================================= */
        .dropdown-menu .dropdown-submenu {
            position: relative;
        }

        .dropdown-menu .dropdown-submenu .dropdown-menu {
            top: 0;
            left: 100%;
            margin-top: -1px;
            display: none;
        }

        .dropdown-menu .dropdown-submenu:hover>.dropdown-menu {
            display: block;
        }

        /* =======================================================
                                                       STYLE UNTUK BOTTOM NAVBAR MOBILE (KODE ASLI ANDA)
                                                       ======================================================= */
        .bottom-navbar {
            position: fixed;
            bottom: 15px;
            left: 50%;
            transform: translateX(-50%);
            width: 95%;
            max-width: 500px;
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

        .splide__track,
        .splide__list {
            overflow: visible;
        }

        .nav-icon {
            font-size: 20px;
            display: block;
        }

        /* =======================================================
                                                       STYLE ANIMASI DROPUP MENU MOBILE
                                                       ======================================================= */
        .dropdown-toggle::after {
            display: none !important;
        }

        .dropup .dropdown-menu {
            display: block;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
            border: none;
            border-radius: 15px;
            position: absolute;
            bottom: 100%;
            left: 50%;
            transform: translateX(-50%) translateY(20px);
            z-index: 1050;
            margin-bottom: 0;
            background: white;
            min-width: 200px;
        }

        .dropup .dropdown-menu .dropdown-item {
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.3s ease;
        }

        .dropup .dropdown-menu.show {
            opacity: 1;
            visibility: visible;
            transform: translateX(-50%) translateY(0);
        }

        .dropup .dropdown-menu.show .dropdown-item {
            opacity: 1;
            transform: translateY(0);
        }

        /* Animasi Stagger */
        .dropup .dropdown-menu.show .dropdown-item:nth-child(1) {
            transition-delay: 0.05s;
        }

        .dropup .dropdown-menu.show .dropdown-item:nth-child(2) {
            transition-delay: 0.1s;
        }

        .dropup .dropdown-menu.show .dropdown-item:nth-child(3) {
            transition-delay: 0.15s;
        }

        .dropup .dropdown-menu.show .dropdown-item:nth-child(4) {
            transition-delay: 0.2s;
        }

        .dropup .dropdown-menu.show .dropdown-item:nth-child(5) {
            transition-delay: 0.25s;
        }

        .dropup .dropdown-menu.show .dropdown-item:nth-child(6) {
            transition-delay: 0.3s;
        }


        /* =======================================================
                                                       STYLE UNTUK AKORDION DI MENU MOBILE
                                                       ======================================================= */
        .dropup .dropdown-menu .dropdown-submenu .collapse {
            padding-left: 25px;
            /* Beri indentasi untuk submenu */
        }

        .dropup .dropdown-menu .dropdown-submenu .dropdown-item {
            padding-top: 8px;
            padding-bottom: 8px;
        }

        .dropup .dropdown-menu .dropdown-submenu>a.dropdown-toggle::after {
            /* Membuat ikon panah untuk akordion */
            display: inline-block !important;
            content: '';
            border: solid black;
            border-width: 0 2px 2px 0;
            padding: 3px;
            float: right;
            margin-top: 8px;
            transform: rotate(45deg);
            -webkit-transform: rotate(45deg);
            transition: transform 0.3s ease;
        }

        .dropup .dropdown-menu .dropdown-submenu>a.dropdown-toggle:not(.collapsed)::after {
            /* Memutar panah saat akordion terbuka */
            transform: rotate(-135deg);
            -webkit-transform: rotate(-135deg);
        }



        /* new */

        .splide__slide .dropdown-menu {
            max-height: 300px;
            /* batas tinggi */
            overflow-y: scroll;
            /* paksa scrollbar muncul */
            scrollbar-gutter: stable;
            /* biar ruang scrollbar tetap ada */
        }

        /* Scrollbar untuk Chrome, Edge, Safari */
        .splide__slide .dropdown-menu::-webkit-scrollbar {
            width: 10px;
        }

        .splide__slide .dropdown-menu::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 5px;
        }

        .splide__slide .dropdown-menu::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 5px;
        }

        .splide__slide .dropdown-menu::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        /* Scrollbar untuk Firefox */
        .splide__slide .dropdown-menu {
            scrollbar-width: thin;
            /* tipis */
            scrollbar-color: #888 #f1f1f1;
            /* thumb track */
        }
    </style>
@endonce

<div class="bottom-navbar d-lg-none d-block">
    <div id="navbarSplide" class="splide">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide dropup">
                    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-badge nav-icon"></i>
                        Profil
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" style="color: black !important;"
                                href="{{ url('profil/visi-dan-misi') }}">Visi dan Misi</a></li>
                        <li><a class="dropdown-item" style="color: black !important;"
                                href="{{ url('profil/arti-lambang') }}">Arti Lambang</a></li>
                        <li><a class="dropdown-item" style="color: black !important;"
                                href="{{ url('profil/peta-pasuruan') }}">Peta Pasuruan</a></li>
                        <li><a class="dropdown-item" style="color: black !important;"
                                href="{{ url('profil/sejarah-singkat-kab-pasuruan') }}">Sejarah Kabupaten Pasuruan</a>
                        </li>
                        <li class="dropdown-submenu">
                            <a class="dropdown-item dropdown-toggle fw-bold" style="color: black !important;"
                                href="#submenu-pemerintahan" data-bs-toggle="collapse" role="button"
                                aria-expanded="true" aria-controls="submenu-pemerintahan">
                                Pemerintahan
                            </a>
                            <ul class="collapse show" id="submenu-pemerintahan">
                                <li><a class="dropdown-item" style="color: black !important;"
                                        href="{{ url('profil/pemerintahan/bupati-wakil-bupati') }}">Bupati & Wakil
                                        Bupati</a></li>
                                <li><a class="dropdown-item" style="color: black !important;"
                                        href="{{ url('profil/pemerintahan/lembaga-legislatif') }}">Lembaga
                                        Legislatif</a></li>
                                <li><a class="dropdown-item" style="color: black !important;"
                                        href="{{ url('profil/pemerintahan/lembaga-eksekutif') }}">Lembaga Eksekutif</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a class="dropdown-item dropdown-toggle fw-bold" style="color: black !important;"
                                href="#submenu-gambaran" data-bs-toggle="collapse" role="button" aria-expanded="true"
                                aria-controls="submenu-gambaran">
                                Gambaran Umum
                            </a>
                            <ul class="collapse show" id="submenu-gambaran">
                                <li><a class="dropdown-item" style="color: black !important;"
                                        href="{{ url('profil/gambaran-umum-kabupaten-pasuruan-2025') }}">Gambaran Umum
                                        Kab. Pasuruan</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="splide__slide dropup ">
                    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-graph-up-arrow nav-icon"></i>
                        Potensi
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" style="color: black !important;"
                                href="{{ url('profil/visi-dan-misi') }}">Prestasi</a></li>
                        <li><a class="dropdown-item" style="color: black !important;"
                                href="{{ url('profil/arti-lambang') }}">Industri</a></li>
                        <li><a class="dropdown-item" style="color: black !important;"
                                href="{{ url('profil/peta-pasuruan') }}">Koperasi</a></li>
                        <li><a class="dropdown-item" style="color: black !important;"
                                href="{{ url('profil/sejarah-singkat-kab-pasuruan') }}">Pariwisata</a></li>
                    </ul>
                </li>
                <li class="splide__slide dropup ">
                    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-building nav-icon"></i>
                        Fasilitas
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" style="color: black !important;"
                                href="{{ url('profil/visi-dan-misi') }}">Kesehatan</a></li>
                        <li><a class="dropdown-item" style="color: black !important;"
                                href="{{ url('profil/arti-lambang') }}">Pendidikan</a></li>
                        <li><a class="dropdown-item" style="color: black !important;"
                                href="{{ url('profil/peta-pasuruan') }}">Pasar Daerah</a></li>
                        <li><a class="dropdown-item" style="color: black !important;"
                                href="{{ url('profil/sejarah-singkat-kab-pasuruan') }}">PDAM</a></li>
                        <li><a class="dropdown-item" style="color: black !important;"
                                href="{{ url('profil/sejarah-singkat-kab-pasuruan') }}">Perhubungan</a></li>
                        <li><a class="dropdown-item" style="color: black !important;"
                                href="{{ url('profil/sejarah-singkat-kab-pasuruan') }}">Perpustakaan</a></li>
                    </ul>
                </li>

                <li class="splide__slide dropup ">
                    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-gear nav-icon"></i>
                        Layanan
                    </a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-submenu">
                            <a class="dropdown-item dropdown-toggle fw-bold" style="color: black !important;"
                                href="#submenu-pemerintahan" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="submenu-pemerintahan">
                                Kependudukan
                            </a>
                            <ul class="collapse show" id="submenu-pemerintahan">
                                <li><a class="dropdown-item" style="color: black !important;"
                                        href="{{ url('profil/pemerintahan/bupati-wakil-bupati') }}">Kartu Identitas
                                        Anak</a></li>
                                <li><a class="dropdown-item" style="color: black !important;"
                                        href="{{ url('profil/pemerintahan/lembaga-legislatif') }}">Akta Perkawinan &
                                        Perceraian</a></li>
                                <li><a class="dropdown-item" style="color: black !important;"
                                        href="{{ url('profil/pemerintahan/lembaga-eksekutif') }}">Akta Pencatatan
                                        Kematian</a></li>
                                <li><a class="dropdown-item" style="color: black !important;"
                                        href="{{ url('profil/pemerintahan/lembaga-eksekutif') }}">Surat Mutasi
                                        Penduduk</a></li>
                                <li><a class="dropdown-item" style="color: black !important;"
                                        href="{{ url('profil/pemerintahan/lembaga-eksekutif') }}">KTP Elektronik</a>
                                </li>
                                <li><a class="dropdown-item" style="color: black !important;"
                                        href="{{ url('profil/pemerintahan/lembaga-eksekutif') }}">SKTT</a></li>
                                <li><a class="dropdown-item" style="color: black !important;"
                                        href="{{ url('profil/pemerintahan/lembaga-eksekutif') }}">Kartu Keluarga</a>
                                </li>
                                <li><a class="dropdown-item" style="color: black !important;"
                                        href="{{ url('profil/pemerintahan/lembaga-eksekutif') }}">Akta Pencatatan
                                        SIpil</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a class="dropdown-item dropdown-toggle fw-bold" style="color: black !important;"
                                href="#submenu-pemerintahan" data-bs-toggle="collapse" role="button"
                                aria-expanded="true" aria-controls="submenu-pemerintahan">
                                Perhubungan
                            </a>
                            <ul class="collapse show" id="submenu-pemerintahan">
                                <li><a class="dropdown-item" style="color: black !important;"
                                        href="{{ url('profil/pemerintahan/bupati-wakil-bupati') }}">Pengujian
                                        Kendaraan Bermotor</a></li>
                                <li><a class="dropdown-item" style="color: black !important;"
                                        href="{{ url('profil/pemerintahan/lembaga-legislatif') }}">Ram Check</a></li>
                                <li><a class="dropdown-item" style="color: black !important;"
                                        href="{{ url('profil/pemerintahan/lembaga-eksekutif') }}">Perizinan
                                        Angkutan</a></li>
                                <li><a class="dropdown-item" style="color: black !important;"
                                        href="{{ url('profil/pemerintahan/lembaga-eksekutif') }}">Perizinan
                                        Perparkiran</a></li>
                                <li><a class="dropdown-item" style="color: black !important;"
                                        href="{{ url('profil/pemerintahan/lembaga-eksekutif') }}">KTP Elektronik</a>
                                </li>
                                <li><a class="dropdown-item" style="color: black !important;"
                                        href="{{ url('profil/pemerintahan/lembaga-eksekutif') }}">SKTT</a></li>
                                <li><a class="dropdown-item" style="color: black !important;"
                                        href="{{ url('profil/pemerintahan/lembaga-eksekutif') }}">Kartu Keluarga</a>
                                </li>
                                <li><a class="dropdown-item" style="color: black !important;"
                                        href="{{ url('profil/pemerintahan/lembaga-eksekutif') }}">Akta Pencatatan
                                        SIpil</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a class="dropdown-item dropdown-toggle fw-bold" style="color: black !important;"
                                href="#submenu-pemerintahan" data-bs-toggle="collapse" role="button"
                                aria-expanded="true" aria-controls="submenu-pemerintahan">
                                Informasi & Komunikasi
                            </a>
                            <ul class="collapse show" id="submenu-pemerintahan" style="">
                                <li><a class="dropdown-item" style="color: black !important;"
                                        href="{{ url('profil/pemerintahan/bupati-wakil-bupati') }}">Pelayanan
                                        Konsultasi TIK Pada Aplikasi SAKTI</a></li>
                                <li><a class="dropdown-item" style="color: black !important;"
                                        href="{{ url('profil/pemerintahan/lembaga-legislatif') }}">Layanan Nomor
                                        Tunggal Panggilan Darurat 112</a></li>
                                <li><a class="dropdown-item" style="color: black !important;"
                                        href="{{ url('profil/pemerintahan/lembaga-eksekutif') }}">Pelayanan
                                        Pengaduan</a></li>
                                <li><a class="dropdown-item" style="color: black !important;"
                                        href="{{ url('profil/pemerintahan/lembaga-eksekutif') }}">Pelayanan Sub
                                        Domain, Hosting dan VPS</a></li>
                                <li><a class="dropdown-item" style="color: black !important;"
                                        href="{{ url('profil/pemerintahan/lembaga-eksekutif') }}">Pelayanan Gangguan
                                        Jaringan Internet/LAN</a></li>
                                <li><a class="dropdown-item" style="color: black !important;"
                                        href="{{ url('profil/pemerintahan/lembaga-eksekutif') }}">Pelayanan Pengajuan
                                        Keamanan Sistem Informasi</a></li>
                                <li><a class="dropdown-item" style="color: black !important;"
                                        href="{{ url('profil/pemerintahan/lembaga-eksekutif') }}">Pelayanan Permohonan
                                        Penyelenggaraan Video Conference</a></li>
                                <li><a class="dropdown-item" style="color: black !important;"
                                        href="{{ url('profil/pemerintahan/lembaga-eksekutif') }}">Pelayanan Sandi dan
                                        Telekomunikasi (Santel)</a></li>
                                <li><a class="dropdown-item" style="color: black !important;"
                                        href="{{ url('profil/pemerintahan/lembaga-eksekutif') }}">Pelayanan
                                        Sosialisasi Permohonan Narasumber Terkait Aplikasi</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="splide__slide">
                    <a href="#">
                        <i class="bi bi-boxes nav-icon"></i>
                        Sumber&nbsp;Daya
                    </a>
                </li>
                <li class="splide__slide">
                    <a href="#">
                        <i class="bi bi-envelope nav-icon"></i>
                        Kontak
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>



{{-- <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Inisialisasi Splide.js untuk navbar mobile
        if (document.getElementById('navbarSplide')) {
            new Splide('#navbarSplide', {
                type: 'slide',
                perPage: 4,
                gap: '10px',
                pagination: false,
                arrows: false,
                drag: 'free',
            }).mount();
        }
    });
</script> --}}

@push('scripts')
    @once
        <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Inisialisasi Splide.js untuk navbar mobile
                if (document.getElementById('navbarSplide')) {
                    new Splide('#navbarSplide', {
                        type: 'slide',
                        perPage: 4,
                        gap: '10px',
                        pagination: false,
                        arrows: false,
                        drag: 'free',
                    }).mount();
                }

                // Initialize Bootstrap dropdowns after DOM is loaded
                if (typeof bootstrap !== 'undefined') {
                    // Get all dropdown toggles
                    const dropdownToggles = document.querySelectorAll('[data-bs-toggle="dropdown"]');

                    dropdownToggles.forEach(toggle => {
                        // Create new Bootstrap dropdown instance
                        const dropdown = new bootstrap.Dropdown(toggle, {
                            // Custom options if needed
                        });

                        // Add click event listener for debugging
                        toggle.addEventListener('click', function(e) {
                            e.preventDefault();
                            console.log('Dropdown clicked:', this);

                            // Toggle the dropdown manually
                            const menu = this.nextElementSibling;
                            if (menu && menu.classList.contains('dropdown-menu')) {
                                const isVisible = menu.classList.contains('show');
                                console.log('Menu visible:', isVisible);

                                if (isVisible) {
                                    dropdown.hide();
                                } else {
                                    dropdown.show();
                                }
                            }
                        });
                    });

                    console.log('Bootstrap dropdowns initialized:', dropdownToggles.length);
                } else {
                    console.error('Bootstrap not loaded!');
                }
            });
        </script>
    @endonce
@endpush
