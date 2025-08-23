<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])

        <!-- Swiper CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

        {{-- Slick CSS --}}
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
        <link rel="stylesheet" type="text/css"
            href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    </head>

    <body>
        <header>
            <x-web-info />
            <x-desktop-navigation />
        </header>

        {{-- Hero --}}
        <section
            style="background-image: url('https://www.wartabromo.com/wp-content/uploads/2023/03/IMG-20230308-WA0043.jpg'); height: 480px; background-position: center; position: relative;">

            <div style="width: 94%; position: absolute; bottom: 32px; left: 50%; transform: translateX(-50%);"
                class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <div class="mb-3 mb-md-0">
                    <x-breadcrumb :items="$breadcrumbs" />
                    <div>
                        <div>
                            <h1 style="color:white; font-weight: normal; margin-bottom: 0; padding: 0" class="fs-2">
                                <span style="font-weight: bold" class="fs-1">{{ $devTitle }}</span> -
                                <span class="text-capitalize">{{ str_replace('-', ' ', $devIndex) }}</span>
                            </h1>
                        </div>
                    </div>
                </div>

                <div>
                    <select id="kategori_id" name="kategori_id"
                        class="form-select form-select-sm shadow-none form-select-custom">
                        <option value="null">Pilih {{ $devTitle }}</option>
                        @foreach ($devLis as $item)
                            <option value="{{ $item->slug_kategori }}">{{ $item->nama_kategori }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </section>

        {{-- List post --}}
        <section style="width: 96%" class="mx-auto my-4 container-fluid">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4 mb-4">
                @foreach ($devData as $post)
                    {{-- Setiap item sekarang dibungkus oleh <div> kolom --}}
                    <div class="col">
                        <x-post-card :post="$post" :categoryTitle="$devTitle" />
                    </div>
                @endforeach
            </div>
            {{-- Pagination --}}
            {{ $devData->links('components.dev-pagination') }}
        </section>

        {{-- Footer --}}
        <x-footer />

        {{-- Javascript --}}
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        @stack('scripts')
    </body>

</html>
