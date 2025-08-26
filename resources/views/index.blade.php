<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])

        {{-- Poppins --}}
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
            rel="stylesheet">

        <!-- Swiper CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

        <style>

        </style>
    </head>

    <body>
        <header>
            <x-web-info />
            <x-desktop-navigation />
        </header>

        {{-- Hero Section with Swiper --}}
        <section class="hero-swiper swiper">
            <div class="swiper-wrapper">
                @foreach ($devBannerUtama as $banner)
                    <div class="swiper-slide hero-slide"
                        style="background-image: url('{{ $banner['background_image_url'] }}');">
                        <div class="hero-overlay"></div>
                        <div class="hero-content">
                            <div style="display: flex; flex-direction:column">
                                <h1>{{ $banner['nama_banner'] }}</h1>
                                <h6>{{ $visi }}</h6>
                            </div>
                            <a class="hero-video-btn" onclick="bukaModalVideo('{{ $banner['url_youtube'] }}')"
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
                @endforeach
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
