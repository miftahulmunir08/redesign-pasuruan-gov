@props(['jenisAplikasi', 'idAplikasi', 'urlAplikasi', 'namaAplikasi', 'deskripsiAplikasi', 'gambarAplikasi'])

@once
    @push('styles')
        <style>
            .isbig {
                background-color: red;
            }
        </style>
    @endpush
@endonce

<div class="p-1 h-100 isbig">
    <div class="d-flex align-items-center p-4 gap-4 bg-white shadow rounded-3 h-100 position-relative"
        data-id="{{ $idAplikasi }}">
        <span class=""></span>

        <div class="d-flex align-items-center gap-4">
            <img src="{{ $gambarAplikasi }}" alt="{{ $namaAplikasi }}" class="w-25" />
            <div>
                <h5 class="mb-1">{{ $namaAplikasi }}</h5>
                <p class="text-muted mb-0">{{ $deskripsiAplikasi }}</p>
            </div>
        </div>
    </div>
</div>
