<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['post', 'categoryTitle']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['post', 'categoryTitle']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<?php if (! $__env->hasRenderedOnce('7b074d8e-ccfd-49d3-85b0-7dd738aed6b6')): $__env->markAsRenderedOnce('7b074d8e-ccfd-49d3-85b0-7dd738aed6b6'); ?>
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
<?php endif; ?>

<div class="card px-0 rounded h-100 d-flex flex-column">
    <div class="position-relative">
        <?php if(isset($post->gambar_posts_2)): ?>
            <div class="slick-slider"
                data-slick='{"infinite": true, "autoplay": false, "arrows": false, "slidesToShow": 1}'>
                <div class="slick-slide">
                    <a
                        href="/postingan/<?php echo e($post->kategori->slug_kategori); ?>/<?php echo e($post->kategori->tipe_kategori); ?>/<?php echo e($post->slug_posts); ?>">
                        <img src="<?php echo e($post->gambar_posts); ?>" class="post-card__image rounded-top" alt="Blog">
                    </a>
                </div>
                <div class="slick-slide">
                    <a
                        href="/postingan/<?php echo e($post->kategori->slug_kategori); ?>/<?php echo e($post->kategori->tipe_kategori); ?>/<?php echo e($post->slug_posts); ?>">
                        <img src="<?php echo e($post->gambar_posts_2); ?>" class="post-card__image rounded-top" alt="Blog">
                    </a>
                </div>
            </div>
        <?php else: ?>
            <div>
                <a
                    href="/postingan/<?php echo e($post->kategori->slug_kategori); ?>/<?php echo e($post->kategori->tipe_kategori); ?>/<?php echo e($post->slug_posts); ?>">
                    <img src="<?php echo e($post->gambar_posts); ?>" class="post-card__image rounded-top" alt="Blog">
                </a>
            </div>
        <?php endif; ?>
        <span class="post-card__badge badge position-absolute bottom-0 end-0 m-3">
            <?php echo e($post->kategori->nama_kategori); ?>

        </span>
    </div>

    
    <div class="m-2 d-flex flex-column flex-grow-1">
        <p class="post-card__title fw-semibold fs-6 mb-1">
            <?php echo e($post->judul_posts); ?>

        </p>

        <div class="d-flex flex-column flex-grow-1">
            <p class="post-card__summary flex-grow-1">
                <?php echo substr(strip_tags($post->konten_posts), 0, 150); ?>...
            </p>
            <p class="post-card__meta d-flex flex-row justify-content-between mb-0 fw-bold">
                <span><?php echo e(Carbon\Carbon::parse($post->waktu_publish)->isoFormat('DD MMMM YYYY')); ?></span>
                <span class="post-card__author"><?php echo e($post->user_creator->nama_lengkap); ?></span>
            </p>
        </div>
    </div>
</div>

<?php if (! $__env->hasRenderedOnce('15a4e064-fbd7-49fe-baf8-b683aa242894')): $__env->markAsRenderedOnce('15a4e064-fbd7-49fe-baf8-b683aa242894'); ?>
    <?php $__env->startPush('scripts'); ?>
        <script>
            $(document).ready(function() {
                $('.slick-slider').slick();
            });
        </script>
    <?php $__env->stopPush(); ?>
<?php endif; ?>
<?php /**PATH C:\Users\User\Downloads\folder\pasuruan\pasuruan gov\resources\views/components/post-card.blade.php ENDPATH**/ ?>