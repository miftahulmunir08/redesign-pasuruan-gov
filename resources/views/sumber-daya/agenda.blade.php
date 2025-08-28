@extends('profil.layout')

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
        {{-- SEARCH BAR AND CATEGORY --}}
        <div class="container my-4">
            <div class="row gx-3">
                <div class="col-md-8 mb-2 mb-md-0">
                    <form class="d-flex">
                        <input type="text" name="query" class="form-control"
                            placeholder="Ketik judul, nomor, atau tahun dokumen..." autocomplete="off"
                            style="outline: none;" />
                    </form>
                </div>
                <div class="col-md-4">
                    <select class="form-select" name="category" style="outline: none; ">
                        <option value="" disabled selected>Pilih kategori</option>
                        <option value="category-1">Category 1</option>
                        <option value="category-2">Category 2</option>
                        <option value="category-3">Category 3</option>
                    </select>
                </div>
            </div>
        </div>

        {{-- LIST OF ITEM --}}
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                @for ($i = 1; $i <= 10; $i++)
                    <div class="col">
                        <div class="p-3 border border-secondary-subtle rounded">
                            <div class="d-flex flex-column justify-content-between">
                                <div class="d-flex flex-column justify-content-start mb-3">
                                    <h5 class="mb-0">Item {{ $i }}</h5>
                                    <p class="mb-0 text-muted text-secondary fw-medium" style="font-size: 14px">This is a
                                        description for
                                        item
                                        {{ $i }}.</p>
                                </div>
                                <div class="d-flex flex-row justify-content-between align-items-center">
                                    <p class="mb-0 fw-medium px-3 spy-1 rounded-5 text-white"
                                        style="font-size: 14px; background-color: #03D26F; width: fit-content">
                                        20XX</p>
                                    <button
                                        class="unduh-btn border rounded-3 border-secondary-subtle d-flex flex-row align-items-center gap-2"
                                        style="transition: background 0.2s, color 0.2s, box-shadow 0.2s;">
                                        <span>Unduh</span> <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-download-icon lucide-download">
                                            <path d="M12 15V3" />
                                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
                                            <path d="m7 10 5 5 5-5" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
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
