@extends('layout')

@section('content')
<section style="background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('https://www.wartabromo.com/wp-content/uploads/2023/03/IMG-20230308-WA0043.jpg'); height: clamp(240px, 50vh, 480px); background-position: center; position: relative; background-size: cover;" class="d-flex align-items-center justify-content-center">
    <div class="d-flex flex-column justify-content-center align-items-center">
        <h1 class="fs-1 text-center text-white mb-3 p-0 fw-bold">
            {{ $devTitle }}
        </h1>
        <x-breadcrumb :items="$breadcrumbs" />
    </div>
</section>

{{-- MAIN CONTENT --}}
<section>
    <div class="container my-4">
        <form class="d-flex">
            <input type="text" name="query" class="form-control" placeholder="Ketik judul, nomor, atau tahun dokumen..." autocomplete="off" style="outline: none;" />
        </form>
    </div>

    {{-- LIST OF ITEM --}}
    <div class="container my-4">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            @foreach ($devData as $majalah)
            <div class="col">
                <x-majalah-card :majalah="$majalah" />
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

@push('styles')
@once
<style>

</style>
@endonce
@endpush

@push('scripts')
<script></script>
@endpush