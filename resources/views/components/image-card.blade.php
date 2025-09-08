@props(['gambar'])

@push('styles')
    @once
        <style>
            .cover-card {
                position: relative;
                overflow: hidden;
                transition: transform 0.3s ease, box-shadow 0.3s ease;
                cursor: pointer;
                background-color: #e9ecef;
            }

            .cover-card:hover {
                box-shadow: 0 1rem 3rem rgba(33, 37, 41, 0.2) !important;
                transform: translateY(-8px);
            }

            .cover-card img {
                aspect-ratio: 3 / 2;
                object-fit: cover;
                width: 100%;
            }

            .cover-overlay {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: linear-gradient(to top, rgba(0, 0, 0, 0.9) 0%, rgba(0, 0, 0, 0.1) 50%, rgba(0, 0, 0, 0) 100%);
                color: white;
                display: flex;
                flex-direction: column;
                justify-content: flex-end;
                align-items: flex-start;
                padding: 1.5rem;
                opacity: 0;
                transition: opacity 0.4s ease;
            }

            .cover-card:hover .cover-overlay {
                opacity: 1;
            }

            .cover-title,
            .cover-subtitle {
                transform: translateY(20px);
                transition: transform 0.4s ease;
            }

            .cover-card:hover .cover-title,
            .cover-card:hover .cover-subtitle {
                transform: translateY(0);
            }

            .cover-title {
                font-size: 1.25rem;
                font-weight: 700;
                margin-bottom: 0.25rem;
                text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7);
            }

            .cover-subtitle {
                font-size: 0.9rem;
                font-weight: 400;
                transition-delay: 0.05s;
            }
        </style>
    @endonce
@endpush

<div class="">
    <a href="{{ $gambar->gambar_galeri }}" class="cover-card shadow-sm d-block text-decoration-none">
        <img src="{{ $gambar->gambar_galeri }}" alt="Sampul untuk {{ $gambar->nama_galeri }}">
        <div class="cover-overlay">
            <h6 class="cover-title fs-6">{{ $gambar->nama_galeri }}</h6>
        </div>
    </a>
</div>
