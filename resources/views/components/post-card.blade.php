@props(['post', 'categoryTitle'])

@once
    <style>
        /* Style asli Anda, dipindahkan dari inline ke sini */
        .post-card__image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .post-card__badge {
            background-color: #03D26F;
        }

        .post-card__title {
            color: #0B7642;
            text-align: justify;
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
            color: #0B7642;
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
            transform: translateY(-8px);
            box-shadow: 0 1rem 1rem rgba(0, 0, 0, 0.175) !important;
        }

        .post-card__title {
            transition: color 0.3s ease-in-out;
        }

        .card:hover .post-card__title {
            color: #03D26F;
        }
    </style>
@endonce

<div class="card px-0 rounded h-100 d-flex flex-column">
    <div class="position-relative">
        @if (isset($post->gambar_posts_2))
            <div class="slick-slider"
                data-slick='{"infinite": true, "autoplay": false, "arrows": false, "slidesToShow": 1}'>
                <div class="slick-slide">
                    <a
                        href="/postingan/{{ $post->kategori->slug_kategori }}/{{ $post->kategori->tipe_kategori }}/{{ $post->slug_posts }}">
                        <img src="{{ $post->gambar_posts }}" class="post-card__image rounded-top" alt="Blog">
                    </a>
                </div>
                <div class="slick-slide">
                    <a
                        href="/postingan/{{ $post->kategori->slug_kategori }}/{{ $post->kategori->tipe_kategori }}/{{ $post->slug_posts }}">
                        <img src="{{ $post->gambar_posts_2 }}" class="post-card__image rounded-top" alt="Blog">
                    </a>
                </div>
            </div>
        @else
            <div>
                <a
                    href="/postingan/{{ $post->kategori->slug_kategori }}/{{ $post->kategori->tipe_kategori }}/{{ $post->slug_posts }}">
                    <img src="{{ $post->gambar_posts }}" class="post-card__image rounded-top" alt="Blog">
                </a>
            </div>
        @endif
        <span class="post-card__badge badge position-absolute bottom-0 end-0 m-3">
            {{ $post->kategori->nama_kategori }}
        </span>
    </div>

    {{-- Konten Teks --}}
    <div class="m-2 d-flex flex-column flex-grow-1">
        <p class="post-card__title fw-semibold fs-6 mb-1">
            {{ $post->judul_posts }}
        </p>

        <div class="d-flex flex-column flex-grow-1">
            <p class="post-card__summary flex-grow-1">
                {!! substr(strip_tags($post->konten_posts), 0, 150) !!}...
            </p>
            <p class="post-card__meta d-flex flex-row justify-content-between mb-0 fw-bold">
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
