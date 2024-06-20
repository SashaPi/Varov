<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="cart-container mt-5">
                <h2 class="text-center">Мои заказы</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Заказ</th>
                            <th>Сумма</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><a href="<?php echo e(route('orders.show', $order)); ?>">Заказ <?php echo e($order->id); ?></a> от <?php echo e($order->created_at); ?></td>
                                <td><?php echo e($order->sum); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<form class="text-center" action="<?php echo e(route('logout')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <button type="submit" class="btn btn-danger">Выход из аккаунта</button>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\openserver\domains\music_house\resources\views/orders/index.blade.php ENDPATH**/ ?>