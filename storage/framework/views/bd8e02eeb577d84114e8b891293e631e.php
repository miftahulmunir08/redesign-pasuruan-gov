<?php if (! $__env->hasRenderedOnce('b52f1d67-f5a8-4819-b888-1cb6f5e5be1f')): $__env->markAsRenderedOnce('b52f1d67-f5a8-4819-b888-1cb6f5e5be1f'); ?>
    <style>
        /* CSS kustom HANYA untuk enhancement (animasi) yang tidak ada di Bootstrap */

        /* --- EFEK UTAMA PADA NAV-LINK --- */
        .navbar-nav .nav-link {
            transition: color 0.2s ease-in-out;
        }

        .navbar-nav>.nav-item>.nav-link::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0.5rem;
            right: 0.5rem;
            height: 3px;
            background-color: var(--bs-primary);
            border-radius: 2px;
            transform: scaleX(0);
            transition: transform 0.25s ease-out;
        }

        .navbar-nav .nav-link:hover::after,
        .navbar-nav .nav-item.show>.nav-link::after,
        .navbar-nav .nav-link.active::after {
            transform: scaleX(1);
        }

        /* --- ANIMASI DROPDOWN MENU --- */
        .navbar-nav .dropdown-menu {
            display: block;
            opacity: 0;
            visibility: hidden;
            transform: translateY(10px);
            transition: all 0.2s ease-in-out;
            margin-top: 0.5rem !important;
            max-height: 400px;
            overflow-y: auto;
        }

        /* Styling scrollbar */
        .navbar-nav .dropdown-menu::-webkit-scrollbar {
            width: 6px;
        }

        .navbar-nav .dropdown-menu::-webkit-scrollbar-track {
            background: transparent;
        }

        .navbar-nav .dropdown-menu::-webkit-scrollbar-thumb {
            background: #ccc;
            border-radius: 10px;
        }

        .navbar-nav .dropdown-menu::-webkit-scrollbar-thumb:hover {
            background: #aaa;
        }

        @media (min-width: 992px) {
            .navbar-nav .dropdown:hover>.dropdown-menu {
                opacity: 1;
                visibility: visible;
                transform: translateY(0);
            }
        }

        /* --- EFEK PADA DROPDOWN ITEM --- */
        .navbar-nav .dropdown-item {
            transition: background-color 0.2s ease, color 0.2s ease;
        }

        /* --- ANIMASI PANAH DROPDOWN --- */
        .navbar-nav .dropdown-toggle::after {
            transition: transform 0.2s ease-out;
        }

        .navbar-nav .nav-item.show>.dropdown-toggle::after {
            transform: rotate(180deg);
        }

        .navbar-nav .dropdown-item.is-submenu-header {
            font-weight: 700;
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: var(--bs-secondary-color);
            cursor: default;
        }

        .navbar-nav .dropdown-item.is-submenu-header:hover,
        .navbar-nav .dropdown-item.is-submenu-header:focus {
            background-color: transparent;
            color: var(--bs-secondary-color);
        }

        /* --- PERUBAHAN: ANIMASI ITEM DROPDOWN (STAGGERED) --- */
        /* Kondisi awal item (sebelum muncul) */
        .navbar-nav .dropdown-menu .nav-item {
            opacity: 0;
            transform: translateX(-15px);
            transition: opacity 0.3s ease, transform 0.3s ease;
        }

        /* Kondisi akhir item (saat dropdown terbuka) */
        .navbar-nav .dropdown:hover>.dropdown-menu .nav-item {
            opacity: 1;
            transform: translateX(0);
            /* Kunci animasi staggered: delay dihitung berdasarkan urutan item */
            transition-delay: calc(var(--animation-order, 0) * 40ms);
        }

        /* --- AKHIR PERUBAHAN --- */
    </style>
<?php endif; ?>


<?php
    $level = $level ?? 1;
    $hasChildren = !empty($item['children']);
    $animationOrder = $animationOrder ?? 0; // Ambil urutan animasi

    $indentationClass = $level > 1 ? ' ps-' . ($level + 1) : '';
    $aClass = $level > 1 ? 'dropdown-item' : 'nav-link';
    $aClass .= $indentationClass;

    if ($level == 1 && $hasChildren) {
        $aClass .= ' dropdown-toggle';
    }

    if ($level > 1 && $hasChildren) {
        $aClass .= ' is-submenu-header';
    }
?>


<li class="nav-item <?php echo e($level == 1 && $hasChildren ? 'dropdown' : ''); ?>"
    style="--animation-order: <?php echo e($animationOrder); ?>;">

    <a href="<?php echo e($item['url']); ?>" class="<?php echo e($aClass); ?>"
        <?php if($level == 1 && $hasChildren): ?> role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false" <?php endif; ?>>
        <?php echo e($item['text']); ?>

    </a>

    <?php if($level == 1 && $hasChildren): ?>
        <ul class="dropdown-menu">
            <?php $__currentLoopData = $item['children']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <?php echo $__env->make('components._menu-item', [
                    'item' => $child,
                    'level' => $level + 1,
                    'animationOrder' => $loop->iteration,
                ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php endif; ?>

    <?php if($level > 1 && $hasChildren): ?>
        <?php $__currentLoopData = $item['children']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
            <?php echo $__env->make('components._menu-item', [
                'item' => $child,
                'level' => $level + 1,
                'animationOrder' => $loop->iteration,
            ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
</li>
<?php /**PATH C:\Users\User\Downloads\folder\pasuruan\pasuruan gov\resources\views/components/_menu-item.blade.php ENDPATH**/ ?>