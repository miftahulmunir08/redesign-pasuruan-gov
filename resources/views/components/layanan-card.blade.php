@props(['layanan', 'categoryTitle'])

@once
    <style>
        .layanan-card__image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .layanan-card__badge {
            background-color: rgba(51, 141, 36, 0.8);
        }

        .layanan-card__title {
            color: rgba(51, 141, 36, 0.8);
            text-align: start;
        }

        .layanan-card__summary {
            font-size: smaller;
            color: gray;
            text-align: justify;
        }

        .layanan-card__meta {
            font-size: smaller;
        }

        .layanan-card__author {
            color: rgba(51, 141, 36, 0.8);
        }

        .slick-slider {
            min-height: 0;
            min-width: 0;
        }

        .slick-slide {
            height: auto;
        }

        .card {
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .card:hover {
            transform: translateY(-4px);
            box-shadow: 0 0.2rem 0.2rem rgba(0, 0, 0, 0.175) !important;
        }

        .layanan-card__title {
            transition: color 0.3s ease-in-out;
        }

        .card:hover .layanan-card__title {
            color: #338D24;
        }
    </style>
@endonce

@php
    $placeholder = 'https://placehold.co/400x200/EFEFEF/333333?text=No+Image';
@endphp

<div class="card px-0 rounded h-100 d-flex flex-column">
    <div class="position-relative">
        <div class="">
            <a href="{{ $layanan->external_url }}" target="_blank">
                <img src="{{ $layanan->gambar_posts ?? $placeholder }}" class="layanan-card__image rounded-top"
                    alt="Blog" onerror="this.onerror=null;this.src='{{ $placeholder }}';">
            </a>
        </div>
        <span class="layanan-card__badge badge position-absolute bottom-0 end-0 m-3">
            {{ $layanan->kategori->nama_kategori }}
        </span>
    </div>

    {{-- Konten Teks --}}
    <div class="p-3 d-flex flex-column flex-grow-1">
        <p class="layanan-card__title fs-6 mb-1" style="font-weight: 900">
            {{ $layanan->judul_posts }}
        </p>

        <div class="d-flex flex-column flex-grow-1">
            <p class="layanan-card__summary flex-grow-1">
                {!! substr(strip_tags($layanan->konten_posts), 0, 150) !!}...
            </p>
            <p class="layanan-card__meta d-flex flex-row justify-content-between mb-0 fw-medium">
                <span>{{ Carbon\Carbon::parse($layanan->waktu_publish)->isoFormat('DD MMMM YYYY') }}</span>
                <span class="layanan-card__author">{{ $layanan->user_creator->nama_lengkap }}</span>
            </p>
        </div>
    </div>
</div>
