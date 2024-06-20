<?php $__env->startSection('content'); ?>
<main>
    <form method="POST" action="<?php echo e(route('categories.update', $category)); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <label for="title" class="form-label">Название категории</label>
        <input type="text" class="form-control" id="title" name="title" value="<?php echo e($category->title); ?>" required>
        <button type="submit" class="btn btn-dark">Изменить товар</button>
    </form>
</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\openserver\domains\music_house\resources\views/categories/edit.blade.php ENDPATH**/ ?>