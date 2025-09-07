@extends('layout')

@push('styles')
    <style>
        .datepicker {
            cursor: pointer;
        }

        .datepicker::-webkit-calendar-picker-indicator {
            display: none;
        }
    </style>
@endpush

@section('content')
    {{-- Hero --}}
    <section
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('https://www.wartabromo.com/wp-content/uploads/2023/03/IMG-20230308-WA0043.jpg'); height: clamp(240px, 50vh, 480px); background-position: center; position: relative; background-size: cover;">

        <div style="width: 94%; position: absolute; bottom: 32px; left: 50%; transform: translateX(-50%);"
            class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <div class="mb-3 mb-md-0">
                <x-breadcrumb :items="$breadcrumbs" />
                <div>
                    <div>
                        <h1 style="color:white; font-weight: normal; margin-bottom: 0; padding: 0"
                            class="fs-2 text-capitalize">
                            <span style="font-weight: bold" class="fs-1">{{ $devTitle }}</span> -
                            <span>{{ str_replace('-', ' ', $devIndex) }}</span>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Content Section --}}
    <section>
        {{-- Search and Filter --}}
        <div class="container my-4">
            <div class="row g-3 align-items-center">
                <div class="col-12 col-md-5">
                    <input type="text" name="query" id="searchInput" class="form-control"
                        placeholder="Ketik judul berita...">
                </div>
                <div class="col-12 col-md-4">
                    <select class="form-select" name="category" id="categorySelect">
                        <option value="" disabled selected>Pilih Kategori</option>
                        <option value="1">Agrowisata</option>
                        <option value="2">Budaya</option>
                        <option value="3">Ekonomi</option>
                    </select>
                </div>
                <div class="col-12 col-md-3">
                    <input type="month" name="publish_date" id="dateInput" class="form-control">
                </div>

            </div>
        </div>

        {{-- LIST OF ITEM --}}
        <div class="container">
            @if ($devData->isNotEmpty())
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
                    @foreach ($devData as $news)
                        <div class="col">
                            <x-berita-card :news="$news" />
                        </div>
                    @endforeach
                </div>

                {{-- PAGINATION --}}
                <div class="my-4">
                    <x-dummy-pagination />
                </div>
            @endif
            @if ($devData->isEmpty())
                <p>Belum Ada Berita yang Ditambahkan</p>
            @endif
        </div>
    </section>
@endsection
