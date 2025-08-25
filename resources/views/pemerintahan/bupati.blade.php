@extends('pemerintahan.layout')

@push('styles')
    <style>
        .info-box hr {
            transition: width 0.3s ease-in-out;
        }

        .info-box:hover hr {
            width: 100% !important;
        }

        .image-container img {
            transition: transform 0.3s ease;
        }

        .image-container:hover img {
            transform: scale(1.05);
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
    <section class="container-fluid my-4">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="rounded border d-flex flex-column p-3 info-box">
                    <p class="p-0 m-0">{{ $devBupati->jabatan }} ({{ $devBupati->pemerintahan_periode->periode }})</p>
                    <hr style="color: #03D26F; width: 200px" class="my-2 border-2 opacity-100">
                    <h4>{{ $devBupati->nama }}</h4>
                </div>
                <div class="mt-3 rounded border overflow-hidden image-container" style="height: 900px;">
                    <img src="{{ $devBupati->gambar_pemerintahan }}" alt="Gambar {{ $devBupati->jabatan }}"
                        class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
            </div>
            <div class="col">
                <div class="rounded border d-flex flex-column p-3 info-box">
                    <p class="p-0 m-0">{{ $devWabup->jabatan }} ({{ $devWabup->pemerintahan_periode->periode }})</p>
                    <hr style="color: #03D26F; width: 200px" class="my-2 border-2 opacity-100">
                    <h4>{{ $devWabup->nama }}</h4>
                </div>
                <div class="mt-3 rounded border overflow-hidden image-container" style="height: 900px;">
                    <img src={{ $devWabup->gambar_pemerintahan }} alt="Gambar {{ $devWabup->jabatan }}" class="img-fluid"
                        style="width: 100%; height: 100%; object-fit: cover;">
                </div>
            </div>
        </div>
    </section>
@endsection
