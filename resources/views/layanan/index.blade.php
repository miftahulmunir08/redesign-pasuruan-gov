@extends('layout')

@section('content')
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
                            <span style="font-weight: bold" class="fs-1">{{ $devTitle }}</span>
                        </h1>
                    </div>
                </div>
            </div>

            {{-- <div>
                    <select id="kategori_id" name="kategori_id"
                        class="form-select form-select-sm shadow-none form-select-custom">
                        <option value="null">Pilih {{ $devTitle }}</option>
                        @foreach ($devLis as $item)
                            <option value="{{ $item->slug_kategori }}">{{ $item->nama_kategori }}</option>
                        @endforeach
                    </select>
                </div> --}}
        </div>
    </section>

    <main class="flex-grow-1 d-flex flex-column">
        {{-- List post --}}
        <section style="width: 96%" class="mx-auto my-4 container-fluid">
            @if ($devData->isNotEmpty())
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4 mb-4">
                    @foreach ($devData as $layanan)
                        <div class="col">
                            <x-layanan-card :layanan="$layanan" :categoryTitle="$devTitle" />
                        </div>
                    @endforeach
                </div>
            @endif
            @if ($devData->isEmpty())
                <p>Belum Ada Data yang Ditambahkan</p>
            @endif
        </section>
    </main>
@endsection
