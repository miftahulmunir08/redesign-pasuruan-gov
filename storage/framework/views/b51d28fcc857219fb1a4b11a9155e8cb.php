<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kab. Pasuruan</title>

    <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss', 'resources/js/app.js']); ?>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <?php echo $__env->yieldPushContent('styles'); ?>
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

        .search-bar-margin {
            margin-top: 2rem !important;
        }

        @media (min-width: 768px) {
            .search-bar-margin {
                margin-top: -2rem !important;
            }
        }

        .layanan-card {
            display: flex;
            flex-direction: column;
            justify-content: center;
            min-height: 80px;
            height: 100%;
            word-break: break-word;
        }

        @media (min-width: 768px) {
            .layanan-card {
                flex-direction: row;
                align-items: center;
            }
        }

        .swiper-pagination {
            margin-top: 20px;
            /* jarak dari card ke pagination */
            position: relative;
            /* biar ngikut flow normal */

        }
    </style>
</head>

<body>
    <header>
        <?php if (isset($component)) { $__componentOriginala70429be12c0ed20dabf9047149c24ec = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala70429be12c0ed20dabf9047149c24ec = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.web-info','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('web-info'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala70429be12c0ed20dabf9047149c24ec)): ?>
<?php $attributes = $__attributesOriginala70429be12c0ed20dabf9047149c24ec; ?>
<?php unset($__attributesOriginala70429be12c0ed20dabf9047149c24ec); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala70429be12c0ed20dabf9047149c24ec)): ?>
<?php $component = $__componentOriginala70429be12c0ed20dabf9047149c24ec; ?>
<?php unset($__componentOriginala70429be12c0ed20dabf9047149c24ec); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal2489997eb8eea5e3fc9fb859cd403c90 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2489997eb8eea5e3fc9fb859cd403c90 = $attributes; } ?>
<?php $component = App\View\Components\DesktopNavigation::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('desktop-navigation'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\DesktopNavigation::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2489997eb8eea5e3fc9fb859cd403c90)): ?>
<?php $attributes = $__attributesOriginal2489997eb8eea5e3fc9fb859cd403c90; ?>
<?php unset($__attributesOriginal2489997eb8eea5e3fc9fb859cd403c90); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2489997eb8eea5e3fc9fb859cd403c90)): ?>
<?php $component = $__componentOriginal2489997eb8eea5e3fc9fb859cd403c90; ?>
<?php unset($__componentOriginal2489997eb8eea5e3fc9fb859cd403c90); ?>
<?php endif; ?>
    </header>

        <section id="hero-section" class="swiper banner-swiper">
            <div class="swiper-wrapper">
                <?php $__currentLoopData = $devBannerUtama; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="position-relative w-100 swiper-slide"
                        style="height: 90vh; min-height: 400px; width: 100%;">
                        <img src="<?php echo e(asset($banner->thumbnail)); ?>" alt="<?php echo e($banner->nama_banner); ?>"
                            class="w-100 object-fit-cover position-relative"
                            style="height: 100%; max-height: 100%; transform: scale(1.02)" />
                        <div class="position-absolute top-0 start-0 w-100 h-100"
                            style="background: rgba(0, 0, 0, 0.2); pointer-events: none;"></div>
                        <div class="position-absolute bottom-0 start-0 end-0 text-white mb-4 mb-md-5">
                            <div class="container-fluid d-flex flex-column flex-md-row justify-content-between align-items-md-end"
                                style="max-width: 91.6%;">
                                <div class="mb-4 mb-md-0 mr-md-1">
                                    <h1 class="display-4 fw-bold"><?php echo e($banner->nama_banner); ?></h1>
                                    <h2 class="h5">
                                        <?php echo e($devVisi); ?>

                                    </h2>
                                </div>
                                <button
                                    class="btn btn-light d-flex flex-row align-items-center align-self-start btn-video-effect text-dark my-auto">
                                    <span class="btn-background"></span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="me-2"
                                        style="width: 20px; height: 20px; position: relative; z-index: 1;">
                                        <path
                                            d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17" />
                                        <path d="m10 15 5-3-5-3z" />
                                    </svg>
                                    <span class="fw-semibold" style="position: relative; z-index: 1;">Video</span>
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </section>

    <main class="container-fluid position-relative" style="max-width: 91.6%; padding-bottom: 4rem;">
        <div class="bg-white border-md-0 rounded shadow-sm p-3 position-relative z-2 search-bar-margin" style="">
            <div class="input-group">
                <input name="search" type="search" placeholder="Keyword pencarian" class="form-control" />
                <button class="btn btn-custom-green d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="me-sm-1">
                        <path d="m21 21-4.34-4.34" />
                        <circle cx="11" cy="11" r="8" />
                    </svg>
                    <span class="d-none d-sm-inline">Cari</span>
                </button>
            </div>
        </div>

            <div class="mt-4">
                <p class="h4 fw-medium ">
                    Sumber daya<span class="text-custom-green">.</span>
                </p>
                <div class="row g-4">
                    <?php $__currentLoopData = $devSumberDaya; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sumberDaya): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-12 col-sm-6 col-md-3">
                            <a href="<?php echo e($sumberDaya->url); ?>" class="text-decoration-none text-dark">
                                <div class="card h-100 shadow-sm border-0 card-hover-scale">
                                    <img src="<?php echo e($sumberDaya->imageUrl); ?>" alt="<?php echo e($sumberDaya->name); ?>"
                                        class="card-img-top object-fit-cover" style="height: 8rem" />
                                    <div class="card-body text-center bg-white">
                                        <p class="card-text"><?php echo e($sumberDaya->name); ?></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

        <div class="mt-5">
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
                    <?php $__currentLoopData = $devAplikasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $app): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="swiper-slide">
                        <?php if (isset($component)) { $__componentOriginal593082f5d9bbe85e64b8909ad2db569b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal593082f5d9bbe85e64b8909ad2db569b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app-card','data' => ['jenisAplikasi' => $app->jenis_aplikasi,'idAplikasi' => $app->id_aplikasi,'urlAplikasi' => $app->url_aplikasi,'namaAplikasi' => $app->nama_aplikasi,'deskripsiAplikasi' => $app->deskripsi_aplikasi,'gambarAplikasi' => $app->gambar_aplikasi]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['jenisAplikasi' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($app->jenis_aplikasi),'idAplikasi' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($app->id_aplikasi),'urlAplikasi' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($app->url_aplikasi),'namaAplikasi' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($app->nama_aplikasi),'deskripsiAplikasi' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($app->deskripsi_aplikasi),'gambarAplikasi' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($app->gambar_aplikasi)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal593082f5d9bbe85e64b8909ad2db569b)): ?>
<?php $attributes = $__attributesOriginal593082f5d9bbe85e64b8909ad2db569b; ?>
<?php unset($__attributesOriginal593082f5d9bbe85e64b8909ad2db569b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal593082f5d9bbe85e64b8909ad2db569b)): ?>
<?php $component = $__componentOriginal593082f5d9bbe85e64b8909ad2db569b; ?>
<?php unset($__componentOriginal593082f5d9bbe85e64b8909ad2db569b); ?>
<?php endif; ?>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                <!-- Pagination -->
                <div class="swiper-pagination" style=""></div>
            </div>
        </div>

        <div class="mt-5">
            <p class="h4 fw-medium">
                Layanan<span class="text-custom-green">.</span>
            </p>
            <div id="layanan-section" class="mt-3">
                <?php $__currentLoopData = $devLayanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tipeLayanan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="mb-4">
                    <p class="fw-semibold text-custom-green fs-5 mb-2"><?php echo e($tipeLayanan->text); ?></p>
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
                        <?php $__currentLoopData = $tipeLayanan->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $layanan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col">
                            <a href="<?php echo e($layanan->url); ?>" class="layanan-card d-flex flex-column flex-md-row align-items-md-center gap-3 p-3 border rounded shadow-sm card-hover-scale text-decoration-none text-dark" style="transition: box-shadow 0.3s, border-color 0.3s; min-height: 80px;" target="_blank">
                                <span class="d-flex align-items-center justify-content-center flex-shrink-0" style="width: 40px; height: 40px;">
                                    <?php if($tipeLayanan->text == 'Kependudukan'): ?>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#E43434" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                        <path d="M16 3.128a4 4 0 0 1 0 7.744" />
                                        <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                        <circle cx="9" cy="7" r="4" />
                                    </svg>
                                    <?php elseif($tipeLayanan->text == 'Perhubungan'): ?>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#E43434" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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
                                    <?php elseif($tipeLayanan->text == 'Informasi & Komunikasi'): ?>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#E43434" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="10" />
                                        <path d="M12 16v-4" />
                                        <path d="M12 8h.01" />
                                    </svg>
                                    <?php elseif($tipeLayanan->text == 'UMUM/PERIJINAN'): ?>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#E43434" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5" />
                                        <path d="M9 18h6" />
                                        <path d="M10 22h4" />
                                    </svg>
                                    <?php endif; ?>
                                </span>
                                <span class="flex-grow-1 d-flex align-items-center">
                                    <p class="mb-0 fs-6 fw-semibold text-dark text-wrap" style="word-break: break-word; white-space: normal;">
                                        <?php echo e($layanan->text); ?>

                                    </p>
                                </span>
                            </a>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>

        <div class="mt-5">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center">
                <div>
                    <p class="h4 fw-medium">
                        Berita Terbaru<span class="text-custom-green">.</span>
                    </p>
                    <p class="text-muted">
                        Berita terbaru dari Kabupaten Pasuruan
                    </p>
                </div>
                <button class="btn btn-custom-green align-self-start align-self-md-auto">
                    Semua Berita
                </button>
            </div>
            <div class="row g-4 mt-2">
                <div class="col-md-8">
                    <div class="row g-4">
                        <div class="col-sm-6">
                            <div class="card h-100 shadow-sm border-0">
                                <div class="position-relative overflow-hidden">
                                    <img src="https://www.pasuruankab.go.id/download-file/eyJpdiI6InY2MElpdXFQUmJMTmZGZVBuMHdhYmc9PSIsInZhbHVlIjoiM2NNdlM1d0RZaVIwald1NnBSUUNhZz09IiwibWFjIjoiMDYyZmExMmJhOTZkM2E0N2VhNzE2MDc5N2UxNjMwM2RhMzE4OThlNzlkYzQzOTRjNWNlNjUyMjhlODI2NjZhOCIsInRhZyI6IiJ9/posts/gambar_posts/berita" alt="news image" class="card-img-top object-fit-cover img-hover-scale" style="height: 12rem; transition: transform 0.3s ease-in-out;" />
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
                        <div class="col-sm-6">
                            <div class="card h-100 shadow-sm border-0">
                                <div class="position-relative overflow-hidden">
                                    <img src="https://www.pasuruankab.go.id/download-file/eyJpdiI6InY2MElpdXFQUmJMTmZGZVBuMHdhYmc9PSIsInZhbHVlIjoiM2NNdlM1d0RZaVIwald1NnBSUUNhZz09IiwibWFjIjoiMDYyZmExMmJhOTZkM2E0N2VhNzE2MDc5N2UxNjMwM2RhMzE4OThlNzlkYzQzOTRjNWNlNjUyMjhlODI2NjZhOCIsInRhZyI6IiJ9/posts/gambar_posts/berita" alt="news image" class="card-img-top object-fit-cover img-hover-scale" style="height: 12rem; transition: transform 0.3s ease-in-out;" />
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
                        <div class="col-sm-6">
                            <div class="card h-100 shadow-sm border-0">
                                <div class="position-relative overflow-hidden">
                                    <img src="https://www.pasuruankab.go.id/download-file/eyJpdiI6InY2MElpdXFQUmJMTmZGZVBuMHdhYmc9PSIsInZhbHVlIjoiM2NNdlM1d0RZaVIwald1NnBSUUNhZz09IiwibWFjIjoiMDYyZmExMmJhOTZkM2E0N2VhNzE2MDc5N2UxNjMwM2RhMzE4OThlNzlkYzQzOTRjNWNlNjUyMjhlODI2NjZhOCIsInRhZyI6IiJ9/posts/gambar_posts/berita" alt="news image" class="card-img-top object-fit-cover img-hover-scale" style="height: 12rem; transition: transform 0.3s ease-in-out;" />
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
                        <div class="col-sm-6">
                            <div class="card h-100 shadow-sm border-0">
                                <div class="position-relative overflow-hidden">
                                    <img src="https://www.pasuruankab.go.id/download-file/eyJpdiI6InY2MElpdXFQUmJMTmZGZVBuMHdhYmc9PSIsInZhbHVlIjoiM2NNdlM1d0RZaVIwald1NnBSUUNhZz09IiwibWFjIjoiMDYyZmExMmJhOTZkM2E0N2VhNzE2MDc5N2UxNjMwM2RhMzE4OThlNzlkYzQzOTRjNWNlNjUyMjhlODI2NjZhOCIsInRhZyI6IiJ9/posts/gambar_posts/berita" alt="news image" class="card-img-top object-fit-cover img-hover-scale" style="height: 12rem; transition: transform 0.3s ease-in-out;" />
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
                </div>

                <div class="col-md-4">
                    <div class="bg-secondary-subtle h-100 rounded d-flex align-items-center justify-content-center" style="min-height: 24rem;">
                        Widget
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
            <div class="card mt-4 shadow-sm border-0">
                <div class="card-body p-4 p-md-5">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <button class="nav-link active text-start d-flex align-items-center gap-3" id="v-pills-transparansi-tab" data-bs-toggle="pill" data-bs-target="#v-pills-transparansi" type="button" role="tab" aria-controls="v-pills-transparansi" aria-selected="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <rect width="18" height="11" x="3" y="11" rx="2" ry="2" />
                                        <path d="M7 11V7a5 5 0 0 1 10 0v4" />
                                    </svg>
                                    Transparansi
                                </button>
                                <button class="nav-link text-start d-flex align-items-center gap-3" id="v-pills-download-tab" data-bs-toggle="pill" data-bs-target="#v-pills-download" type="button" role="tab" aria-controls="v-pills-download" aria-selected="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <rect width="18" height="11" x="3" y="11" rx="2" ry="2" />
                                        <path d="M7 11V7a5 5 0 0 1 10 0v4" />
                                    </svg>
                                    Download
                                </button>
                                <button class="nav-link text-start d-flex align-items-center gap-3" id="v-pills-agenda-tab" data-bs-toggle="pill" data-bs-target="#v-pills-agenda" type="button" role="tab" aria-controls="v-pills-agenda" aria-selected="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <rect width="18" height="11" x="3" y="11" rx="2" ry="2" />
                                        <path d="M7 11V7a5 5 0 0 1 10 0v4" />
                                    </svg>
                                    Agenda
                                </button>
                                <button class="nav-link text-start d-flex align-items-center gap-3" id="v-pills-majalah-tab" data-bs-toggle="pill" data-bs-target="#v-pills-majalah" type="button" role="tab" aria-controls="v-pills-majalah" aria-selected="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <rect width="18" height="11" x="3" y="11" rx="2" ry="2" />
                                        <path d="M7 11V7a5 5 0 0 1 10 0v4" />
                                    </svg>
                                    Majalah
                                </button>
                            </div>
                        </div>

                        <div class="col-md-9 border-start-md">
                            <div class="tab-content pt-4 pt-md-0" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-transparansi" role="tabpanel" aria-labelledby="v-pills-transparansi-tab" tabindex="0">
                                    <div class="d-flex flex-column h-100">
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
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-download" role="tabpanel" aria-labelledby="v-pills-download-tab" tabindex="0">
                                    <div class="d-flex flex-column h-100">
                                        <div class="flex-grow-1">
                                            <a href="#" class="d-block py-1 text-decoration-none text-dark hover-link">Formulir
                                                Izin Mendirikan Bangunan</a>
                                            <a href="#" class="d-block py-1 text-decoration-none text-dark hover-link">Dokumen
                                                Standar Pelayanan Minimal</a>
                                        </div>
                                        <div class="text-end mt-4">
                                            <a href="#" class="text-custom-green fw-semibold">Lihat
                                                Semua...</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-agenda" role="tabpanel" aria-labelledby="v-pills-agenda-tab" tabindex="0">Agenda Content...</div>
                                <div class="tab-pane fade" id="v-pills-majalah" role="tabpanel" aria-labelledby="v-pills-majalah-tab" tabindex="0">Majalah Content...</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php if (isset($component)) { $__componentOriginalf4656f7a545c03a7e7395ae6755cd55a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf4656f7a545c03a7e7395ae6755cd55a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navbottom','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('navbottom'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf4656f7a545c03a7e7395ae6755cd55a)): ?>
<?php $attributes = $__attributesOriginalf4656f7a545c03a7e7395ae6755cd55a; ?>
<?php unset($__attributesOriginalf4656f7a545c03a7e7395ae6755cd55a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf4656f7a545c03a7e7395ae6755cd55a)): ?>
<?php $component = $__componentOriginalf4656f7a545c03a7e7395ae6755cd55a; ?>
<?php unset($__componentOriginalf4656f7a545c03a7e7395ae6755cd55a); ?>
<?php endif; ?>


    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
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
    </script>
    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>

</html>


<?php if (isset($component)) { $__componentOriginal391633768592254ff49abdaadf69e71c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal391633768592254ff49abdaadf69e71c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.footer2','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('footer2'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal391633768592254ff49abdaadf69e71c)): ?>
<?php $attributes = $__attributesOriginal391633768592254ff49abdaadf69e71c; ?>
<?php unset($__attributesOriginal391633768592254ff49abdaadf69e71c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal391633768592254ff49abdaadf69e71c)): ?>
<?php $component = $__componentOriginal391633768592254ff49abdaadf69e71c; ?>
<?php unset($__componentOriginal391633768592254ff49abdaadf69e71c); ?>
<?php endif; ?><?php /**PATH C:\Users\User\Downloads\folder\pasuruan\pasuruan gov\resources\views/homepage/index.blade.php ENDPATH**/ ?>