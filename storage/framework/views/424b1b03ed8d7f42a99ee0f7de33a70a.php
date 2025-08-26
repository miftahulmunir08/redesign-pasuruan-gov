<?php $__env->startPush('styles'); ?>
    <style>
        .profile-card {
            border: 1px solid #e0e0e0;
            border-radius: 1rem;
            overflow: hidden;
            transition: border-color 0.3s ease, transform 0.3s ease;
        }

        .profile-card:hover {
            transform: translateY(-5px);
            border: 2px solid;
            border-color: #0B7642;
        }

        .profile-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center top;
        }

        @media (max-width: 767.98px) {
            .profile-img {
                height: 350px;
            }
        }

        .profile-body {
            padding: 2rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        @media (max-width: 767.98px) {
            .profile-body {
                text-align: center;
            }
        }

        .profile-subtitle {
            font-weight: 600;
            color: #0B7642;
            margin-bottom: 0.5rem;
        }

        .profile-title {
            font-weight: 700;
            margin-bottom: 0;
        }

        .profile-divider {
            color: #03D26F;
            border-width: 2px;
            opacity: 1;
            margin: 1.5rem 0;
            width: 150px;
            transition: width 0.3s ease-in-out;
        }

        .profile-card:hover .profile-divider {
            width: 100%;
        }

        @media (max-width: 768px) {
            .profile-divider {
                margin-left: auto;
                margin-right: auto;
            }
        }

        .profile-action {
            margin-top: auto;
        }

        .profile-action .btn {
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out, background-color 0.2s ease;
        }

        .profile-action .btn:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .profile-action .btn:active {
            transform: translateY(-1px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    
    <section
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('https://www.wartabromo.com/wp-content/uploads/2023/03/IMG-20230308-WA0043.jpg'); height: clamp(240px, 50vh, 480px); background-position: center; position: relative; background-size: cover;"
        class="d-flex align-items-center justify-content-center">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <h1 style="color: white;
                   font-weight: bold;
                   margin-bottom: 8px;
                   padding: 0"
                class="fs-1">
                <?php echo e($devTitle); ?>

            </h1>
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
        </div>
    </section>

    
    
    <section class="container-fluid my-5" style="padding: 0 128px">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bold">Bupati dan Wakil Bupati Kabupaten Pasuruan</h1>
            <p class="lead text-muted">Masa Jabatan <?php echo e($devBupati->pemerintahan_periode->periode); ?></p>
        </div>
        <div class="d-flex flex-column gap-4">
            <div class="card profile-card">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?php echo e($devBupati->gambar_pemerintahan); ?>" class="profile-img"
                            alt="Foto <?php echo e($devBupati->nama); ?>">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body profile-body">
                            <div class="text-content">
                                <h5 class="profile-subtitle"><?php echo e($devBupati->jabatan); ?></h5>
                                <h2 class="profile-title"><?php echo e($devBupati->nama); ?></h2>
                                <hr class="profile-divider">
                            </div>
                            <div class="profile-action">
                                <a href="https://id.wikipedia.org/wiki/Mochamad_Rusdi_Sutejo" target="_blank"
                                    class="btn btn-primary btn-lg px-4">
                                    Lihat Profil Lengkap
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card profile-card">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?php echo e($devWabup->gambar_pemerintahan); ?>" class="profile-img"
                            alt="Foto <?php echo e($devWabup->nama); ?>">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body profile-body">
                            <div class="text-content">
                                <h5 class="profile-subtitle"><?php echo e($devWabup->jabatan); ?></h5>
                                <h2 class="profile-title"><?php echo e($devWabup->nama); ?></h2>
                                <hr class="profile-divider">
                            </div>
                            <div class="profile-action">
                                <a href="https://id.wikipedia.org/wiki/Shobih_Asrori" target="_blank"
                                    class="btn btn-primary btn-lg px-4">
                                    Lihat Profil Lengkap
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('pemerintahan.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\User\Downloads\folder\pasuruan\pasuruan gov\resources\views/pemerintahan/bupati.blade.php ENDPATH**/ ?>