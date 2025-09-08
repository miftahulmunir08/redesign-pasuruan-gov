@props(['transparansi'])


<div class="col-6 col-md-4 col-lg-3 mt-3">
    <div class="p-3 border border-secondary-subtle rounded h-100">
        <div class="d-flex flex-column justify-content-between h-100">
            <div class="d-flex flex-column justify-content-start mb-3">
                <h5 class="mb-0">{{ $transparansi->title }}</h5>
                <p class="mb-0 text-muted text-secondary fw-medium" style="font-size: 14px">
                    {{ $transparansi->description }}.
                </p>
            </div>
            <div class="d-flex flex-row justify-content-between align-items-center">
                <p class="mb-0 fw-medium px-3 py-1 rounded-5 text-white" style="font-size: 14px; background-color: #338d24; width: fit-content">
                    {{ $transparansi->year }}
                </p>
                <a href="{{ $transparansi->url }}" target="_blank" class="unduh-btn btn btn-sm btn-outline-secondary d-flex flex-row align-items-center gap-2" style="transition: background 0.2s, color 0.2s, box-shadow 0.2s;">
                    <span>Unduh</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-download">
                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
                        <path d="m7 10 5 5 5-5" />
                        <path d="M12 15V3" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>