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
                        <tr>
                            <td><a href="order">Заказ 000001</a></td>
                            <td>3.900 ₽</td>
                        </tr>
                        <tr>
                            <td>Заказ 000002</td>
                            <td>3.900 ₽</td>
                        </tr>
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


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\openserver\domains\music_house\resources\views/orders.blade.php ENDPATH**/ ?>