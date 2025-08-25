<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss', 'resources/js/app.js']); ?>

        <!-- Swiper CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

        <style>

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

        
        <section class="hero-swiper swiper">
            <div class="swiper-wrapper">
                <?php $__currentLoopData = $devBannerUtama; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="swiper-slide hero-slide"
                        style="background-image: url('<?php echo e($banner['background_image_url']); ?>');">
                        <div class="hero-overlay"></div>
                        <div class="hero-content">
                            <div style="display: flex; flex-direction:column">
                                <h1><?php echo e($banner['nama_banner']); ?></h1>
                                <h6><?php echo e($visi); ?></h6>
                            </div>
                            <a class="hero-video-btn" onclick="bukaModalVideo('<?php echo e($banner['url_youtube']); ?>')"
                                id="popup-youtube">
                                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M21.7 8.037a4.26 4.26 0 0 0-.789-1.964 2.84 2.84 0 0 0-1.984-.839c-2.767-.2-6.926-.2-6.926-.2s-4.157 0-6.928.2a2.836 2.836 0 0 0-1.983.839 4.225 4.225 0 0 0-.79 1.965 30.146 30.146 0 0 0-.2 3.206v1.5a30.12 30.12 0 0 0 .2 3.206c.094.712.364 1.39.784 1.972.604.536 1.38.837 2.187.848 1.583.151 6.731.2 6.731.2s4.161 0 6.928-.2a2.844 2.844 0 0 0 1.985-.84 4.27 4.27 0 0 0 .787-1.965 30.12 30.12 0 0 0 .2-3.206v-1.516a30.672 30.672 0 0 0-.202-3.206Zm-11.692 6.554v-5.62l5.4 2.819-5.4 2.801Z"
                                        clip-rule="evenodd" />
                                </svg>
                                Video
                            </a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </section>

        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

        <!-- Initialize Swiper with jQuery -->
        <script>
            $(document).ready(function() {
                // Initialize Swiper
                const swiper = new Swiper('.hero-swiper', {
                    // Optional parameters
                    loop: true,
                    autoplay: {
                        delay: 5000,
                        disableOnInteraction: false,
                    },
                    effect: 'fade',
                    fadeEffect: {
                        crossFade: true
                    },
                    speed: 1000,

                    // Navigation arrows
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },

                    // Pagination
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                        dynamicBullets: true,
                    },

                    // Responsive breakpoints
                    breakpoints: {
                        // when window width is >= 320px
                        320: {
                            slidesPerView: 1,
                            spaceBetween: 0
                        },
                        // when window width is >= 640px
                        640: {
                            slidesPerView: 1,
                            spaceBetween: 0
                        },
                        // when window width is >= 768px
                        768: {
                            slidesPerView: 1,
                            spaceBetween: 0
                        }
                    },

                    // Keyboard control
                    keyboard: {
                        enabled: true,
                    },

                    // Mouse wheel control
                    mousewheel: {
                        enabled: false,
                    },

                    // Grab cursor
                    grabCursor: true,
                });

                // Pause autoplay on hover using jQuery
                // $('.hero-swiper').hover(
                //     function() {
                //         swiper.autoplay.stop();
                //     },
                //     function() {
                //         swiper.autoplay.start();
                //     }
                // );

                $('.hero-video-btn').on('click', function(e) {
                    console.log('Video button clicked');
                });
            });
        </script>
    </body>

</html>
<?php /**PATH C:\Users\User\Downloads\folder\pasuruan\pasuruan gov\resources\views/index.blade.php ENDPATH**/ ?>