<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>

        <?php echo $__env->yieldPushContent('styles'); ?>

        <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss', 'resources/js/app.js']); ?>

        
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
            rel="stylesheet">

    </head>

    <body class="d-flex flex-column" style="min-height: 100vh">
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

        
        <section
            style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('https://www.wartabromo.com/wp-content/uploads/2023/03/IMG-20230308-WA0043.jpg'); height: clamp(240px, 50vh, 480px); background-position: center; position: relative; background-size: cover;">

            <div style="width: 94%; position: absolute; bottom: 32px; left: 50%; transform: translateX(-50%);"
                class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <div class="mb-3 mb-md-0">
                    <?php if (isset($component)) { $__componentOriginale19f62b34dfe0bfdf95075badcb45bc2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale19f62b34dfe0bfdf95075badcb45bc2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.breadcrumb','data' => ['items' => $breadcrumbs]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('breadcrumb'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['items' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($breadcrumbs)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale19f62b34dfe0bfdf95075badcb45bc2)): ?>
<?php $attributes = $__attributesOriginale19f62b34dfe0bfdf95075badcb45bc2; ?>
<?php unset($__attributesOriginale19f62b34dfe0bfdf95075badcb45bc2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale19f62b34dfe0bfdf95075badcb45bc2)): ?>
<?php $component = $__componentOriginale19f62b34dfe0bfdf95075badcb45bc2; ?>
<?php unset($__componentOriginale19f62b34dfe0bfdf95075badcb45bc2); ?>
<?php endif; ?>
                    <div>
                        <div>
                            <h1 style="color:white; font-weight: normal; margin-bottom: 0; padding: 0"
                                class="fs-2 text-capitalize">
                                <span style="font-weight: bold" class="fs-1"><?php echo e($devTitle); ?></span> -
                                <span><?php echo e(str_replace('-', ' ', $devIndex)); ?></span>
                            </h1>
                        </div>
                    </div>
                </div>

                <div>
                    <select id="kategori_id" name="kategori_id"
                        class="form-select form-select-sm shadow-none form-select-custom">
                        <option value="null">Pilih <?php echo e($devTitle); ?></option>
                        <?php $__currentLoopData = $devLis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($item->slug_kategori); ?>"><?php echo e($item->nama_kategori); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
        </section>

        
        <main class="flex-grow-1 d-flex flex-column">
            
            <section style="width: 96%" class="mx-auto my-4 container-fluid">
                <?php if($devData->isNotEmpty()): ?>
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4 mb-4">
                        <?php $__currentLoopData = $devData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            
                            <div class="col">
                                <?php if (isset($component)) { $__componentOriginal14b498b52c33a1421ff8895e4557790f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal14b498b52c33a1421ff8895e4557790f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.post-card','data' => ['post' => $post,'categoryTitle' => $devTitle,'typeCategory' => $typeCategory,'slugCategory' => $slugCategory]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('post-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['post' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($post),'categoryTitle' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($devTitle),'typeCategory' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($typeCategory),'slugCategory' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($slugCategory)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal14b498b52c33a1421ff8895e4557790f)): ?>
<?php $attributes = $__attributesOriginal14b498b52c33a1421ff8895e4557790f; ?>
<?php unset($__attributesOriginal14b498b52c33a1421ff8895e4557790f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal14b498b52c33a1421ff8895e4557790f)): ?>
<?php $component = $__componentOriginal14b498b52c33a1421ff8895e4557790f; ?>
<?php unset($__componentOriginal14b498b52c33a1421ff8895e4557790f); ?>
<?php endif; ?>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    
                    <?php echo e($devData->links('components.dev-pagination')); ?>

                <?php endif; ?>
                <?php if($devData->isEmpty()): ?>
                    <p>Belum Ada Data yang Ditambahkan</p>
                <?php endif; ?>
            </section>
        </main>

        
        <?php if (isset($component)) { $__componentOriginal391633768592254ff49abdaadf69e71c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal391633768592254ff49abdaadf69e71c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.footer2','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('footer2'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal391633768592254ff49abdaadf69e71c)): ?>
<?php $attributes = $__attributesOriginal391633768592254ff49abdaadf69e71c; ?>
<?php unset($__attributesOriginal391633768592254ff49abdaadf69e71c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal391633768592254ff49abdaadf69e71c)): ?>
<?php $component = $__componentOriginal391633768592254ff49abdaadf69e71c; ?>
<?php unset($__componentOriginal391633768592254ff49abdaadf69e71c); ?>
<?php endif; ?>

        
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

        <script>
            $(document).ready(function() {
                $('#kategori_id').on('change', function() {
                    var slugKategori = $(this).val();
                    var typeCategory = "<?php echo e($typeCategory); ?>";
                    if (slugKategori && slugKategori !== 'null') {
                        window.location.href = `/postingan/${typeCategory}/${slugKategori}`;
                    }
                });
            });
        </script>
        <?php echo $__env->yieldPushContent('scripts'); ?>
    </body>

</html>
<?php /**PATH C:\Users\User\Downloads\folder\pasuruan\pasuruan gov\resources\views/post/index.blade.php ENDPATH**/ ?>