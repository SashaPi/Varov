<?php $__env->startSection('content'); ?>
    <div class="mx-5">
        <h1 class="text-center mt-5">Каталог</h1>
        <form action="<?php echo e(route('products.filter')); ?>" method="POST" class="d-flex flex-wrap">
            <?php echo csrf_field(); ?>
            <div>
                <p class="m-0">Категория:</p>
                <select name="filter" class="filter" id="filter" class="form-select mb-3">
                    <option value="all">Все</option>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($category->id); ?>"><?php echo e($category->title); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div>
                <p class="m-0">Сортировка:</p>
                <select name="sort" id="sort" class="form-select ms-2 mb-3">
                    <option value="country">По стране (А->Я)</option>
                    <option value="title">По наименованию (А->Я)</option>
                    <option value="price">Сначала дешевле</option>
                </select>
            </div>
            <button type="submit" class="btn btn-dark ms-2 mb-3 align-self-end">Применить</button>
        </form>
        <?php if(Auth::check() && Auth::user()->is_admin): ?>
            <a href="<?php echo e(route('products.create')); ?>" class="btn btn-dark my-3"> Добавить новый товар</a>
        <?php endif; ?>
        <div class="row">
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-6 col-md-4 col-lg-3 mb-3">
                    <div class="card h-100 d-flex flex-column justify-content-between" style="width: 100%;">
                        <img src="<?php echo e(asset($product->img_path)); ?>" class="card-img-top" style="height: 200px; object-fit: contain;" alt="...">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title"><?php echo e($product->title); ?></h5>
                            <p class="card-text"><?php echo e($product->price); ?></p>
                            <div class="mt-auto text-center">
                                <a href="<?php echo e(route('products.show', $product)); ?>" class="btn btn-dark">Подробнее</a>
                                <?php if(Auth::check() && Auth::user()->is_admin): ?>
                                    <a href="<?php echo e(route('products.edit', $product)); ?>" class="btn btn-dark">Изменить</a>
                                    <a href="<?php echo e(route('products.destroy', $product)); ?>" class="btn btn-danger">Удалить</a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\openserver\domains\Varov\music_house\resources\views/products/index.blade.php ENDPATH**/ ?>