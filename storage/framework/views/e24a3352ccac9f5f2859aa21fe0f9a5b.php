<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss', 'resources/js/app.js']); ?>

        <!-- Swiper CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

        
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
        <link rel="stylesheet" type="text/css"
            href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

        <?php echo $__env->yieldPushContent('styles'); ?>
    </head>

    <body>
        
        <header>
            <?php if (isset($component)) { $__componentOriginala70429be12c0ed20dabf9047149c24ec = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala70429be12c0ed20dabf9047149c24ec = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.web-info','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('web-info'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala70429be12c0ed20dabf9047149c24ec)): ?>
<?php $attributes = $__attributesOriginala70429be12c0ed20dabf9047149c24ec; ?>
<?php unset($__attributesOriginala70429be12c0ed20dabf9047149c24ec); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala70429be12c0ed20dabf9047149c24ec)): ?>
<?php $component = $__componentOriginala70429be12c0ed20dabf9047149c24ec; ?>
<?php unset($__componentOriginala70429be12c0ed20dabf9047149c24ec); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal2489997eb8eea5e3fc9fb859cd403c90 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2489997eb8eea5e3fc9fb859cd403c90 = $attributes; } ?>
<?php $component = App\View\Components\DesktopNavigation::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('desktop-navigation'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\DesktopNavigation::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2489997eb8eea5e3fc9fb859cd403c90)): ?>
<?php $attributes = $__attributesOriginal2489997eb8eea5e3fc9fb859cd403c90; ?>
<?php unset($__attributesOriginal2489997eb8eea5e3fc9fb859cd403c90); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2489997eb8eea5e3fc9fb859cd403c90)): ?>
<?php $component = $__componentOriginal2489997eb8eea5e3fc9fb859cd403c90; ?>
<?php unset($__componentOriginal2489997eb8eea5e3fc9fb859cd403c90); ?>
<?php endif; ?>
        </header>

        <?php echo $__env->yieldContent('content'); ?>

        
        <?php if (isset($component)) { $__componentOriginal8a8716efb3c62a45938aca52e78e0322 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a8716efb3c62a45938aca52e78e0322 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.footer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $attributes = $__attributesOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $component = $__componentOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__componentOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>

        
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <?php echo $__env->yieldPushContent('scripts'); ?>
    </body>

</html>
<?php /**PATH C:\Users\User\Downloads\folder\pasuruan\pasuruan gov\resources\views/pemerintahan/layout.blade.php ENDPATH**/ ?>