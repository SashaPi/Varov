<?php $__env->startSection('content'); ?>
    <h2 class="text-center mt-5"><?php echo e($product->title); ?></h2>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="d-flex align-items-center">
                    <img src="<?php echo e(asset($product->img_path)); ?>" alt="" style="height: 300px; object-fit: contain;"">
                    <div class="p-5">
                        <p><b>Название:</b><?php echo e($product->title); ?></p>
                        <p><b>Категория: </b><?php echo e($product->category->title); ?></p>
                        <p><b>Производитель: </b><?php echo e($product->country); ?></p>
                        <p><b>Год выпуска: </b><?php echo e($product->year); ?></p>
                        <p><b>Цена: </b><?php echo e($product->price); ?></p>
                        <div class="d-grid gap-2">
                            <a href="<?php echo e(route('cart.store', ['product_id'=>$product->id])); ?>" class="btn btn-dark align-items-center">Добавить в корзину</a>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\openserver\domains\music_house\resources\views/products/show.blade.php ENDPATH**/ ?>