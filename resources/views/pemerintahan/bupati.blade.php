@extends('pemerintahan.layout')

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
                   padding: 0"
                class="fs-1">
                {{ $devTitle }}
            </h1>
            <x-breadcrumb :items="$breadcrumbs" />
        </div>
    </section>

    {{-- @dd($devBupati) --}}
    {{-- Main --}}
    <section class="container-fluid my-5" style="padding: 0 128px">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bold">Bupati dan Wakil Bupati Kabupaten Pasuruan</h1>
            <p class="lead text-muted">Masa Jabatan {{ $devBupati->pemerintahan_periode->periode }}</p>
        </div>
        <div class="d-flex flex-column gap-4">
            <div class="card profile-card">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ $devBupati->gambar_pemerintahan }}" class="profile-img"
                            alt="Foto {{ $devBupati->nama }}">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body profile-body">
                            <div class="text-content">
                                <h5 class="profile-subtitle">{{ $devBupati->jabatan }}</h5>
                                <h2 class="profile-title">{{ $devBupati->nama }}</h2>
                                <hr class="profile-divider">
                            </div>
                            <div class="profile-action">
                                <a href="https://id.wikipedia.org/wiki/Mochamad_Rusdi_Sutejo" target="_blank"
                                    class="btn btn-primary btn-lg px-4">
                                    Lihat Profil Lengkap
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card profile-card">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ $devWabup->gambar_pemerintahan }}" class="profile-img"
                            alt="Foto {{ $devWabup->nama }}">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body profile-body">
                            <div class="text-content">
                                <h5 class="profile-subtitle">{{ $devWabup->jabatan }}</h5>
                                <h2 class="profile-title">{{ $devWabup->nama }}</h2>
                                <hr class="profile-divider">
                            </div>
                            <div class="profile-action">
                                <a href="https://id.wikipedia.org/wiki/Shobih_Asrori" target="_blank"
                                    class="btn btn-primary btn-lg px-4">
                                    Lihat Profil Lengkap
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
