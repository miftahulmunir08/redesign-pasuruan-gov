@extends('profil.layout')

@push('styles')
    <style>
        /* Base Component Styles */
        .profile-card {
            border: 1px solid #e0e0e0;
            border-radius: 1rem;
            overflow: hidden;
            transition: transform 0.3s ease, border-color 0.3s ease, border-width 0.3s ease;
            display: flex;
            /* Memastikan card bisa stretch */
            flex-direction: column;
            /* Arah konten di dalam card */
        }

        .profile-card:hover {
            transform: translateY(-5px);
            border-width: 2px;
            border-color: #0B7642;
        }

        .profile-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center top;
        }

        .profile-subtitle {
            color: #0B7642;
        }

        .profile-divider {
            color: #03D26F;
            width: 150px;
            transition: width 0.3s ease-in-out;
        }

        .profile-card:hover .profile-divider {
            width: 100%;
        }

        .profile-action {
            margin-top: auto;
            /* Mendorong tombol ke bagian bawah card */
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

        @media (max-width: 768px) {
            .profile-img {
                height: auto;
            }

            .profile-divider {
                margin-inline: auto;
            }
        }
    </style>
@endpush

@section('content')
    {{-- Hero --}}
    <section
        style="background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0)), url('https://www.wartabromo.com/wp-content/uploads/2023/03/IMG-20230308-WA0043.jpg'); height: clamp(240px, 50vh, 480px); background-position: center; position: relative; background-size: cover;"
        class="d-flex align-items-center justify-content-center">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <h1 class="fs-1 text-center text-white mb-3 p-0 fw-bold">
                {{ $devTitle }}
            </h1>
            <x-breadcrumb :items="$breadcrumbs" />
        </div>
    </section>

    {{-- Main --}}
    <section class="container my-5">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bold">Bupati dan Wakil Bupati Kabupaten Pasuruan</h1>
            <p class="lead text-muted">Masa Jabatan {{ $devBupati->pemerintahan_periode->periode }}</p>
        </div>

        {{-- Card Container --}}
        <div class="row g-4 justify-content-center">

            {{-- Card 1: Bupati --}}
            <div class="col-lg-6 d-flex align-items-stretch">
                <div class="card profile-card w-100">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ $devBupati->gambar_pemerintahan }}" class="profile-img"
                                alt="Foto {{ $devBupati->nama }}">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body d-flex flex-column h-100 p-4">
                                <div>
                                    <h5 class="profile-subtitle fw-semibold mb-2">{{ $devBupati->jabatan }}</h5>
                                    <h2 class="fw-bold mb-0 h3">{{ $devBupati->nama }}</h2>
                                    <hr class="profile-divider border-2 opacity-100 my-4">
                                </div>
                                <div class="profile-action">
                                    <a href="https://id.wikipedia.org/wiki/Mochamad_Rusdi_Sutejo" target="_blank"
                                        class="btn btn-lg px-4 fs-6 text-white" style="background-color: #0B7642">
                                        Lihat Profil Lengkap
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Card 2: Wakil Bupati --}}
            <div class="col-lg-6 d-flex align-items-stretch">
                <div class="card profile-card w-100">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ $devWabup->gambar_pemerintahan }}" class="profile-img"
                                alt="Foto {{ $devWabup->nama }}">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body d-flex flex-column h-100 p-4">
                                <div>
                                    <h5 class="profile-subtitle fw-semibold mb-2">{{ $devWabup->jabatan }}</h5>
                                    <h2 class="fw-bold mb-0 h3">{{ $devWabup->nama }}</h2>
                                    <hr class="profile-divider border-2 opacity-100 my-4">
                                </div>
                                <div class="profile-action">
                                    <a href="https://id.wikipedia.org/wiki/Shobih_Asrori" target="_blank"
                                        class="btn btn-lg px-4 fs-6 text-white" style="background-color: #0B7642">
                                        Lihat Profil Lengkap
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
