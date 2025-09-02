<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Kab. Pasuruan (Bootstrap 5 Version)</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet" />

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
            <div class="row align-items-center mt-5 text-center text-lg-start">
                <div class="col-12 col-lg-auto mb-3 mb-lg-0 d-flex justify-content-center justify-content-lg-start">
                    <img src="{{ asset('storage/uploads/logo/pasuruan.png') }}" style="width: 75px"
                        alt="PASURUANKAB.GO.ID" />
                </div>
                <div class="col-12 col-lg-auto d-flex justify-content-center justify-content-lg-start">
                    <h5 class="fw-bold mb-0">PASURUANKAB.GO.ID</h5>
                </div>
            </div>


            <div class="col-lg-12 col-md-6 text-center mt-4">
                <div
                    class="d-flex flex-wrap justify-content-between justify-content-center text-white text-center text-lg-start">

                    <!-- Logo dan Kontak -->
                    <div class="col-12 col-lg-6 p-3">
                        <img src="https://cdn-icons-png.flaticon.com/512/684/684908.png" width="50" class="mb-3">
                        <p>
                            Kompleks Perkantoran Pemerintah Kabupaten Pasuruan <br>
                            Jalan Raya Raci Km. 9, Bangil, Pasuruan, 67153
                        </p>
                    </div>

                    <!-- Email -->
                    <div class="col-12 col-lg-3 p-3">
                        <img src="https://cdn-icons-png.flaticon.com/512/732/732200.png" width="50" class="mb-3">
                        <p>info@kabpasuruan.go.id</p>
                    </div>

                    <!-- Sosial Media -->
                    <div class="col-12 col-lg-3 p-3">
                        <img src="https://cdn-icons-png.flaticon.com/512/1384/1384060.png" width="50" class="mb-3"
                            alt="Ikon Media Sosial">
                        <div>
                            <a href="#" class="btn btn-outline-light btn-sm me-2"><i
                                    class="lab la-facebook-f"></i></a>
                            <a href="#" class="btn btn-outline-light btn-sm me-2"><i
                                    class="lab la-instagram"></i></a>
                            <a href="#" class="btn btn-outline-light btn-sm me-2"><i
                                    class="lab la-twitter"></i></a>
                            <a href="#" class="btn btn-outline-light btn-sm"><i class="lab la-youtube"></i></a>
                        </div>
                    </div>

                </div>


                <div class="d-flex justify-content-between flex-wrap text-center text-lg-start p-3">

                    <!-- Berita -->
                    <div class="col-6 col-lg-3 mb-4">
                        <h6 class="fw-bold">Kategori Berita Kabupaten Pasuruan</h6>
                        <ul class="list-unstyled mt-2">
                            <li><a href="#" class="text-white text-decoration-none">Agrowisata</a></li>
                            <li><a href="#" class="text-white text-decoration-none">Budaya</a></li>
                            <li><a href="#" class="text-white text-decoration-none">Ekonomi</a></li>
                            <li><a href="#" class="text-white text-decoration-none">Kepegawaian</a></li>
                            <li><a href="#" class="text-white text-decoration-none">Kesehatan</a></li>
                            <li><a href="#" class="text-white text-decoration-none">Lingkungan</a></li>
                            <li><a href="#" class="text-white text-decoration-none">Pariwisata</a></li>
                        </ul>
                    </div>

                    <!-- Layanan Publik -->
                    <div class="col-6 col-lg-3 mb-4">
                        <h6 class="fw-bold">Fasilitas</h6>
                        <ul class="list-unstyled mt-2">
                            <li><a href="#" class="text-white text-decoration-none">Kesehatan</a></li>
                            <li><a href="#" class="text-white text-decoration-none">Pasar Daerah</a></li>
                            <li><a href="#" class="text-white text-decoration-none">PDAM</a></li>
                            <li><a href="#" class="text-white text-decoration-none">Pendidikan</a></li>
                            <li><a href="#" class="text-white text-decoration-none">Perhubungan</a></li>
                            <li><a href="#" class="text-white text-decoration-none">Perpustakaan</a></li>
                        </ul>
                    </div>

                    <!-- Profil -->
                    <div class="col-6 col-lg-3 mb-4">
                        <h6 class="fw-bold">Profil Kabupaten Pasuruan</h6>
                        <ul class="list-unstyled mt-2">
                            <li><a href="#" class="text-white text-decoration-none">Bupati & Wakil Bupati</a></li>
                            <li><a href="#" class="text-white text-decoration-none">Lembaga Legislatif</a></li>
                            <li><a href="#" class="text-white text-decoration-none">Lembaga Eksekutif</a></li>
                            <li><a href="#" class="text-white text-decoration-none">Sejarah Kabupaten Pasuruan</a>
                            </li>
                            <li><a href="#" class="text-white text-decoration-none">Arti Lambang</a></li>
                            <li><a href="#" class="text-white text-decoration-none">Peta Pasuruan</a></li>
                        </ul>
                    </div>

                    <!-- Data Kabupaten -->
                    <div class="col-6 col-lg-3 mb-4">
                        <h6 class="fw-bold">Sumber Daya</h6>
                        <ul class="list-unstyled mt-2">
                            <li><a href="#" class="text-white text-decoration-none">Transparansi</a></li>
                            <li><a href="#" class="text-white text-decoration-none">Download</a></li>
                            <li><a href="#" class="text-white text-decoration-none">Agenda</a></li>
                        </ul>
                    </div>

                </div>

            </div>


        </div>
        </div>
    </footer>

    <!-- Line Awesome -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css">
