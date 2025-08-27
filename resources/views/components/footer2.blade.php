<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kab. Pasuruan (Bootstrap 5 Version)</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />

    <style>
        body {
            font-family: "Poppins", sans-serif;
        }

        /* Custom green color similar to the original */
        .bg-custom-green {
            background-color: #0b7642;
        }

        .text-custom-green {
            color: #0b7642;
        }

        .border-custom-green {
            border-color: #0b7642 !important;
        }

        .btn-custom-green {
            background-color: #0b7642;
            color: white;
        }

        .btn-custom-green:hover {
            background-color: #0a6337;
            color: white;
        }

        /* Custom hover effect from original design */
        .card-hover-scale:hover {
            transform: scale(1.02);
            transition: transform 0.3s ease-in-out;
        }

        .img-hover-scale:hover {
            transform: scale(1.05);
        }

        /* Video button hover effect */
        .btn-video-effect {
            position: relative;
            overflow: hidden;
            transition: color 0.3s ease-in-out;
            z-index: 1;
        }

        .btn-video-effect .btn-background {
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 0;
            background-color: #0b7642;
            transition: width 0.3s ease-in-out;
            z-index: -1;
        }

        .btn-video-effect:hover {
            color: white;
        }

        .btn-video-effect:hover .btn-background {
            width: 100%;
        }
    </style>
</head>

<footer class="bg-success text-white pt-5 pb-4">
    <div class="container">
        <div class="row align-items-center mt-5">
            <div class="col-auto">
                <img src="{{ asset('storage/uploads/logo/pasuruan.png') }}" style="width: 75px" alt="PASURUANKAB.GO.ID" />
            </div>
            <div class="col-auto">
                <h5 class="fw-bold mb-3 mb-lg-0">PEMKAB PASURUANKAB.GO.ID</h5>
            </div>
        </div>

        <div class="row mt-5">
            <!-- Logo dan Kontak -->
            <div class="col-lg-3 col-md-6 mb-4">
                <img src="https://cdn-icons-png.flaticon.com/512/684/684908.png" width="50" class="me-2">

                <p class="mt-4">
                    Kompleks Perkantoran Pemerintah Kabupaten Pasuruan Jalan Raya Raci Km. 9, Bangil, Pasuruan, 67153
                </p>
            </div>


            <div class="col-lg-3 col-md-6 mb-4">
                <img src="https://cdn-icons-png.flaticon.com/512/732/732200.png" width="20" class="me-2">
                <p><i class="la la-envelope"></i> info@jabarprov.go.id</p>
            </div>


            <div class="col-lg-3 col-md-6 mb-4">
                <p><i class="la la-comment-alt"></i> Isi survei performa situs web</p>
            </div>

            <div class="col-lg-3 col-md-6 mb-4 text-end">
                <a href="#" class="btn btn-outline-light btn-sm me-2"><i class="lab la-facebook-f"></i></a>
                <a href="#" class="btn btn-outline-light btn-sm me-2"><i class="lab la-instagram"></i></a>
                <a href="#" class="btn btn-outline-light btn-sm me-2"><i class="lab la-twitter"></i></a>
                <a href="#" class="btn btn-outline-light btn-sm"><i class="lab la-youtube"></i></a>
            </div>
            
        </div>

        <!-- Sitemap -->
        <div class="col-lg-12 col-md-6">
            <div class="row">
                <div class="col-6 col-lg-3 mb-3">
                    <h6 class="fw-bold">Berita Kabupaten Pasuruan</h6>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white text-decoration-none">Ekonomi</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Kesehatan</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Pendidikan</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Pemerintahan</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Infrastruktur</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Sosial</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Teknologi</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-3 mb-3">
                    <h6 class="fw-bold">Layanan Publik</h6>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white text-decoration-none">Administrasi Kependudukan</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Kelahiran</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Sekolah</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Pendidikan Tinggi</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Lowongan Pekerjaan</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Kesehatan Individu & Keluarga</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2 mb-3">
                    <h6 class="fw-bold">Data Kabupaten Pasuruan</h6>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white text-decoration-none">Open Data Jabar</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Satu Peta</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Dashboard Jabar</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2 mb-3">
                    <h6 class="fw-bold">Profil Kabupaten Pasuruan</h6>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white text-decoration-none">Selayang Pandang</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Tentang Kabupaten Pasuruan</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Arsip dan Dokumen</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Jaringan Dokumentasi</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Layanan Pengadaan</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Sapawarga</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2 mb-3">
                    <h6 class="fw-bold">PPID</h6>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white text-decoration-none">Profil PPID</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Alur Layanan Informasi Publik</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Permohonan Informasi</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Pengajuan Keberatan</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Informasi yang Wajib</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>
</footer>

<!-- Line Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css">