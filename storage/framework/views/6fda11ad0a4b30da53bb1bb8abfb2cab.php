    
    <?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="cart-container mt-5">
                    <h2>Корзина</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Товар</th>
                                <th>Количество</th>
                                <th>Цена</th>
                                <th>Сумма</th>
                                <th>Действия</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($product->title); ?></td>
                                <td>
                                    <form action="<?php echo e(route('cart.change', ['product_id'=>$product->id])); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <input type="number" name="qty" value="<?php echo e($product->pivot->qty); ?>" min="0" max="<?php echo e($product->qty); ?>">
                                        <button type="submit" class="btn btn-sm btn-dark">Изменить</button>
                                    </form>
                                </td>
                                <td><?php echo e($product->price); ?></td>
                                <td><?php echo e($product->pivot->qty * $product->price); ?></td>
                                <td>
                                    <form action="<?php echo e(route('cart.destroy', ['id'=>$product->id])); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-danger">Удалить</button>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <div class="text-right">
                        <p><b>Итого: </b></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="login-form mt-5">
                    <h2 class="text-center">Подтверждение заказа</h2>
                    <form action="<?php echo e(route('orders.store')); ?>" method="POST" class="text-center">
                        <?php echo csrf_field(); ?>
                        <label for="password" class="form-label">Пароль</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                        <button class="btn btn-dark" type="submit">Оформить заказ</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\openserver\domains\Varov\music_house\resources\views/cart.blade.php ENDPATH**/ ?>