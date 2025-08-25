<nav class="navbar navbar-expand-sm w-100 justify-content-center p-0 d-none d-lg-flex">
    <ul class="navbar-nav">
        <?php $__currentLoopData = $menuItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo $__env->make('components._menu-item', ['item' => $item], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</nav>
<?php /**PATH C:\Users\User\Downloads\folder\pasuruan\pasuruan gov\resources\views/components/desktop-navigation.blade.php ENDPATH**/ ?>