@props(['items' => []])

@once
    <style>
        .breadcrumb-item a {
            transition: color 0.2s ease-in-out, text-decoration-color 0.2s ease-in-out;
        }

        .breadcrumb-item a:hover {
            color: #03D26F !important;
            text-decoration: underline !important;
        }
    </style>
@endonce

@if (count($items) > 0)
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%23ffffff'/%3E%3C/svg%3E&#34;);"
        aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 fw-medium align-items-center">
            @foreach ($items as $item)
                @if ($loop->last)
                    <li class="breadcrumb-item active" aria-current="page">
                        <span style="color: #03D26F;">{{ $item['text'] }}</span>
                    </li>
                @else
                    <li class="breadcrumb-item">
                        <a href="{{ $item['url'] }}" class="text-white text-decoration-none">{{ $item['text'] }}</a>
                    </li>
                @endif
            @endforeach
        </ol>
    </nav>
@endif
