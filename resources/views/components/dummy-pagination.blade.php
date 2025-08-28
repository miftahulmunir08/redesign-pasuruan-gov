@once
    <style>
        .pagination.gap-2 .page-link {
            border-radius: var(--bs-border-radius) !important;
        }

        .pagination .page-link {
            background-color: #e2e2e2;
            color: #ffffff;
            border: none;
            font-weight: bold;
        }

        .pagination .page-link:hover {
            background-color: #03D26F;
        }

        .pagination .page-item.active .page-link {
            background-color: #03D26F;
            color: #ffffff;
        }

        .pagination .page-item.disabled .page-link {
            background-color: #e2e2e2;
            opacity: 0.7;
        }
    </style>
@endonce

<nav>
    <ul class="pagination justify-content-center gap-2">
        {{-- Previous --}}
        <li class="page-item disabled" aria-disabled="true">
            <span class="page-link d-flex align-items-center h-100" aria-label="Previous">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-chevron-left">
                    <path d="m15 18-6-6 6-6" />
                </svg>
            </span>
        </li>

        {{-- Pages --}}
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item" aria-current="page"><span class="page-link">2</span></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">4</a></li>
        <li class="page-item"><a class="page-link" href="#">5</a></li>

        {{-- Next --}}
        <li class="page-item">
            <a class="page-link d-flex align-items-center h-100" href="#" aria-label="Next">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-chevron-right">
                    <path d="m9 18 6-6-6-6" />
                </svg>
            </a>
        </li>
    </ul>
</nav>
