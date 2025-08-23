@once
    <style>
        .pagination.gap-2 .page-link {
            border-radius: var(--bs-border-radius) !important;
        }

        /*
                             * Modifikasi warna pagination
                            */

        /* Gaya dasar untuk semua tombol (abu-abu) */
        .pagination .page-link {
            background-color: #e2e2e2;
            color: #ffffff;
            /* Teks dan ikon menjadi putih */
            border: none;
            /* Menghilangkan garis tepi */
            font-weight: bold;
        }

        /* Gaya saat mouse menyentuh tombol (hover), kecuali tombol yg non-aktif */
        .pagination .page-link:hover {
            background-color: #03D26F;
        }

        /* Gaya untuk tombol yang sedang aktif (hijau) */
        .pagination .page-item.active .page-link {
            background-color: #03D26F;
            color: #ffffff;
        }

        /* Gaya untuk tombol non-aktif (disabled) agar sedikit lebih transparan */
        .pagination .page-item.disabled .page-link {
            background-color: #e2e2e2;
            opacity: 0.7;
        }

        /* Mengatur sudut tumpul yang sama untuk semua tombol */
        .pagination.gap-2 .page-link {
            border-radius: var(--bs-border-radius) !important;
        }
    </style>
@endonce

{{-- @if ($paginator->hasPages())
@endif --}}
<nav>
    <ul class="pagination justify-content-center gap-2">
        @if ($paginator->onFirstPage())
            <li class="page-item disabled" aria-disabled="true">
                <span class="page-link d-flex align-items-center h-100" aria-label="@lang('pagination.previous')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-chevron-left">
                        <path d="m15 18-6-6 6-6" />
                    </svg>
                </span>
            </li>
        @else
            <li class="page-item">
                <a class="page-link d-flex align-items-center h-100" href="{{ $paginator->previousPageUrl() }}"
                    rel="prev" aria-label="@lang('pagination.previous')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-chevron-left">
                        <path d="m15 18-6-6 6-6" />
                    </svg>
                </a>
            </li>
        @endif

        {{-- Elemen Nomor Halaman --}}
        @foreach ($elements as $element)
            {{-- Pemisah "Three Dots" (...) --}}
            @if (is_string($element))
                <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span>
                </li>
            @endif

            {{-- Array Link Halaman --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active" aria-current="page"><span
                                class="page-link">{{ $page }}</span></li>
                    @else
                        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach

        @if ($paginator->hasMorePages())
            <li class="page-item">
                <a class="page-link d-flex align-items-center h-100" href="{{ $paginator->nextPageUrl() }}"
                    rel="next" aria-label="@lang('pagination.next')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-chevron-right">
                        <path d="m9 18 6-6-6-6" />
                    </svg>
                </a>
            </li>
        @else
            <li class="page-item disabled" aria-disabled="true">
                <span class="page-link d-flex align-items-center h-100" aria-label="@lang('pagination.next')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-chevron-right">
                        <path d="m9 18 6-6-6-6" />
                    </svg>
                </span>
            </li>
        @endif
    </ul>
</nav>
