@extends('layout')

@section('content')
    <section
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)), url('https://www.wartabromo.com/wp-content/uploads/2023/03/IMG-20230308-WA0043.jpg'); height: clamp(240px, 50vh, 480px); background-position: center; position: relative; background-size: cover;"
        class="d-flex align-items-center justify-content-center">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <h1 style="color: white;
                   font-weight: bold;
                   margin-bottom: 8px;
                   padding: 0;
                   text-align:center;
                   "
                class="fs-2">
                {{ $devTitle }}
            </h1>
            <x-breadcrumb :items="$breadcrumbs" />
        </div>
    </section>

    <section>
        <div class="container my-4">
            <div class="row row-cols-1 row-cols-md-2 g-3 align-items-center">
                <div class="col-12 col-md-8">
                    <input type="text" name="query" id="searchInput" class="form-control"
                        placeholder="Ketik judul gambar...">
                </div>
                <div class="col-12 col-md-4">
                    <select class="form-select" name="category" id="categorySelect">
                        <option value="" disabled selected>Pilih Kategori</option>
                        <option value="1">Baung Camp Rafting</option>
                        <option value="2">Bromo</option>
                        <option value="3">Cak dan Yuk Pasuruan</option>
                        <option value="4">Pertanian</option>
                        <option value="5">Perkebunan</option>
                    </select>
                </div>
            </div>
        </div>

        {{-- LIST OF ITEM --}}
        <div class="container my-4">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-2">
                @foreach ($devData as $gambar)
                    <div class="col overflow-hidden">
                        <x-image-card :gambar="$gambar" />
                    </div>
                @endforeach
            </div>
        </div>

        {{-- PAGINATION --}}
        <div class="my-4">
            <x-dummy-pagination />
        </div>
    </section>
@endsection
