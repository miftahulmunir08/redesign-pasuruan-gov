@props(['post', 'categoryTitle', 'typeCategory', 'slugCategory'])

@once
    <style>
        .post-card__image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .post-card__badge {
            /* background-color: #338D24; */
            background-color: rgba(51, 141, 36, 0.8);
        }

        .post-card__title {
            color: rgba(51, 141, 36, 0.8);
            text-align: start;
        }

        .post-card__summary {
            font-size: smaller;
            color: gray;
            text-align: justify;
        }

        .post-card__meta {
            font-size: smaller;
        }

        .post-card__author {
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

        .post-card__title {
            transition: color 0.3s ease-in-out;
        }

        .card:hover .post-card__title {
            color: #338D24;
        }
    </style>
@endonce

@php
    $placeholder = 'https://placehold.co/400x200/EFEFEF/333333?text=No+Image';
@endphp

<div class="card px-0 rounded h-100 d-flex flex-column">
    <div class="position-relative">
        @if (isset($post->gambar_posts_2))
            <div class="slick-slider"
                data-slick='{"infinite": true, "autoplay": false, "arrows": false, "slidesToShow": 1}'>
                <div class="slick-slide">
                    <a href="/postingan/{{ $typeCategory }}/{{ $slugCategory }}/{{ $post->slug_posts }}">
                        <img src="{{ $post->gambar_posts ?? $placeholder }}" class="post-card__image rounded-top"
                            alt="Blog" onerror="this.onerror=null;this.src='{{ $placeholder }}';">
                    </a>
                </div>
                <div class="slick-slide">
                    <a href="/postingan/{{ $typeCategory }}/{{ $slugCategory }}/{{ $post->slug_posts }}">
                        <img src="{{ $post->gambar_posts_2 ?? $placeholder }}" class="post-card__image rounded-top"
                            alt="Blog" onerror="this.onerror=null;this.src='{{ $placeholder }}';">
                    </a>
                </div>
            </div>
        @else
            <div>
                <a href="/postingan/{{ $typeCategory }}/{{ $slugCategory }}/{{ $post->slug_posts }}">
                    <img src="{{ $post->gambar_posts ?? $placeholder }}" class="post-card__image rounded-top"
                        alt="Blog" onerror="this.onerror=null;this.src='{{ $placeholder }}';">
                </a>
            </div>
        @endif
        <span class="post-card__badge badge position-absolute bottom-0 end-0 m-3">
            {{ $post->kategori->nama_kategori }}
        </span>
    </div>

    {{-- Konten Teks --}}
    <div class="p-3 d-flex flex-column flex-grow-1">
        <p class="post-card__title fs-6 mb-1" style="font-weight: 900">
            {{ $post->judul_posts }}
        </p>

        <div class="d-flex flex-column flex-grow-1">
            <p class="post-card__summary flex-grow-1">
                {!! substr(strip_tags($post->konten_posts), 0, 150) !!}...
            </p>
            <p class="post-card__meta d-flex flex-row justify-content-between mb-0 fw-medium">
                <span>{{ Carbon\Carbon::parse($post->waktu_publish)->isoFormat('DD MMMM YYYY') }}</span>
                <span class="post-card__author">{{ $post->user_creator->nama_lengkap }}</span>
            </p>
        </div>
    </div>
</div>

@once
    @push('scripts')
        <script>
            $(document).ready(function() {
                $('.slick-slider').slick();
            });
        </script>
    @endpush
@endonce
