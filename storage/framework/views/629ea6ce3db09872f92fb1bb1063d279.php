<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="cart-container mt-5">
                <h2 class="text-center"><a href="<?php echo e(route('orders.show', $order)); ?>">Заказ <?php echo e($order->id); ?></a> от <?php echo e($order->created_at); ?></h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Товар</th>
                            <th>Количество</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $order->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($product->title); ?></td>
                                <td><?php echo e($product->pivot->qty); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <div class="text-right">
                    <p><b>Статус: </b><?php echo e($order->status); ?></p>
                </div>
                <div class="d-grid gap-2">
                    <form action="<?php echo e(route('orders.destroy', ['order' => $order])); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger">Удалить</button>
                    </form>
                    <?php if(Auth::check() && Auth::user()->is_admin): ?>
                        <button class="btn btn-dark" type="button">Подтвердить</button>
                        <button class="btn btn-dark" type="button">Выполнить</button>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\openserver\domains\Varov\music_house\resources\views/orders/show.blade.php ENDPATH**/ ?>