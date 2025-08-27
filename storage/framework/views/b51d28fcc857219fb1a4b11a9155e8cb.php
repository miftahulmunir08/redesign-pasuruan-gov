
<?php $__env->startPush('styles'); ?>
<style>
    .profile-card {
        border: 1px solid #e0e0e0;
        border-radius: 1rem;
        overflow: hidden;
        transition: border-color 0.3s ease, transform 0.3s ease;
    }

    .profile-card:hover {
        transform: translateY(-5px);
        border: 2px solid;
        border-color: #0B7642;
    }

    .profile-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center top;
    }

    @media (max-width: 767.98px) {
        .profile-img {
            height: 350px;
        }
    }

    .profile-body {
        padding: 2rem;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    @media (max-width: 767.98px) {
        .profile-body {
            text-align: center;
        }
    }

    .profile-subtitle {
        font-weight: 600;
        color: #0B7642;
        margin-bottom: 0.5rem;
    }

    .profile-title {
        font-weight: 700;
        margin-bottom: 0;
    }

    .profile-divider {
        color: #03D26F;
        border-width: 2px;
        opacity: 1;
        margin: 1.5rem 0;
        width: 150px;
        transition: width 0.3s ease-in-out;
    }

    .profile-card:hover .profile-divider {
        width: 100%;
    }

    @media (max-width: 768px) {
        .profile-divider {
            margin-left: auto;
            margin-right: auto;
        }
    }

    .profile-action {
        margin-top: auto;
    }

    .profile-action .btn {
        transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out, background-color 0.2s ease;
    }

    .profile-action .btn:hover {
        transform: translateY(-4px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    .profile-action .btn:active {
        transform: translateY(-1px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

<section style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('https://www.wartabromo.com/wp-content/uploads/2023/03/IMG-20230308-WA0043.jpg'); height: clamp(240px, 50vh, 480px); background-position: center; position: relative; background-size: cover;" class="d-flex align-items-center justify-content-center">
    <div class="d-flex flex-column justify-content-center align-items-center">
        <h1 style="color: white;
                   font-weight: bold;
                   margin-bottom: 8px;
                   padding: 0" class="fs-1">
            <?php echo e($devTitle); ?>

        </h1>
        <?php if (isset($component)) { $__componentOriginale19f62b34dfe0bfdf95075badcb45bc2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale19f62b34dfe0bfdf95075badcb45bc2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.breadcrumb','data' => ['items' => $breadcrumbs]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('breadcrumb'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['items' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($breadcrumbs)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale19f62b34dfe0bfdf95075badcb45bc2)): ?>
<?php $attributes = $__attributesOriginale19f62b34dfe0bfdf95075badcb45bc2; ?>
<?php unset($__attributesOriginale19f62b34dfe0bfdf95075badcb45bc2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale19f62b34dfe0bfdf95075badcb45bc2)): ?>
<?php $component = $__componentOriginale19f62b34dfe0bfdf95075badcb45bc2; ?>
<?php unset($__componentOriginale19f62b34dfe0bfdf95075badcb45bc2); ?>
<?php endif; ?>
    </div>
</section>
<?php $__env->stopSection(); ?>

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

        <section id="hero-section">
            <div class="position-relative w-100">
                <img src="<?php echo e(asset('storage/uploads/hero_section/202409_209-66d95f4f2b0ac.jpg')); ?>"
                    alt="Kaliandra resort" class="w-100 object-fit-cover" style="max-height: 100vh" />
                <div class="position-absolute bottom-0 start-0 end-0 text-white mb-4 mb-md-5">
                    <div class="container-fluid d-flex flex-column flex-md-row justify-content-between align-items-md-end"
                        style="max-width: 91.6%;">
                        <div class="mb-4 mb-md-0">
                            <h1 class="display-4 fw-bold">Kaliandra</h1>
                            <h2 class="h5">
                                Kabupaten Pasuruan yang Maju, Sejahtera dan Berkeadilan.
                            </h2>
                        </div>
                        <button
                            class="btn btn-light d-flex flex-row align-items-center align-self-start btn-video-effect text-dark">
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
        </section>

        <main class="container-fluid" style="max-width: 91.6%; position: relative; padding-bottom: 4rem;">
            <div class="bg-white border-md-0 rounded-lg shadow p-3 position-relative z-2" style="margin-top: -2rem">
                <div class="input-group">
                    <input name="search" type="search" placeholder="Keyword pencarian" class="form-control" />
                    <button class="btn btn-custom-green d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="me-sm-1">
                            <path d="m21 21-4.34-4.34" />
                            <circle cx="11" cy="11" r="8" />
                        </svg>
                        <span class="d-none d-sm-inline">Cari</span>
                    </button>
                </div>
            </div>

            <div class="mt-5">
                <p class="h4 fw-medium">
                    Sumber daya<span class="text-custom-green">.</span>
                </p>
                <div class="row g-4 mt-2">
                    <div class="col-12 col-sm-6 col-md-3">
                        <a href="#sumber-daya" class="text-decoration-none text-dark">
                            <div class="card h-100 shadow-sm border-0 card-hover-scale">
                                <img src="https://bappeda.bulelengkab.go.id/uploads/konten/49_rapat-koordinasi-persiapan-pelaksanaan-musrenbang-rkpd-di-kecamatan-tahun-2024-untuk-penyusunan-rencana-kerja-pemerintah-daerah-rkpd-kabupaten-buleleng-tahun-2025.jpg"
                                    alt="rapat kerja pemda" class="card-img-top object-fit-cover"
                                    style="height: 8rem" />
                                <div class="card-body text-center">
                                    <p class="card-text">Transparansi</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <a href="#sumber-daya" class="text-decoration-none text-dark">
                            <div class="card h-100 shadow-sm border-0 card-hover-scale">
                                <img src="https://bappeda.bulelengkab.go.id/uploads/konten/49_rapat-koordinasi-persiapan-pelaksanaan-musrenbang-rkpd-di-kecamatan-tahun-2024-untuk-penyusunan-rencana-kerja-pemerintah-daerah-rkpd-kabupaten-buleleng-tahun-2025.jpg"
                                    alt="rapat kerja pemda" class="card-img-top object-fit-cover"
                                    style="height: 8rem" />
                                <div class="card-body text-center">
                                    <p class="card-text">Download</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="card h-100 shadow-sm border-0 card-hover-scale" style="cursor: pointer;">
                            <img src="https://bappeda.bulelengkab.go.id/uploads/konten/49_rapat-koordinasi-persiapan-pelaksanaan-musrenbang-rkpd-di-kecamatan-tahun-2024-untuk-penyusunan-rencana-kerja-pemerintah-daerah-rkpd-kabupaten-buleleng-tahun-2025.jpg"
                                alt="rapat kerja pemda" class="card-img-top object-fit-cover" style="height: 8rem" />
                            <div class="card-body text-center">
                                <p class="card-text">Agenda</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="card h-100 shadow-sm border-0 card-hover-scale" style="cursor: pointer;">
                            <img src="https://bappeda.bulelengkab.go.id/uploads/konten/49_rapat-koordinasi-persiapan-pelaksanaan-musrenbang-rkpd-di-kecamatan-tahun-2024-untuk-penyusunan-rencana-kerja-pemerintah-daerah-rkpd-kabupaten-buleleng-tahun-2025.jpg"
                                alt="rapat kerja pemda" class="card-img-top object-fit-cover" style="height: 8rem" />
                            <div class="card-body text-center">
                                <p class="card-text">Majalah</p>
                            </div>
                        </div>
                    </div>
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

                <div id="layananCarousel" class="carousel slide mt-4" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#layananCarousel" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#layananCarousel" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row g-4">
                                <div class="col-md-3 col-sm-6">
                                    <div class="card">
                                        <div class="card-body">Layanan 1</div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="card">
                                        <div class="card-body">Layanan 2</div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="card">
                                        <div class="card-body">Layanan 3</div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="card">
                                        <div class="card-body">Layanan 4</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row g-4">
                                <div class="col-md-3 col-sm-6">
                                    <div class="card">
                                        <div class="card-body">Layanan 5</div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="card">
                                        <div class="card-body">Layanan 6</div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="card">
                                        <div class="card-body">Layanan 7</div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="card">
                                        <div class="card-body">Layanan 8</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5">
                <p class="h4 fw-medium">
                    Layanan<span class="text-custom-green">.</span>
                </p>
                <div id="layanan-section" class="mt-3">
                    <p class="text-muted">Layanan content will be loaded here.</p>
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
                                        <img src="https://www.pasuruankab.go.id/download-file/eyJpdiI6InY2MElpdXFQUmJMTmZGZVBuMHdhYmc9PSIsInZhbHVlIjoiM2NNdlM1d0RZaVIwald1NnBSUUNhZz09IiwibWFjIjoiMDYyZmExMmJhOTZkM2E0N2VhNzE2MDc5N2UxNjMwM2RhMzE4OThlNzlkYzQzOTRjNWNlNjUyMjhlODI2NjZhOCIsInRhZyI6IiJ9/posts/gambar_posts/berita"
                                            alt="news image" class="card-img-top object-fit-cover img-hover-scale"
                                            style="height: 12rem; transition: transform 0.3s ease-in-out;" />
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
                                        <img src="https://www.pasuruankab.go.id/download-file/eyJpdiI6InY2MElpdXFQUmJMTmZGZVBuMHdhYmc9PSIsInZhbHVlIjoiM2NNdlM1d0RZaVIwald1NnBSUUNhZz09IiwibWFjIjoiMDYyZmExMmJhOTZkM2E0N2VhNzE2MDc5N2UxNjMwM2RhMzE4OThlNzlkYzQzOTRjNWNlNjUyMjhlODI2NjZhOCIsInRhZyI6IiJ9/posts/gambar_posts/berita"
                                            alt="news image" class="card-img-top object-fit-cover img-hover-scale"
                                            style="height: 12rem; transition: transform 0.3s ease-in-out;" />
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
                                        <img src="https://www.pasuruankab.go.id/download-file/eyJpdiI6InY2MElpdXFQUmJMTmZGZVBuMHdhYmc9PSIsInZhbHVlIjoiM2NNdlM1d0RZaVIwald1NnBSUUNhZz09IiwibWFjIjoiMDYyZmExMmJhOTZkM2E0N2VhNzE2MDc5N2UxNjMwM2RhMzE4OThlNzlkYzQzOTRjNWNlNjUyMjhlODI2NjZhOCIsInRhZyI6IiJ9/posts/gambar_posts/berita"
                                            alt="news image" class="card-img-top object-fit-cover img-hover-scale"
                                            style="height: 12rem; transition: transform 0.3s ease-in-out;" />
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
                                        <img src="https://www.pasuruankab.go.id/download-file/eyJpdiI6InY2MElpdXFQUmJMTmZGZVBuMHdhYmc9PSIsInZhbHVlIjoiM2NNdlM1d0RZaVIwald1NnBSUUNhZz09IiwibWFjIjoiMDYyZmExMmJhOTZkM2E0N2VhNzE2MDc5N2UxNjMwM2RhMzE4OThlNzlkYzQzOTRjNWNlNjUyMjhlODI2NjZhOCIsInRhZyI6IiJ9/posts/gambar_posts/berita"
                                            alt="news image" class="card-img-top object-fit-cover img-hover-scale"
                                            style="height: 12rem; transition: transform 0.3s ease-in-out;" />
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
                        <div class="bg-secondary-subtle h-100 rounded d-flex align-items-center justify-content-center"
                            style="min-height: 24rem;">
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
                                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                                    aria-orientation="vertical">
                                    <button class="nav-link active text-start d-flex align-items-center gap-3"
                                        id="v-pills-transparansi-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-transparansi" type="button" role="tab"
                                        aria-controls="v-pills-transparansi" aria-selected="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <rect width="18" height="11" x="3" y="11" rx="2"
                                                ry="2" />
                                            <path d="M7 11V7a5 5 0 0 1 10 0v4" />
                                        </svg>
                                        Transparansi
                                    </button>
                                    <button class="nav-link text-start d-flex align-items-center gap-3"
                                        id="v-pills-download-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-download" type="button" role="tab"
                                        aria-controls="v-pills-download" aria-selected="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <rect width="18" height="11" x="3" y="11" rx="2"
                                                ry="2" />
                                            <path d="M7 11V7a5 5 0 0 1 10 0v4" />
                                        </svg>
                                        Download
                                    </button>
                                    <button class="nav-link text-start d-flex align-items-center gap-3"
                                        id="v-pills-agenda-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-agenda" type="button" role="tab"
                                        aria-controls="v-pills-agenda" aria-selected="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <rect width="18" height="11" x="3" y="11" rx="2"
                                                ry="2" />
                                            <path d="M7 11V7a5 5 0 0 1 10 0v4" />
                                        </svg>
                                        Agenda
                                    </button>
                                    <button class="nav-link text-start d-flex align-items-center gap-3"
                                        id="v-pills-majalah-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-majalah" type="button" role="tab"
                                        aria-controls="v-pills-majalah" aria-selected="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <rect width="18" height="11" x="3" y="11" rx="2"
                                                ry="2" />
                                            <path d="M7 11V7a5 5 0 0 1 10 0v4" />
                                        </svg>
                                        Majalah
                                    </button>
                                </div>
                            </div>

                            <div class="col-md-9 border-start-md">
                                <div class="tab-content pt-4 pt-md-0" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-transparansi" role="tabpanel"
                                        aria-labelledby="v-pills-transparansi-tab" tabindex="0">
                                        <div class="d-flex flex-column h-100">
                                            <div class="flex-grow-1">
                                                <a href="#"
                                                    class="d-block py-1 text-decoration-none text-dark hover-link">Ringkasan
                                                    APBD Tahun 2025</a>
                                                <a href="#"
                                                    class="d-block py-1 text-decoration-none text-dark hover-link">Ringkasan
                                                    APBD Tahun 2024</a>
                                            </div>
                                            <div class="text-end mt-4">
                                                <a href="#" class="text-custom-green fw-semibold">Lihat
                                                    Semua...</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-download" role="tabpanel"
                                        aria-labelledby="v-pills-download-tab" tabindex="0">
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
                                    <div class="tab-pane fade" id="v-pills-agenda" role="tabpanel"
                                        aria-labelledby="v-pills-agenda-tab" tabindex="0">Agenda Content...</div>
                                    <div class="tab-pane fade" id="v-pills-majalah" role="tabpanel"
                                        aria-labelledby="v-pills-majalah-tab" tabindex="0">Majalah Content...</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>

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