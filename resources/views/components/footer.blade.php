@php
    // Data untuk ikon sosial media, mudah diubah atau diisi dari database nanti
    $socials = [
        ['url' => '#', 'icon' => 'X'],
        ['url' => '#', 'icon' => 'X'],
        ['url' => '#', 'icon' => 'X'],
        ['url' => '#', 'icon' => 'X'],
    ];
@endphp

@once
    <style>
        .footer-bg {
            background-color: #0B7642;
        }

        .social-icon {
            background-color: #03D26F;
            width: 40px;
            height: 40px;
            transition: transform 0.2s ease-in-out, background-color 0.2s ease-in-out;
        }

        .social-icon:hover {
            background-color: #00c365;
            transform: translateY(-4px) scale(1.1);
        }

        .footer-text,
        .footer-text a {
            font-size: 0.875rem;
            color: white;
            text-decoration: none;
        }

        .footer-text a:hover {
            text-decoration: underline;
        }
    </style>
@endonce

<footer class="footer-bg d-flex flex-column flex-md-row justify-content-between align-items-center px-4 py-3">
    {{-- Bagian Kiri: Ikon Sosial Media --}}
    <ul class="list-unstyled d-flex flex-row gap-2 m-0">
        @foreach ($socials as $social)
            <li>
                <a href="{{ $social['url'] }}"
                    class="social-icon rounded d-flex align-items-center justify-content-center text-white fw-bold text-decoration-none">
                    <span>{{ $social['icon'] }}</span>
                </a>
            </li>
        @endforeach
    </ul>

    {{-- Bagian Kanan: Copyright dan Link --}}
    <div class="footer-text fw-semibold mt-2 mt-md-0">
        <a href="/">{{ date('Y') }} Website Kabupaten Pasuruan</a>
        <span>|</span>
        <a href="#">Kebijakan Privasi</a>
    </div>

</footer>
