@extends('pemerintahan.layout')

@once
    <style>

    </style>
@endonce

@section('content')
    {{-- Hero --}}
    <section
        style="background-image: url('https://www.wartabromo.com/wp-content/uploads/2023/03/IMG-20230308-WA0043.jpg');
           height: 480px;
           background-position: center;
           background-size: cover;"
        class="d-flex align-items-center justify-content-center">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <h1 style="color: white;
                   font-weight: bold;
                   margin-bottom: 0;
                   padding: 0"
                class="fs-1">
                {{ $devTitle }}
            </h1>
            <x-breadcrumb :items="$breadcrumbs" />
        </div>
    </section>

    {{-- Main --}}
    <section class="row">
        <div class="col-12 col-sm-6">
            <div class="rounded border d-flex flex-column">
                <p class="p-0 m-0">Bupati Pasuruan (2025 - 2030)</p>
                <h4>H.M. RUSDI SUTEDJO</h4>
            </div>
        </div>
        <div class="col-12 col-sm-6">
            <div class="rounded border d-flex flex-column">
                <p class="p-0 m-0">Wakil Bupati Pasuruan (2025 - 2030)</p>
                <h4>H.M. SHOBIH ASHORI</h4>
            </div>
        </div>
    </section>
@endsection
