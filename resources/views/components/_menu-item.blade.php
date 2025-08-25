@once
    <style>
        /* CSS kustom HANYA untuk enhancement (animasi) yang tidak ada di Bootstrap */

        /* --- EFEK UTAMA PADA NAV-LINK --- */
        .navbar-nav .nav-link {
            transition: color 0.2s ease-in-out;
        }

        .navbar-nav>.nav-item>.nav-link::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0.5rem;
            right: 0.5rem;
            height: 3px;
            background-color: var(--bs-primary);
            border-radius: 2px;
            transform: scaleX(0);
            transition: transform 0.25s ease-out;
        }

        .navbar-nav .nav-link:hover::after,
        .navbar-nav .nav-item.show>.nav-link::after,
        .navbar-nav .nav-link.active::after {
            transform: scaleX(1);
        }

        /* --- ANIMASI DROPDOWN MENU --- */
        .navbar-nav .dropdown-menu {
            display: block;
            opacity: 0;
            visibility: hidden;
            transform: translateY(10px);
            transition: all 0.2s ease-in-out;
            margin-top: 0.5rem !important;
            max-height: 400px;
            overflow-y: auto;
        }

        /* Styling scrollbar */
        .navbar-nav .dropdown-menu::-webkit-scrollbar {
            width: 6px;
        }

        .navbar-nav .dropdown-menu::-webkit-scrollbar-track {
            background: transparent;
        }

        .navbar-nav .dropdown-menu::-webkit-scrollbar-thumb {
            background: #ccc;
            border-radius: 10px;
        }

        .navbar-nav .dropdown-menu::-webkit-scrollbar-thumb:hover {
            background: #aaa;
        }

        @media (min-width: 992px) {
            .navbar-nav .dropdown:hover>.dropdown-menu {
                opacity: 1;
                visibility: visible;
                transform: translateY(0);
            }
        }

        /* --- EFEK PADA DROPDOWN ITEM --- */
        .navbar-nav .dropdown-item {
            transition: background-color 0.2s ease, color 0.2s ease;
        }

        /* --- ANIMASI PANAH DROPDOWN --- */
        .navbar-nav .dropdown-toggle::after {
            transition: transform 0.2s ease-out;
        }

        .navbar-nav .nav-item.show>.dropdown-toggle::after {
            transform: rotate(180deg);
        }

        .navbar-nav .dropdown-item.is-submenu-header {
            font-weight: 700;
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: var(--bs-secondary-color);
            cursor: default;
        }

        .navbar-nav .dropdown-item.is-submenu-header:hover,
        .navbar-nav .dropdown-item.is-submenu-header:focus {
            background-color: transparent;
            color: var(--bs-secondary-color);
        }

        /* --- PERUBAHAN: ANIMASI ITEM DROPDOWN (STAGGERED) --- */
        /* Kondisi awal item (sebelum muncul) */
        .navbar-nav .dropdown-menu .nav-item {
            opacity: 0;
            transform: translateX(-15px);
            transition: opacity 0.3s ease, transform 0.3s ease;
        }

        /* Kondisi akhir item (saat dropdown terbuka) */
        .navbar-nav .dropdown:hover>.dropdown-menu .nav-item {
            opacity: 1;
            transform: translateX(0);
            /* Kunci animasi staggered: delay dihitung berdasarkan urutan item */
            transition-delay: calc(var(--animation-order, 0) * 40ms);
        }

        /* --- AKHIR PERUBAHAN --- */
    </style>
@endonce

{{--
    =================================================================
    MARKUP & LOGIKA KOMPONEN
    =================================================================
--}}
@php
    $level = $level ?? 1;
    $hasChildren = !empty($item['children']);
    $animationOrder = $animationOrder ?? 0; // Ambil urutan animasi

    $indentationClass = $level > 1 ? ' ps-' . ($level + 1) : '';
    $aClass = $level > 1 ? 'dropdown-item' : 'nav-link';
    $aClass .= $indentationClass;

    if ($level == 1 && $hasChildren) {
        $aClass .= ' dropdown-toggle';
    }

    if ($level > 1 && $hasChildren) {
        $aClass .= ' is-submenu-header';
    }
@endphp

{{-- PERUBAHAN: Tambahkan style untuk urutan animasi --}}
<li class="nav-item {{ $level == 1 && $hasChildren ? 'dropdown' : '' }}"
    style="--animation-order: {{ $animationOrder }};">

    <a href="{{ $item['url'] }}" class="{{ $aClass }}"
        @if ($level == 1 && $hasChildren) role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false" @endif>
        {{ $item['text'] }}
    </a>

    @if ($level == 1 && $hasChildren)
        <ul class="dropdown-menu">
            @foreach ($item['children'] as $child)
                {{-- PERUBAHAN: Kirim urutan iterasi sebagai properti 'animationOrder' --}}
                @include('components._menu-item', [
                    'item' => $child,
                    'level' => $level + 1,
                    'animationOrder' => $loop->iteration,
                ])
            @endforeach
        </ul>
    @endif

    @if ($level > 1 && $hasChildren)
        @foreach ($item['children'] as $child)
            {{-- PERUBAHAN: Kirim urutan iterasi sebagai properti 'animationOrder' --}}
            @include('components._menu-item', [
                'item' => $child,
                'level' => $level + 1,
                'animationOrder' => $loop->iteration,
            ])
        @endforeach
    @endif
</li>
