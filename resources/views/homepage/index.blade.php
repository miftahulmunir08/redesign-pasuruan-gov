@extends('layout')

@push('links')
    @once
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/lity/2.4.1/lity.min.css" rel="stylesheet">
    @endonce
@endpush

@push('styles')
    @once
        <style>
            body {
                font-family: "Poppins", sans-serif;
            }

            .bg-custom-green {
                background-color: #338d24;
            }

            .text-custom-green {
                color: #338d24;
            }

            .border-custom-green {
                border-color: #338d24 !important;
            }

            .btn-custom-green {
                background-color: #338d24;
                color: white;
            }

            .btn-custom-green:hover {
                background-color: #2a7320;
                color: white;
            }

            .card {
                cursor: pointer;
                transition: all 0.3s ease-in-out;
                border-radius: 0px !important;
            }

            .card:hover {
                /* transform: translateY(-4px); */
            }

            .img-hover-scale {
                transition: transform 0.3s ease-in-out;
            }

            .img-hover-scale:hover {
                transform: scale(1.05);
            }

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
                background-color: #338d24;
                transition: width 0.3s ease-in-out;
                z-index: -1;
            }

            .btn-video-effect:hover {
                color: white;
            }

            .btn-video-effect:hover .btn-background {
                width: 100%;
            }

            .search-bar-margin {
                margin-top: 2rem !important;
            }

            .layanan-card__hover {
                transition: all 0.3s ease;
                border: 1px solid rgba(0, 0, 0, .125);
            }

            .layanan-card__hover:hover {
                transform: translateY(-5px);
                border: 1px solid #e43434;
            }


            @media (min-width: 768px) {
                .search-bar-margin {
                    margin-top: -2rem !important;
                }
            }

            @media (min-width: 768px) {}

            .swiper-pagination {
                margin-top: 20px;
                position: relative;
            }

            .nav-pills .nav-link {
                background: transparent;
                border: none;
                border-radius: 8px;
                padding: 12px 16px;
                margin-bottom: 8px;
                transition: all 0.3s ease;
                position: relative;
                overflow: hidden;
                color: #495057;
            }

            .nav-pills .nav-link:hover {
                background-color: rgba(51, 141, 36, 0.1);
                transform: translateX(5px);
                color: #338d24;
            }

            .nav-pills .nav-link.active {
                background-color: #338d24;
                color: white;
                box-shadow: 0 4px 12px rgba(51, 141, 36, 0.3);
                transform: translateX(8px);
            }

            .nav-pills .nav-link.active svg {
                stroke: white;
            }

            .nav-pills .nav-link svg {
                transition: all 0.3s ease;
                flex-shrink: 0;
            }

            .nav-pills .nav-link:hover svg {
                transform: scale(1.1);
            }

            .tab-content {
                background: #f8f9fa;
                border-radius: 8px;
                padding: 20px;
                min-height: 200px;
            }

            .hover-link {
                transition: all 0.3s ease;
                position: relative;
                padding-left: 20px;
            }

            .hover-link::before {
                content: '';
                position: absolute;
                left: 0;
                top: 50%;
                transform: translateY(-50%);
                width: 6px;
                height: 6px;
                background-color: #338d24;
                border-radius: 50%;
                opacity: 0;
                transition: opacity 0.3s ease;
            }

            .hover-link:hover {
                color: #338d24 !important;
                transform: translateX(5px);
            }

            .hover-link:hover::before {
                opacity: 1;
            }

            .border-start-md {
                border-left: 2px solid #e9ecef !important;
                padding-left: 30px !important;
            }

            @media (max-width: 767.98px) {
                .border-start-md {
                    border-left: none !important;
                    border-top: 2px solid #e9ecef !important;
                    padding-left: 0 !important;
                    padding-top: 20px !important;
                    margin-top: 20px !important;
                }

                .nav-pills {
                    flex-direction: row !important;
                    overflow-x: auto;
                    padding-bottom: 10px;
                }

                .nav-pills .nav-link {
                    white-space: nowrap;
                    margin-right: 8px;
                    margin-bottom: 0;
                    transform: none !important;
                }

                .nav-pills .nav-link:hover {
                    transform: translateY(-2px) !important;
                }

                .nav-pills .nav-link.active {
                    transform: translateY(-2px) !important;
                }
            }

            /* Custom tab styles */
            .custom-tab-nav {
                display: flex;
                flex-direction: column;
            }

            .custom-tab-button {
                background: none;
                border: none;
                padding: 12px 16px;
                text-align: left;
                cursor: pointer;
                display: flex;
                align-items: center;
                gap: 12px;
                border-radius: 8px;
                margin-bottom: 8px;
                transition: background-color 0.3s ease;
                color: #6c757d;
                font-weight: 500;
            }

            .custom-tab-button:hover {
                background-color: #f8f9fa;
                color: #338d24;
            }

            .custom-tab-button.active {
                background-color: #338d24;
                color: white;
            }

            .custom-tab-button.active svg {
                stroke: white;
            }

            .custom-tab-content {
                padding-top: 1rem;
            }

            .custom-tab-pane {
                display: none;
            }

            .custom-tab-pane.active {
                display: block;
            }

            @media (min-width: 768px) {
                .custom-tab-content {
                    padding-top: 0;
                }
            }
        </style>

        <style>
            body {
                background-color: #f8f9fa;
            }

            .img-hover-scale {
                transition: transform 0.3s ease-in-out;
            }

            .img-hover-scale:hover {
                transform: scale(1.05);
            }

            .gallery-modal {
                display: none;
                position: fixed;
                z-index: 1050;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.8);
                text-align: center;
            }

            .gallery-modal-content-wrapper {
                position: relative;
                margin: auto;
                top: 50%;
                transform: translateY(-50%);
                max-width: 90%;
                max-height: 90%;
            }

            .gallery-modal-content {
                max-width: 100%;
                max-height: 80vh;
            }

            @media (max-width: 768px) {
                .gallery-modal-content {
                    margin-top: 30vh;
                    /* turun 30% dari tinggi layar */
                    margin-left: auto;
                    margin-right: auto;
                }
            }

            @keyframes zoom {
                from {
                    transform: scale(0.5)
                }

                to {
                    transform: scale(1)
                }
            }

            #caption {
                margin: auto;
                display: block;
                width: 80%;
                max-width: 700px;
                text-align: center;
                color: #ccc;
                padding: 15px 0;
                height: 50px;
            }

            .close-btn {
                position: absolute;
                top: 15px;
                right: 35px;
                color: #f1f1f1;
                font-size: 40px;
                font-weight: bold;
                transition: 0.3s;
            }

            .close-btn:hover,
            .close-btn:focus {
                color: #bbb;
                text-decoration: none;
                cursor: pointer;
            }

            .prev-btn,
            .next-btn {
                cursor: pointer;
                position: absolute;
                top: 50%;
                width: auto;
                padding: 16px;
                margin-top: -50px;
                color: white;
                font-weight: bold;
                font-size: 24px;
                transition: 0.6s ease;
                user-select: none;
            }

            .next-btn {
                right: 0;
                border-radius: 3px 0 0 3px;
            }

            .prev-btn {
                left: 0;
                border-radius: 0 3px 3px 0;
            }

            .prev-btn:hover,
            .next-btn:hover {
                background-color: rgba(255, 255, 255, 0.2);
            }

            .prev-btn,
            .next-btn {
                text-decoration: none;
            }
        </style>


        <style>
            .card-gallery .overlay-text {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.6);
                /* background transparan */
                color: #fff;
                display: flex;
                align-items: center;
                justify-content: center;
                text-align: center;
                opacity: 0;
                transition: opacity 0.3s ease;
                padding: 10px;
                font-size: 14px;
            }

            .card-gallery:hover .overlay-text {
                opacity: 1;
            }
        </style>
    @endonce
@endpush

@section('content')
    <section id="hero-section" class="swiper banner-swiper">
        <div class="swiper-wrapper">
            @foreach ($devBannerUtama as $banner)
                <div class="position-relative w-100 swiper-slide" style="height: 90vh; min-height: 400px; width: 100%;">
                    <img src="{{ asset($banner->thumbnail) }}" alt="{{ $banner->nama_banner }}"
                        class="w-100 object-fit-cover position-relative"
                        style="height: 100%; max-height: 100%; transform: scale(1.02);border-radius: 0px !important;" />
                    <div class="position-absolute top-0 start-0 w-100 h-100"
                        style="background: rgba(0, 0, 0, 0.3); pointer-events: none;"></div>
                    <div class="position-absolute bottom-0 start-0 end-0 text-white mb-4 mb-md-5">
                        <div class="container-fluid d-flex flex-column flex-md-row justify-content-between align-items-md-end"
                            style="max-width: 91.6%;">
                            <div class="mb-4 mb-md-0 mr-md-1">
                                <h1 class="display-4 fw-bold">{{ $banner->nama_banner }}</h1>
                                <h2 class="h5">
                                    {{ $devVisi }}
                                </h2>
                            </div>
                            <button
                                class="btn btn-light d-flex flex-row align-items-center align-self-start btn-video-effect text-dark my-auto">
                                <span class="btn-background"></span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="me-2" style="width: 20px; height: 20px; position: relative; z-index: 1;">
                                    <path
                                        d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17" />
                                    <path d="m10 15 5-3-5-3z" />
                                </svg>
                                <span class="fw-semibold" style="position: relative; z-index: 1;">Video</span>
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <main class="container-fluid position-relative" style="max-width: 91.6%; padding-bottom: 4rem;">
        <div class="bg-white border-md-0 rounded shadow-sm p-3 position-relative z-2 search-bar-margin" style="">
            <div class="input-group">
                <input name="search" type="search" placeholder="Keyword pencarian" class="form-control" />
                <button class="btn btn-custom-green d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="me-sm-1">
                        <path d="m21 21-4.34-4.34" />
                        <circle cx="11" cy="11" r="8" />
                    </svg>
                    <span class="d-none d-sm-inline">Cari</span>
                </button>
            </div>
        </div>

        <div class="mt-4">
            <p class="h4 fw-medium mb-0">
                Sumber daya<span class="text-custom-green">.</span>
            </p>
            <div class="row g-4 mt-1">
                @foreach ($devSumberDaya as $sumberDaya)
                    <div class="col-12 col-sm-6 col-md-3">
                        <a href="{{ $sumberDaya->url }}" class="text-decoration-none text-dark">
                            <div class="card h-100 shadow-sm border-0 card-hover-scale">
                                <img src="{{ $sumberDaya->imageUrl }}" alt="{{ $sumberDaya->name }}"
                                    class="card-img-top object-fit-cover" style="height: 8rem" />
                                <div class="card-body text-center bg-white">
                                    <p class="card-text">{{ $sumberDaya->name }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- <div class="mt-5">
                <div class="d-flex flex-row justify-content-between align-items-center">
                    <p class="h4 fw-medium mb-0">
                        Hanya di Kabupaten Pasuruan<span class="text-custom-green">.</span>
                    </p>
                    <select id="kategori-filter" class="form-select w-auto">
                        <option value="Semua">Semua</option>
                        <option value="Pemerintah">Pemerintah</option>
                        <option value="Publik">Publik</option>
                    </select>
                </div>


                <div class="swiper app-swiper">
                    <div class="swiper-wrapper">
                        @foreach ($devAplikasi as $app)
                            <div class="swiper-slide">
                                <x-app-card :jenisAplikasi="$app->jenis_aplikasi" :idAplikasi="$app->id_aplikasi" :urlAplikasi="$app->url_aplikasi" :namaAplikasi="$app->nama_aplikasi"
                                    :deskripsiAplikasi="$app->deskripsi_aplikasi" :gambarAplikasi="$app->gambar_aplikasi" />
                            </div>
                        @endforeach
                    </div>

                    <!-- Pagination -->
                    <div class="swiper-pagination" style=""></div>
                </div>
            </div> --}}

        <div class="mt-5">
            <p class="h4 fw-medium">
                Layanan<span class="text-custom-green">.</span>
            </p>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-3 mt-2">
                @foreach ($devLayanan as $tipeLayanan)
                    <div class="col">
                        <div class="card h-100 rounded-3 layanan-card__hover">
                            <a class="card-body d-flex flex-row align-items-center gap-3 text-decoration-none"
                                href={{ $tipeLayanan->url }}>
                                <span class="d-flex align-items-center justify-content-center flex-shrink-0"
                                    style="width: 48px; height: 48px;">
                                    @if ($tipeLayanan->text == 'Kependudukan')
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="#E43434" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                            <path d="M16 3.128a4 4 0 0 1 0 7.744" />
                                            <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                            <circle cx="9" cy="7" r="4" />
                                        </svg>
                                    @elseif ($tipeLayanan->text == 'Perhubungan')
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="#E43434" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M4 6 2 7" />
                                            <path d="M10 6h4" />
                                            <path d="m22 7-2-1" />
                                            <rect width="16" height="16" x="4" y="3" rx="2" />
                                            <path d="M4 11h16" />
                                            <path d="M8 15h.01" />
                                            <path d="M16 15h.01" />
                                            <path d="M6 19v2" />
                                            <path d="M18 21v-2" />
                                        </svg>
                                    @elseif ($tipeLayanan->text == 'Informasi & Komunikasi')
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="#E43434" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="10" />
                                            <path d="M12 16v-4" />
                                            <path d="M12 8h.01" />
                                        </svg>
                                    @elseif ($tipeLayanan->text == 'UMUM/PERIJINAN')
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="#E43434" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path
                                                d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5" />
                                            <path d="M9 18h6" />
                                            <path d="M10 22h4" />
                                        </svg>
                                    @endif
                                </span>
                                <p class="mb-0 fw-semibold text-dark">{{ $tipeLayanan->text }}</p>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>

        <div class="mt-5">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-2">
                <div>
                    <p class="h4 fw-medium">
                        Berita Terbaru<span class="text-custom-green">.</span>
                    </p>
                    <p class="text-muted mb-0">
                        Berita terbaru dari Kabupaten Pasuruan
                    </p>
                </div>
                <a class="btn btn-custom-green align-self-start align-self-md-auto mt-0 mt-md-2 text-decoration-none"
                    href="/berita">
                    Semua Berita
                </a>
            </div>
            <div class="row row-cols-1 row-cols-md-2 g-4 mt-1">
                <div class="col">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="position-relative overflow-hidden rounded-top">
                            <img src="https://www.pasuruankab.go.id/download-file/eyJpdiI6InY2MElpdXFQUmJMTmZGZVBuMHdhYmc9PSIsInZhbHVlIjoiM2NNdlM1d0RZaVIwald1NnBSUUNhZz09IiwibWFjIjoiMDYyZmExMmJhOTZkM2E0N2VhNzE2MDc5N2UxNjMwM2RhMzE4OThlNzlkYzQzOTRjNWNlNjUyMjhlODI2NjZhOCIsInRhZyI6IiJ9/posts/gambar_posts/berita"
                                alt="news image" class="card-img-top object-fit-cover img-hover-scale rounded-top"
                                style="height: 20rem" />
                            <p class="badge bg-success position-absolute bottom-0 end-0 m-3">
                                Nasionalisme
                            </p>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h6 class="text-custom-green fw-medium">
                                Tekan Pengangguran, Dinas Ketenagakerjaan Ajak Pencaker
                                Ikuti Pelatihan Berbasis Kompetensi
                            </h6>
                            <p class="text-secondary small">
                                Sebanyak 90 pencari kerja (pencari kerja) di Kabupaten
                                Pasuruan mengikuti pelatihan berbasis kompetensi, Selasa
                                (12/8/2025).
                            </p>
                            <div class="d-flex flex-row justify-content-between mt-auto small fw-medium">
                                <p class="mb-0">13 Agustus 2025</p>
                                <p class="mb-0 text-custom-green">Author</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="position-relative overflow-hidden rounded-top">
                            <img src="https://www.pasuruankab.go.id/download-file/eyJpdiI6InY2MElpdXFQUmJMTmZGZVBuMHdhYmc9PSIsInZhbHVlIjoiM2NNdlM1d0RZaVIwald1NnBSUUNhZz09IiwibWFjIjoiMDYyZmExMmJhOTZkM2E0N2VhNzE2MDc5N2UxNjMwM2RhMzE4OThlNzlkYzQzOTRjNWNlNjUyMjhlODI2NjZhOCIsInRhZyI6IiJ9/posts/gambar_posts/berita"
                                alt="news image" class="card-img-top object-fit-cover img-hover-scale rounded-top"
                                style="height: 20rem;" />
                            <p class="badge bg-success position-absolute bottom-0 end-0 m-3">
                                Nasionalisme
                            </p>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h6 class="text-custom-green fw-medium">
                                Tekan Pengangguran, Dinas Ketenagakerjaan Ajak Pencaker
                                Ikuti Pelatihan Berbasis Kompetensi
                            </h6>
                            <p class="text-secondary small">
                                Sebanyak 90 pencari kerja (pencari kerja) di Kabupaten
                                Pasuruan mengikuti pelatihan berbasis kompetensi, Selasa
                                (12/8/2025).
                            </p>
                            <div class="d-flex flex-row justify-content-between mt-auto small fw-medium">
                                <p class="mb-0">13 Agustus 2025</p>
                                <p class="mb-0 text-custom-green">Author</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="row g-4 mt-1">
                    <div class="col-sm-4">
                        <div class="card h-100 shadow-sm border-0">
                            <div class="position-relative overflow-hidden rounded-top">
                                <img src="https://www.pasuruankab.go.id/download-file/eyJpdiI6InY2MElpdXFQUmJMTmZGZVBuMHdhYmc9PSIsInZhbHVlIjoiM2NNdlM1d0RZaVIwald1NnBSUUNhZz09IiwibWFjIjoiMDYyZmExMmJhOTZkM2E0N2VhNzE2MDc5N2UxNjMwM2RhMzE4OThlNzlkYzQzOTRjNWNlNjUyMjhlODI2NjZhOCIsInRhZyI6IiJ9/posts/gambar_posts/berita"
                                    alt="news image" class="card-img-top object-fit-cover img-hover-scale rounded-top"
                                    style="height: 12rem" />
                                <p class="badge bg-success position-absolute bottom-0 end-0 m-3">
                                    Nasionalisme
                                </p>
                            </div>
                            <div class="card-body d-flex flex-column">
                                <h6 class="text-custom-green fw-medium">
                                    Tekan Pengangguran, Dinas Ketenagakerjaan Ajak Pencaker
                                    Ikuti Pelatihan Berbasis Kompetensi
                                </h6>
                                <p class="text-secondary small">
                                    Sebanyak 90 pencari kerja (pencari kerja) di Kabupaten
                                    Pasuruan mengikuti pelatihan berbasis kompetensi, Selasa
                                    (12/8/2025).
                                </p>
                                <div class="d-flex flex-row justify-content-between mt-auto small fw-medium">
                                    <p class="mb-0">13 Agustus 2025</p>
                                    <p class="mb-0 text-custom-green">Author</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card h-100 shadow-sm border-0">
                            <div class="position-relative overflow-hidden rounded-top">
                                <img src="https://www.pasuruankab.go.id/download-file/eyJpdiI6InY2MElpdXFQUmJMTmZGZVBuMHdhYmc9PSIsInZhbHVlIjoiM2NNdlM1d0RZaVIwald1NnBSUUNhZz09IiwibWFjIjoiMDYyZmExMmJhOTZkM2E0N2VhNzE2MDc5N2UxNjMwM2RhMzE4OThlNzlkYzQzOTRjNWNlNjUyMjhlODI2NjZhOCIsInRhZyI6IiJ9/posts/gambar_posts/berita"
                                    alt="news image" class="card-img-top object-fit-cover img-hover-scale rounded-top"
                                    style="height: 12rem;" />
                                <p class="badge bg-success position-absolute bottom-0 end-0 m-3">
                                    Nasionalisme
                                </p>
                            </div>
                            <div class="card-body d-flex flex-column">
                                <h6 class="text-custom-green fw-medium">
                                    Tekan Pengangguran, Dinas Ketenagakerjaan Ajak Pencaker
                                    Ikuti Pelatihan Berbasis Kompetensi
                                </h6>
                                <p class="text-secondary small">
                                    Sebanyak 90 pencari kerja (pencari kerja) di Kabupaten
                                    Pasuruan mengikuti pelatihan berbasis kompetensi, Selasa
                                    (12/8/2025).
                                </p>
                                <div class="d-flex flex-row justify-content-between mt-auto small fw-medium">
                                    <p class="mb-0">13 Agustus 2025</p>
                                    <p class="mb-0 text-custom-green">Author</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card h-100 shadow-sm border-0">
                            <div class="position-relative overflow-hidden rounded-top">
                                <img src="https://www.pasuruankab.go.id/download-file/eyJpdiI6InY2MElpdXFQUmJMTmZGZVBuMHdhYmc9PSIsInZhbHVlIjoiM2NNdlM1d0RZaVIwald1NnBSUUNhZz09IiwibWFjIjoiMDYyZmExMmJhOTZkM2E0N2VhNzE2MDc5N2UxNjMwM2RhMzE4OThlNzlkYzQzOTRjNWNlNjUyMjhlODI2NjZhOCIsInRhZyI6IiJ9/posts/gambar_posts/berita"
                                    alt="news image" class="card-img-top object-fit-cover img-hover-scale rounded-top"
                                    style="height: 12rem;" />
                                <p class="badge bg-success position-absolute bottom-0 end-0 m-3">
                                    Nasionalisme
                                </p>
                            </div>
                            <div class="card-body d-flex flex-column">
                                <h6 class="text-custom-green fw-medium">
                                    Tekan Pengangguran, Dinas Ketenagakerjaan Ajak Pencaker
                                    Ikuti Pelatihan Berbasis Kompetensi
                                </h6>
                                <p class="text-secondary small">
                                    Sebanyak 90 pencari kerja (pencari kerja) di Kabupaten
                                    Pasuruan mengikuti pelatihan berbasis kompetensi, Selasa
                                    (12/8/2025).
                                </p>
                                <div class="d-flex flex-row justify-content-between mt-auto small fw-medium">
                                    <p class="mb-0">13 Agustus 2025</p>
                                    <p class="mb-0 text-custom-green">Author</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
        </div>

        <div class="mt-5">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center">
                <div>
                    <p class="h4 fw-medium">
                        Gallery Terbaru<span class="text-custom-green">.</span>
                    </p>
                    <p class="text-muted">
                        Gallery terbaru dari Kabupaten Pasuruan
                    </p>
                </div>
                <a class="btn btn-custom-green align-self-start align-self-md-auto" href="/galeri">
                    Semua Gallery
                </a>
            </div>
            <div class="mt-5">
                <div class="row gallery-container g-0 m-0">

                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="card h-100 shadow-sm border-0 card-gallery" style="border-radius: 0px !important;">
                            <div class="position-relative overflow-hidden h-100">
                                <img src="https://pasuruankab.go.id/download-file/eyJpdiI6Inc3VnNJODR2RjdYVTB3bG1HZXIrckE9PSIsInZhbHVlIjoiOWRkK2JEZ0lPVG4xUWxZSW5YaFJhZz09IiwibWFjIjoiYThhMmFlOGJjYjQ1NWNlZjI2ZDFhOTU0MTllZjI2MTRhYmM1M2Q2YWNlYzU5NDYxM2FiZDMyNDkyYTAyYWUxMiIsInRhZyI6IiJ9/galeri/gambar_galeri/0"
                                    alt="SK Purna Tugas" class="card-img-top object-fit-cover view-gallery-btn h-100"
                                    style="height: 100%;border-radius: 0px !important;" />

                                <!-- Overlay text muncul ketika hover -->
                                <div
                                    class="overlay-text position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center text-white text-center p-3 view-gallery-btn">
                                    <p class="mb-0 card-text">Kunjungan Pemerintah Kabupaten Pasuruan ke Kota Makassar</p>
                                </div>

                                <p class="badge bg-success position-absolute bottom-0 end-0 m-3">Nasionalisme</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="card h-100 shadow-sm border-0 card-gallery">
                            <div class="position-relative overflow-hidden h-100">
                                <img src="https://www.pasuruankab.go.id/download-file/eyJpdiI6Ik1uaUFEYjRqVHc0bDNWeFI2UE1HZFE9PSIsInZhbHVlIjoiT1QzM3UwK0dhMWIwenB0NU05K2xNUT09IiwibWFjIjoiZGRlMzMzNWJmNzEyNTZlOTFjN2U2MzgyMDhjMDQ5MGY2OWY3Y2RjNjI5ZDIyYzExOWUyZjNjNjEwMGViNzBiMSIsInRhZyI6IiJ9/galeri/gambar_galeri/0"
                                    alt="SK Purna Tugas"
                                    class="card-img-top object-fit-cover img-hover-scale view-gallery-btn h-100"
                                    style="height: 100%;border-radius: 0px !important;" />

                                <!-- Overlay text muncul ketika hover -->
                                <div
                                    class="overlay-text position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center text-white text-center p-3 view-gallery-btn">
                                    <p class="mb-0 card-text">Penyerahan Simbolis SK CPNS TA 2024 dan SK Purna Tugas ASN
                                        TMT 1 Juni 2025</p>
                                </div>

                                <p class="badge bg-success position-absolute bottom-0 end-0 m-3">Nasionalisme</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="card h-100 shadow-sm border-0 card-gallery">
                            <div class="position-relative overflow-hidden h-100">
                                <img src="https://www.pasuruankab.go.id/download-file/eyJpdiI6IkVLZzV3SUxZdzRhelA0VjE5NmlOSEE9PSIsInZhbHVlIjoiSVBKcm1QMnpacWgxR3BjOEtKdGp1UT09IiwibWFjIjoiNWY4NDFjYTE3Y2Y4NmQ3YThhYTRkN2Q2YTY2ODE2MTkwNTMwN2I3MmRmMGY0ZTljZjZlMTY3ZDg5YmFhYjk0ZCIsInRhZyI6IiJ9/galeri/gambar_galeri/0"
                                    alt="SK Purna Tugas"
                                    class="card-img-top object-fit-cover img-hover-scale view-gallery-btn h-100"
                                    style="height: 100%;border-radius: 0px !important;" />

                                <!-- Overlay text muncul ketika hover -->
                                <div
                                    class="overlay-text position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center text-white text-center p-3 view-gallery-btn">
                                    <p class="mb-0 card-text">Penyerahan Simbolis Kartu Kepesertaan dan Klaim Jaminan
                                        Kematian (JKM) BPJS Ketenagakerjaan untuk Nelayan</p>
                                </div>

                                <p class="badge bg-success position-absolute bottom-0 end-0 m-3">Nasionalisme</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="card h-100 shadow-sm border-0 card-gallery">
                            <div class="position-relative overflow-hidden h-100">
                                <img src="https://www.pasuruankab.go.id/download-file/eyJpdiI6IjVaTzI0dHlwN29yZURWbC94RTY4Q3c9PSIsInZhbHVlIjoibHNuanRLaXRHa1pzQTFkMnhqK3NSUT09IiwibWFjIjoiNzA4OTBiZTNlZGVhZDA3ZjY1NGU1NDlhZWRmOWRlYmFkZDE4OWI0YWQ5NmEzNmNjZmIzMDQwZWZhZjU4ODllYiIsInRhZyI6IiJ9/galeri/gambar_galeri/0"
                                    alt="SK Purna Tugas"
                                    class="card-img-top object-fit-cover img-hover-scale view-gallery-btn h-100"
                                    style="height: 100%;border-radius: 0px !important;" />

                                <!-- Overlay text muncul ketika hover -->
                                <div
                                    class="overlay-text position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center text-white text-center p-3 view-gallery-btn">
                                    <p class="mb-0 card-text">Serah Terima Jabatan Bupati Kabupaten Pasuruan</p>
                                </div>

                                <p class="badge bg-success position-absolute bottom-0 end-0 m-3">Nasionalisme</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="card h-100 shadow-sm border-0 card-gallery">
                            <div class="position-relative overflow-hidden h-100">
                                <img src="https://www.pasuruankab.go.id/download-file/eyJpdiI6InNGajZIenVISzVnSmlndTd6aGp2VUE9PSIsInZhbHVlIjoiZnh5TSsrbEtZSFBDSktDNG1OQUhxZz09IiwibWFjIjoiMzZjNmJiMjgyNWMzZTU0OWUzYWYyOGFjNjUxNTg5YmM4ODEzOTc5YTVmN2I3MTk3M2ZlMjEwOTlmZGY1YzQxMSIsInRhZyI6IiJ9/galeri/gambar_galeri/0"
                                    alt="SK Purna Tugas"
                                    class="card-img-top object-fit-cover img-hover-scale view-gallery-btn h-100"
                                    style="height: 100%;border-radius: 0px !important;" />

                                <!-- Overlay text muncul ketika hover -->
                                <div
                                    class="overlay-text position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center text-white text-center p-3 view-gallery-btn">
                                    <p class="mb-0 card-text">Serah Terima Jabatan Bupati Kabupaten Pasuruan</p>
                                </div>

                                <p class="badge bg-success position-absolute bottom-0 end-0 m-3">Nasionalisme</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="card h-100 shadow-sm border-0 card-gallery">
                            <div class="position-relative overflow-hidden h-100">
                                <img src="https://www.pasuruankab.go.id/download-file/eyJpdiI6IkVsRXZORCs3VGZMRm44eXdqVE0xSFE9PSIsInZhbHVlIjoidmszNEVwSi9hTXpTZEt2U1ZPcEt2dz09IiwibWFjIjoiNzAyNmMxYjU0NWY0YTZiMDgyYzEzYWI4MGYxNDZlY2NjNmE5NTE4YmZjNzAyMTU4MzlkMDZhMTQ4ODFkMWYxMiIsInRhZyI6IiJ9/galeri/gambar_galeri/0"
                                    alt="SK Purna Tugas"
                                    class="card-img-top object-fit-cover img-hover-scale view-gallery-btn h-100"
                                    style="height: 100%;border-radius: 0px !important;" />

                                <!-- Overlay text muncul ketika hover -->
                                <div
                                    class="overlay-text position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center text-white text-center p-3 view-gallery-btn">
                                    <p class="mb-0 card-text">Konsultasi Peserta di cluster atau pembidangan Forum Lintas
                                        Perangkat Daerah Penyusunan Renja Tahun 2026

                                    </p>
                                </div>

                                <p class="badge bg-success position-absolute bottom-0 end-0 m-3">Nasionalisme</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="card h-100 shadow-sm border-0 card-gallery">
                            <div class="position-relative overflow-hidden h-100">
                                <img src="https://www.pasuruankab.go.id/download-file/eyJpdiI6IjY4eDNUR3cyNWlQWWlNMFlYT1FyMEE9PSIsInZhbHVlIjoiZWV6WEMrZk5NNnVtVWN6NXpDTWlvUT09IiwibWFjIjoiZDk0NjM4MDBlNzE5NGJlYWZkMWViMTUzMTY0NzI0MzE5NjM2Njg3YjcwZjFkMzAxOTMxN2YzOGJjNDFiMjZmMCIsInRhZyI6IiJ9/galeri/gambar_galeri/0"
                                    alt="SK Purna Tugas"
                                    class="card-img-top object-fit-cover img-hover-scale view-gallery-btn h-100"
                                    style="height: 100%;border-radius: 0px !important;" />

                                <!-- Overlay text muncul ketika hover -->
                                <div
                                    class="overlay-text position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center text-white text-center p-3 view-gallery-btn">
                                    <p class="mb-0 card-text">Pengukuhan Tim Penggerak PKK Kabupaten Pasuruan Tahun 2025 -
                                        2030</p>
                                </div>

                                <p class="badge bg-success position-absolute bottom-0 end-0 m-3">Nasionalisme</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="card h-100 shadow-sm border-0 card-gallery">
                            <div class="position-relative overflow-hidden h-100">
                                <img src="https://www.pasuruankab.go.id/download-file/eyJpdiI6IkUrNHFhZzJCUkFhREZlcllHeUd4cEE9PSIsInZhbHVlIjoiUGt6ZnRXcmxBdXdqdjE4YjlhNllXUT09IiwibWFjIjoiMGQ1NzE0NDdjOGQ0ZDZmZjI3MDkyYzllNGNhMTA1MTJhOTdjMTU3MWVhZjEzNzE3NmRjM2ZjNzZlMGZhMGJjNiIsInRhZyI6IiJ9/galeri/gambar_galeri/0"
                                    alt="SK Purna Tugas"
                                    class="card-img-top object-fit-cover img-hover-scale view-gallery-btn h-100"
                                    style="height: 100%;border-radius: 0px !important;" />

                                <!-- Overlay text muncul ketika hover -->
                                <div
                                    class="overlay-text position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center text-white text-center p-3 view-gallery-btn">
                                    <p class="mb-0 card-text">Kunjungan Bupati Ke SD Negeri Jeladri 1</p>
                                </div>

                                <p class="badge bg-success position-absolute bottom-0 end-0 m-3">Nasionalisme</p>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                            <div class="card h-100 shadow-sm border-0 card-gallery">
                                                <div class="position-relative overflow-hidden">
                                                    <img src="https://pasuruankab.go.id/download-file/eyJpdiI6IjVUMGZlWlJkMVJrS1lhN3VJbGpnUnc9PSIsInZhbHVlIjoiUW9IclNHQTIzdEtLTmxEWUxTZnVWUT09IiwibWFjIjoiZGEwYjBmYzJkMjBiOTA5ZWFkN2QxYWQzZjYxYTM1YmZjMjIyMGM2ZTVlODk1NTkyNTc3MTYxYzA1OTQ1YmJlYyIsInRhZyI6IiJ9/galeri/gambar_galeri/0" alt="Penyerahan SK" class="card-img-top object-fit-cover img-hover-scale view-gallery-btn" style="height: 12rem;" />
                                                    <p class="badge bg-success position-absolute bottom-0 end-0 m-3">Pemerintahan</p>
                                                </div>
                                                <div class="card-body d-flex flex-column justify-content-between">
                                                    <p class="card-text d-none">Penyerahan Simbolis SK CPNS TA 2024 dan SK Purna Tugas ASN</p>
                                                    <a href="#" class="btn bg-success text-white d-block mx-auto mx-lg-0 text-center view-gallery-btn">Lihat Gambar</a>
                                                </div>
                                            </div>
                                        </div> -->
                </div>
            </div>

            <div id="myGalleryModal" class="gallery-modal">
                <div class="gallery-modal-content-wrapper">
                    <span class="close-btn">&times;</span>
                    <a class="prev-btn">&#10094;</a>
                    <a class="next-btn">&#10095;</a>
                    <img class="gallery-modal-content" id="modalImage">
                    <div id="caption"></div>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center">
                <div>
                    <p class="h4 fw-medium">
                        Video Terbaru<span class="text-custom-green">.</span>
                    </p>
                    <p class="text-muted">
                        Video terbaru dari Kabupaten Pasuruan
                    </p>
                </div>
                <button class="btn btn-custom-green align-self-start align-self-md-auto">
                    Semua Video Gallery
                </button>
            </div>

            <div class="row g-4 mt-2">
                <div class="col-md-12">
                    <div class="row g-0">
                        <!-- Kiri: video besar -->
                        <div class="col-6 col-md-8">
                            <div class="card h-100 shadow-sm border-0">
                                <div class="position-relative overflow-hidden h-100">
                                    <img src="https://www.pasuruankab.go.id/download-file/eyJpdiI6InY2MElpdXFQUmJMTmZGZVBuMHdhYmc9PSIsInZhbHVlIjoiM2NNdlM1d0RZaVIwald1NnBSUUNhZz09IiwibWFjIjoiMDYyZmExMmJhOTZkM2E0N2VhNzE2MDc5N2UxNjMwM2RhMzE4OThlNzlkYzQzOTRjNWNlNjUyMjhlODI2NjZhOCIsInRhZyI6IiJ9/posts/gambar_posts/berita"
                                        alt="news image" class="card-img-top object-fit-cover h-100"
                                        style="transition: transform 0.3s ease-in-out;" />

                                    <div
                                        class="position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-50
                        d-flex justify-content-center align-items-center">
                                        <a href="https://www.youtube.com/watch?v=eg9zjHG2UsU" data-lity
                                            class="btn btn-danger rounded-circle">
                                            <i class="bi bi-play-fill fs-3"></i>
                                        </a>
                                    </div>

                                    <p class="badge bg-success position-absolute bottom-0 end-0 m-3">
                                        Nasionalisme
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Kanan: 2 video kecil -->
                        <div class="col-6 col-md-4 d-flex flex-column">
                            <div class="card shadow-sm border-0 flex-fill">
                                <div class="position-relative overflow-hidden h-100">
                                    <img src="https://www.pasuruankab.go.id/download-file/eyJpdiI6InY2MElpdXFQUmJMTmZGZVBuMHdhYmc9PSIsInZhbHVlIjoiM2NNdlM1d0RZaVIwald1NnBSUUNhZz09IiwibWFjIjoiMDYyZmExMmJhOTZkM2E0N2VhNzE2MDc5N2UxNjMwM2RhMzE4OThlNzlkYzQzOTRjNWNlNjUyMjhlODI2NjZhOCIsInRhZyI6IiJ9/posts/gambar_posts/berita"
                                        alt="news image" class="card-img-top object-fit-cover h-100" />

                                    <div
                                        class="position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-50
                        d-flex justify-content-center align-items-center">
                                        <a href="https://www.youtube.com/watch?v=OPM49VOHuHk" data-lity
                                            class="btn btn-danger rounded-circle">
                                            <i class="bi bi-play-fill fs-3"></i>
                                        </a>
                                    </div>

                                    <p class="badge bg-success position-absolute bottom-0 end-0 m-3">
                                        Nasionalisme
                                    </p>
                                </div>
                            </div>

                            <div class="card shadow-sm border-0 flex-fill">
                                <div class="position-relative overflow-hidden h-100">
                                    <img src="https://www.pasuruankab.go.id/download-file/eyJpdiI6InY2MElpdXFQUmJMTmZGZVBuMHdhYmc9PSIsInZhbHVlIjoiM2NNdlM1d0RZaVIwald1NnBSUUNhZz09IiwibWFjIjoiMDYyZmExMmJhOTZkM2E0N2VhNzE2MDc5N2UxNjMwM2RhMzE4OThlNzlkYzQzOTRjNWNlNjUyMjhlODI2NjZhOCIsInRhZyI6IiJ9/posts/gambar_posts/berita"
                                        alt="news image" class="card-img-top object-fit-cover h-100" />

                                    <div
                                        class="position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-50
                        d-flex justify-content-center align-items-center">
                                        <a href="https://www.youtube.com/watch?v=M5vP8G0V-0E" data-lity
                                            class="btn btn-danger rounded-circle">
                                            <i class="bi bi-play-fill fs-3"></i>
                                        </a>
                                    </div>

                                    <p class="badge bg-success position-absolute bottom-0 end-0 m-3">
                                        Nasionalisme
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <div class="mt-5" id="sumber-daya">
            <div>
                <p class="h4 fw-medium">
                    Sumber Daya<span class="text-custom-green">.</span>
                </p>
                <p class="text-muted">
                    Kami menyediakan beberapa sumber daya yang memudahkan masyarakat
                    dalam mengakses informasi terkait termasuk unduhan, agenda acara,
                    majalah digital, dan informasi terbaru dari pemerintah kabupaten
                    pasuruan
                </p>
            </div>
            <div class="mt-4">
                <div class="row">
                    <div class="col-md-3">
                        <div class="custom-tab-nav" id="custom-tab-nav">
                            <button class="custom-tab-button active" data-target="v-pills-transparansi">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <rect width="18" height="11" x="3" y="11" rx="2" ry="2" />
                                    <path d="M7 11V7a5 5 0 0 1 10 0v4" />
                                </svg>
                                Transparansi
                            </button>
                            <button class="custom-tab-button" data-target="v-pills-download">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <rect width="18" height="11" x="3" y="11" rx="2" ry="2" />
                                    <path d="M7 11V7a5 5 0 0 1 10 0v4" />
                                </svg>
                                Download
                            </button>
                            <button class="custom-tab-button" data-target="v-pills-agenda">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <rect width="18" height="11" x="3" y="11" rx="2" ry="2" />
                                    <path d="M7 11V7a5 5 0 0 1 10 0v4" />
                                </svg>
                                Agenda
                            </button>
                            <button class="custom-tab-button" data-target="v-pills-majalah">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <rect width="18" height="11" x="3" y="11" rx="2" ry="2" />
                                    <path d="M7 11V7a5 5 0 0 1 10 0v4" />
                                </svg>
                                Majalah
                            </button>
                        </div>
                    </div>

                    <div class="col-md-9 border-start-md">
                        <div class="custom-tab-content" id="custom-tab-content">
                            <div class="custom-tab-pane active" id="v-pills-transparansi">
                                <div class="row">
                                    @foreach ($devData as $transparansi)
                                        <x-transparansi-card :transparansi="$transparansi" />
                                    @endforeach
                                </div>
                                <!-- <div class="d-flex flex-column h-100">
                                                    <div class="flex-grow-1">
                                                        <a href="#" class="d-block py-1 text-decoration-none text-dark hover-link">Ringkasan
                                                            APBD Tahun 2025</a>
                                                        <a href="#" class="d-block py-1 text-decoration-none text-dark hover-link">Ringkasan
                                                            APBD Tahun 2024</a>
                                                    </div>
                                                    <div class="text-end mt-4">
                                                        <a href="#" class="text-custom-green fw-semibold">Lihat
                                                            Semua...</a>
                                                    </div>
                                                </div> -->
                            </div>
                            <div class="custom-tab-pane" id="v-pills-download">
                                <div class="d-flex flex-column h-100">
                                    <div class="flex-grow-1">
                                        <a href="#"
                                            class="d-block py-1 text-decoration-none text-dark hover-link">Formulir
                                            Izin Mendirikan Bangunan</a>
                                        <a href="#"
                                            class="d-block py-1 text-decoration-none text-dark hover-link">Dokumen
                                            Standar Pelayanan Minimal</a>
                                    </div>
                                    <div class="text-end mt-4">
                                        <a href="#" class="text-custom-green fw-semibold">Lihat
                                            Semua...</a>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-tab-pane" id="v-pills-agenda">
                                Agenda Content...
                            </div>
                            <div class="custom-tab-pane" id="v-pills-majalah">
                                Majalah Content...
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>


        <div class="mt-5" id="sumber-daya">
            <div>
                <p class="h4 fw-medium">
                    Sumber Daya<span class="text-custom-green">.</span>
                </p>
                <p class="text-muted">
                    Kami menyediakan beberapa sumber daya yang memudahkan masyarakat
                    dalam mengakses informasi terkait termasuk unduhan, agenda acara,
                    majalah digital, dan informasi terbaru dari pemerintah kabupaten
                    pasuruan
                </p>
            </div>
            <div class="mt-4">
                <div class="row">
                    <div class="col-md-3">
                        <div class="custom-tab-nav" id="custom-tab-nav">
                            <button class="custom-tab-button active" data-target="v-pills-transparansi">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <rect width="18" height="11" x="3" y="11" rx="2" ry="2" />
                                    <path d="M7 11V7a5 5 0 0 1 10 0v4" />
                                </svg>
                                Transparansi
                            </button>
                            <button class="custom-tab-button" data-target="v-pills-download">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <rect width="18" height="11" x="3" y="11" rx="2" ry="2" />
                                    <path d="M7 11V7a5 5 0 0 1 10 0v4" />
                                </svg>
                                Download
                            </button>
                            <button class="custom-tab-button" data-target="v-pills-agenda">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <rect width="18" height="11" x="3" y="11" rx="2" ry="2" />
                                    <path d="M7 11V7a5 5 0 0 1 10 0v4" />
                                </svg>
                                Agenda
                            </button>
                            <button class="custom-tab-button" data-target="v-pills-majalah">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <rect width="18" height="11" x="3" y="11" rx="2" ry="2" />
                                    <path d="M7 11V7a5 5 0 0 1 10 0v4" />
                                </svg>
                                Majalah
                            </button>
                        </div>
                    </div>

                    <div class="col-md-9 border-start-md">
                        <div class="custom-tab-content" id="custom-tab-content">
                            <div class="custom-tab-pane active" id="v-pills-transparansi">
                                <div class="row">
                                    @foreach ($devData->take(4) as $transparansi)
                                        <x-transparansi-card-home :transparansi="$transparansi" />
                                    @endforeach
                                </div>
                                <div class="text-end mt-4">
                                    <a href="{{ url('sumber-daya/transparansi') }}"
                                        class="text-custom-green fw-semibold">Lihat
                                        Semua...</a>
                                </div>
                                <!-- <div class="d-flex flex-column h-100">
                                    <div class="flex-grow-1">
                                        <a href="#" class="d-block py-1 text-decoration-none text-dark hover-link">Ringkasan
                                            APBD Tahun 2025</a>
                                        <a href="#" class="d-block py-1 text-decoration-none text-dark hover-link">Ringkasan
                                            APBD Tahun 2024</a>
                                    </div>
                                    <div class="text-end mt-4">
                                        <a href="#" class="text-custom-green fw-semibold">Lihat
                                            Semua...</a>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <div class="custom-tab-pane" id="v-pills-download">
                            <div class="row">
                                @foreach ($devDownload->take(4) as $download)
                                    <x-download-card-home :title="$download->title" :extension="$download->extension" :url="$download->url" />
                                @endforeach
                            </div>
                            <div class="text-end mt-4">
                                <a href="{{ url('sumber-daya/download') }}" class="text-custom-green fw-semibold">Lihat
                                    Semua...</a>
                            </div>
                        </div>
                        <div class="custom-tab-pane" id="v-pills-agenda">
                            <div class="row">
                                @foreach ($devDataAgenda->take(3) as $agenda)
                                    <x-agenda-card-home :agenda="$agenda" />
                                @endforeach
                            </div>

                            <div class="text-end mt-4">
                                <a href="{{ url('sumber-daya/agenda') }}" class="text-custom-green fw-semibold">Lihat
                                    Semua...</a>
                            </div>
                        </div>

                        <div class="custom-tab-pane" id="v-pills-majalah">
                            <div class="row">
                                @foreach ($devDataMajalah->take(3) as $majalah)
                                    <x-majalah-card-home :majalah="$majalah" />
                                @endforeach
                            </div>

                            <div class="text-end mt-4">
                                <a href="{{ url('sumber-daya/majalah') }}" class="text-custom-green fw-semibold">Lihat
                                    Semua...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lity/2.4.1/lity.min.js"></script>
    <script>
        // Swiper initialization - page-specific for index
        const bannerSwiper = new Swiper('.banner-swiper', {
            direction: 'horizontal',
            loop: true,
            speed: 1000,
            autoplay: {
                delay: 2000,
            },
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
        });

        var swiper = new Swiper(".app-swiper", {
            slidesPerView: 3,
            spaceBetween: 20,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            breakpoints: {
                320: {
                    slidesPerView: 1
                },
                768: {
                    slidesPerView: 2
                },
                1024: {
                    slidesPerView: 3
                },
            }
        });

        // Custom tab functionality - page-specific for index
        document.addEventListener('DOMContentLoaded', function() {
            const tabButtons = document.querySelectorAll('.custom-tab-button');
            const tabPanes = document.querySelectorAll('.custom-tab-pane');

            tabButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const targetId = this.getAttribute('data-target');

                    // Remove active class from all buttons
                    tabButtons.forEach(btn => btn.classList.remove('active'));

                    // Add active class to clicked button
                    this.classList.add('active');

                    // Hide all tab panes
                    tabPanes.forEach(pane => pane.classList.remove('active'));

                    // Show target tab pane
                    const targetPane = document.getElementById(targetId);
                    if (targetPane) {
                        targetPane.classList.add('active');
                    }
                });
            });
        });

        const $modal = $('#myGalleryModal');
        const $modalImg = $('#modalImage');
        const $captionText = $('#caption');
        const galleryItems = [];
        let currentIndex = 0;

        // Loop tiap card (bukan tiap tombol/gambar)
        $('.card-gallery').each(function(index) {
            const $card = $(this);
            const src = $card.find('img').attr('src');
            const caption = $card.find('.card-text').text();

            // simpan data galeri
            galleryItems.push({
                src,
                caption
            });

            // pasang handler di gambar
            $card.find('img').on('click', function(e) {
                e.preventDefault();
                currentIndex = index;
                openModal();
            });

            // pasang handler di tombol
            $card.find('.view-gallery-btn').on('click', function(e) {
                e.preventDefault();
                currentIndex = index;
                openModal();
            });
        });

        function updateModalContent() {
            if (galleryItems[currentIndex]) {
                $modalImg.attr('src', galleryItems[currentIndex].src);
                $captionText.text(galleryItems[currentIndex].caption);
            }
        }

        function openModal() {
            updateModalContent();
            $modal.fadeIn();
        }

        function closeModal() {
            $modal.fadeOut();
        }

        function changeImage(direction) {
            currentIndex += direction;
            if (currentIndex >= galleryItems.length) currentIndex = 0;
            if (currentIndex < 0) currentIndex = galleryItems.length - 1;
            updateModalContent();
        }

        // tombol di modal
        $('.close-btn').on('click', function(e) {
            e.stopPropagation();
            closeModal();
        });
        $('.prev-btn').on('click', function(e) {
            e.stopPropagation();
            changeImage(-1);
        });
        $('.next-btn').on('click', function(e) {
            e.stopPropagation();
            changeImage(1);
        });

        // klik overlay
        $modal.on('click', function(e) {
            if ($(e.target).is($modal)) {
                closeModal();
            }
        });

        // keyboard nav
        $(document).on('keydown', function(e) {
            if ($modal.is(':visible')) {
                if (e.key === 'ArrowLeft') changeImage(-1);
                if (e.key === 'ArrowRight') changeImage(1);
                if (e.key === 'Escape') closeModal();
            }
        });
    </script>
@endpush
