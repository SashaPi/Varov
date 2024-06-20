<?php $__env->startSection('content'); ?>
    <a href="<?php echo e(route('categories.create')); ?>" class="btn btn-dark my-3"> Добавить новую категорию</a>
    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <h3 class="text-center"><?php echo e($category->title); ?></h3>
    <div class= "text-center">
        <a href="<?php echo e(route('categories.edit', $category)); ?>" class="btn btn-dark">Изменить</a>
        <form action="<?php echo e(route('categories.destroy', $category)); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <button type="submit" class="btn btn-dark text-center">Удалить</button>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\openserver\domains\music_house\resources\views/categories/index.blade.php ENDPATH**/ ?>