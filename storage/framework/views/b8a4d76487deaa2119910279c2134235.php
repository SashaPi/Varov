<?php $__env->startSection('content'); ?>
        <form method="POST" action="<?php echo e(route('products.update', $product)); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <label for="title" class="form-label">Название</label>
            <input type="text" class="form-control" id="title" name="title" value="<?php echo e($product->title); ?>" required>
            <label for="category" class="form-label">Категория</label>
            <select name="category_id" id="category_id" class="form-select">
                <option value="<?php echo e($product->category_id); ?>"><?php echo e($product->category->title); ?></option>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($category->id); ?>"><?php echo e($category->title); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <label for="title" class="form-label">Производитель</label>
            <input type="text" class="form-control" id="country" name="country" value="<?php echo e($product->country); ?>" required>
            <label for="title" class="form-label">Год выпуска</label>
            <input type="text" class="form-control" id="year" name="year" value="<?php echo e($product->year); ?>" required>
            <label for="title" class="form-label">Цена</label>
            <input type="text" class="form-control" id="price" name="price" value="<?php echo e($product->price); ?>" required>
            <label for="title" class="form-label">Количество</label>
            <input type="text" class="form-control" id="qty" name="qty" value="<?php echo e($product->qty); ?>" required>
            <label for="img" class="form-label">Изображение</label>
            <input type="file" class="form-control" id="img" name="img" value="<?php echo e($product->img_path); ?>">
            <button type="submit" class="btn btn-dark">Изменить товар</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\openserver\domains\Varov\music_house\resources\views/products/edit.blade.php ENDPATH**/ ?>