@extends('layout')

@push('styles')
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
                margin-top: -20rem;
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
@endpush

@section('content')
    {{-- Hero --}}
    <section
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('https://www.wartabromo.com/wp-content/uploads/2023/03/IMG-20230308-WA0043.jpg'); height: clamp(240px, 50vh, 480px); background-position: center; position: relative; background-size: cover;"
        class="d-flex align-items-center justify-content-center">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <h1 style="color: white;
                   font-weight: bold;
                   margin-bottom: 8px;
                   padding: 0;
                   text-align:center;
                   "
                class="fs-1">
                {{ $devData->judul_posts }}
            </h1>
            <x-breadcrumb :items="$breadcrumbs" />
        </div>
    </section>

    {{-- Main --}}
    <section class="container my-5">
        <div class="col-12 text-start my-5" style="position: relative; padding-bottom: 4rem">
            <div class="row">
                <div class="col-12 col-md-8 col-lg-7 card-content" style="">
                    <img src="{{ asset('storage/uploads/hero_section/202409_209-66d95f4f2b0ac.jpg') }}" class="w-100"
                        style="border-radius: 25px" />

                    <div class="mt-4">
                        <p class="h4 fw-medium">
                            {{ dateFormatToID($devData->waktu_publish) }}<span class="text-custom-green"> - </span>
                            <span class="text-custom-green fs-small">Author</span>
                        </p>
                    </div>

                    <div class="mt-5" id="sumber-daya">
                        <div>
                            <p class="h4 fw-medium">
                                Arti Lambang<span class="text-custom-green">.</span>
                            </p>
                            {{-- <p class="text-muted">
                                Pemerintah Kabupaten Pasuruan belakangan ini semakin gencar
                                mendorong berbagai program pembangunan yang berfokus pada sektor
                                pertanian, pariwisata, dan UMKM. Sebagai salah satu daerah di
                                Jawa Timur yang dikenal dengan potensi alamnya, Pasuruan
                                memiliki beragam komoditas unggulan, mulai dari hortikultura di
                                kawasan Nongkojajar hingga wisata alam di sekitar Bromo. Di sisi
                                pelayanan publik, pemerintah daerah terus berupaya memanfaatkan
                                teknologi digital untuk mempermudah masyarakat mengakses layanan
                                administrasi. Misalnya, melalui penerapan sistem pelayanan
                                terpadu berbasis online yang dapat diakses warga tanpa harus
                                datang langsung ke kantor dinas. Selain itu, Pemkab Pasuruan
                                juga aktif mengadakan pelatihan keterampilan bagi generasi muda,
                                bekerja sama dengan lembaga pendidikan dan dunia usaha.
                                Harapannya, program ini bisa menekan angka pengangguran dan
                                sekaligus meningkatkan daya saing masyarakat di era modern.
                                Meskipun begitu, tantangan seperti perbaikan infrastruktur,
                                pengelolaan lingkungan, dan pemerataan pembangunan tetap menjadi
                                agenda yang perlu terus dipacu agar visi Pasuruan sebagai daerah
                                maju dan sejahtera dapat tercapai.
                            </p> --}}
                            {!! $devData->konten_posts !!}
                        </div>
                    </div>

                    <x-share-button />
                </div>
                <div class="col-12 col-md-4 col-lg-5 card-content-right-bar">
                    <x-search />
                    <x-list-article />
                    <x-list-category-article />
                </div>
            </div>
        </div>
    </section>
@endsection
