@once
    <style>
        .navbar-nav .nav-link {
            transition: color 0.2s ease-in-out;
            font-size: 0.9rem
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

        /* ANIMATION */
        .navbar-nav .dropdown-item {
            transition: background-color 0.2s ease, color 0.2s ease;
        }

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

        .navbar-nav .dropdown-menu .nav-item {
            opacity: 0;
            transform: translateX(-15px);
            transition: opacity 0.3s ease, transform 0.3s ease;
        }

        .navbar-nav .dropdown:hover>.dropdown-menu .nav-item {
            opacity: 1;
            transform: translateX(0);
            transition-delay: calc(var(--animation-order, 0) * 40ms);
        }

        .chevron-animated {
            transition: transform 0.3s cubic-bezier(.4, 2, .3, 1);
        }

        .nav-item.show>.nav-link .chevron-animated {
            transform: rotate(180deg);
        }

        .nav-item>.nav-link .chevron-animated {
            transform: rotate(0deg);
        }

        @media (min-width: 992px) {
            .navbar-nav .dropdown:hover>.nav-link .chevron-animated {
                transform: rotate(180deg);
            }
        }
    </style>
@endonce

@php
    $level = $level ?? 1;
    $hasChildren = !empty($item['children']);
    $animationOrder = $animationOrder ?? 0;

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

<li class="nav-item {{ $level == 1 && $hasChildren ? 'dropdown' : '' }}"
    style="--animation-order: {{ $animationOrder }};">

    <a href="{{ $item['url'] }}" class="{{ $aClass }}"
        @if ($level == 1 && $hasChildren) role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false" @endif>
        {{ $item['text'] }}
        @if ($hasChildren)
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-chevron-down-icon lucide-chevron-down chevron-animated"
                style="transition: transform 0.3s cubic-bezier(.4,2,.3,1);">
                <path d="m6 9 6 6 6-6" />
            </svg>
        @endif
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
