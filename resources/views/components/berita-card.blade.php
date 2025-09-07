@props(['news'])

@push('styles')
    @once
        <style>
            .news-card {
                transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
                border: none;
                border-radius: 10px;
                overflow: hidden;
            }

            .news-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2) !important;
            }

            .news-card__image {
                width: 100%;
                height: 200px;
                object-fit: cover;
            }

            .news-card__badge {
                background-color: rgba(51, 141, 36, 0.85);
                color: white;
                font-weight: 600;
                border-radius: 12px;
            }

            .news-card__title {
                color: rgba(51, 141, 36, 0.8);
                font-size: 1.2rem;
                font-weight: 700;
                line-height: 1.4;
                transition: color 0.3s ease;
            }

            .news-card:hover .news-card__title {
                color: #338D24;
            }

            .news-card__summary {
                font-size: 0.9rem;
                color: #666;
                text-align: justify;
                line-height: 1.6;
            }

            .news-card__meta {
                font-size: 0.85rem;
                color: #888;
                font-weight: 500;
            }

            .news-card__author {
                color: rgba(51, 141, 36, 0.8);
                font-weight: 600;
            }
        </style>
    @endonce
@endpush

@php
    $placeholder = 'https://placehold.co/400x200/EFEFEF/333333?text=No+Image';
@endphp

<div class="news-card card h-100">
    <div class="position-relative">
        <a href="/berita/{{ $news->slug_posts }}">
            <img src="{{ $news->gambar_posts ?? $placeholder }}" class="news-card__image" alt="Suku Tengger Yadnya Karo"
                onerror="this.onerror=null;this.src='{{ $placeholder }}';">
        </a>
        <span class="news-card__badge badge position-absolute bottom-0 start-0 m-3 px-3 py-1">
            {{ $news->nama_kategori ?? 'Wisata Budaya' }}
        </span>
    </div>

    <div class="card-body d-flex flex-column p-4">
        <h3 class="news-card__title mb-2">
            {{ $news->judul_posts ?? 'Suku Tengger di Tosari Gelar Pembukaan Yadnya Karo Tahun 2025' }}
        </h3>

        <p class="news-card__summary flex-grow-1 mb-3">
            {!! substr(
                strip_tags(
                    $news->konten_posts ??
                        'Warga Suku Tengger Bromo yang bermukim di wilayah Pasuruan alias Brang Kulon kembali merayakan Hari Raya Karo...',
                ),
                0,
                120,
            ) !!}...
        </p>

        <div class="news-card__meta d-flex justify-content-between align-items-center mt-auto">
            <span>{{ \Carbon\Carbon::parse($news->waktu_publish ?? '2025-08-09 13:07:00')->isoFormat('DD MMMM YYYY') }}</span>
            <span class="news-card__author">{{ $news->user_creator->nama_lengkap ?? 'John Doe' }}</span>
        </div>
    </div>
</div>
