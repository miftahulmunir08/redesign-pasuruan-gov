<?php if (! $__env->hasRenderedOnce('e5ec3745-bb4a-4e55-bc61-e8640c65388a')): $__env->markAsRenderedOnce('e5ec3745-bb4a-4e55-bc61-e8640c65388a'); ?>
    <style>
        .pagination.gap-2 .page-link {
            border-radius: var(--bs-border-radius) !important;
        }

        .pagination .page-link {
            background-color: #e2e2e2;
            color: #ffffff;
            border: none;
            font-weight: bold;
        }

        .pagination .page-link:hover {
            background-color: #03D26F;
        }

        .pagination .page-item.active .page-link {
            background-color: #03D26F;
            color: #ffffff;
        }

        .pagination .page-item.disabled .page-link {
            background-color: #e2e2e2;
            opacity: 0.7;
        }

        .pagination.gap-2 .page-link {
            border-radius: var(--bs-border-radius) !important;
        }
    </style>
<?php endif; ?>

<nav>
    <ul class="pagination justify-content-center gap-2">
        <?php if($paginator->onFirstPage()): ?>
            <li class="page-item disabled" aria-disabled="true">
                <span class="page-link d-flex align-items-center h-100" aria-label="<?php echo app('translator')->get('pagination.previous'); ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-chevron-left">
                        <path d="m15 18-6-6 6-6" />
                    </svg>
                </span>
            </li>
        <?php else: ?>
            <li class="page-item">
                <a class="page-link d-flex align-items-center h-100" href="<?php echo e($paginator->previousPageUrl()); ?>"
                    rel="prev" aria-label="<?php echo app('translator')->get('pagination.previous'); ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-chevron-left">
                        <path d="m15 18-6-6 6-6" />
                    </svg>
                </a>
            </li>
        <?php endif; ?>

        <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(is_string($element)): ?>
                <li class="page-item disabled" aria-disabled="true"><span class="page-link"><?php echo e($element); ?></span>
                </li>
            <?php endif; ?>

            <?php if(is_array($element)): ?>
                <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($page == $paginator->currentPage()): ?>
                        <li class="page-item active" aria-current="page"><span
                                class="page-link"><?php echo e($page); ?></span></li>
                    <?php else: ?>
                        <li class="page-item"><a class="page-link" href="<?php echo e($url); ?>"><?php echo e($page); ?></a>
                        </li>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php if($paginator->hasMorePages()): ?>
            <li class="page-item">
                <a class="page-link d-flex align-items-center h-100" href="<?php echo e($paginator->nextPageUrl()); ?>"
                    rel="next" aria-label="<?php echo app('translator')->get('pagination.next'); ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-chevron-right">
                        <path d="m9 18 6-6-6-6" />
                    </svg>
                </a>
            </li>
        <?php else: ?>
            <li class="page-item disabled" aria-disabled="true">
                <span class="page-link d-flex align-items-center h-100" aria-label="<?php echo app('translator')->get('pagination.next'); ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-chevron-right">
                        <path d="m9 18 6-6-6-6" />
                    </svg>
                </span>
            </li>
        <?php endif; ?>
    </ul>
</nav>
<?php /**PATH C:\Users\User\Downloads\folder\pasuruan\pasuruan gov\resources\views/components/dev-pagination.blade.php ENDPATH**/ ?>