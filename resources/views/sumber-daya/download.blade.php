@extends('layout')

@section('content')
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

    {{-- MAIN CONTENT --}}
    <section>
        {{-- LIST OF ITEM --}}
        <div class="container my-4">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                @foreach ($devData as $download)
                    <x-download-card :title="$download->title" :extension="$download->extension" :url="$download->url" />
                @endforeach
            </div>
        </div>

        {{-- PAGINATION --}}
        <div class="my-4">
            <x-dummy-pagination />
        </div>
    </section>
@endsection

@push('styles')
    <style>
        .unduh-btn {
            transition: background 0.2s, color 0.2s, box-shadow 0.2s;
            color: #0b7642;
        }

        .unduh-btn:hover {
            background: #0b7642;
            color: #fff;
            box-shadow: 0 2px 8px rgba(11, 118, 66, 0.12);
            border-color: #0b7642 !important;
        }

        .unduh-btn:hover span,
        .unduh-btn:hover svg {
            color: #fff;
            stroke: #fff;
        }
    </style>
@endpush
