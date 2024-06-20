<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="cart-container mt-5">
                <h2 class="text-center">Заказ 000001 от 01.01.2024</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Товар</th>
                            <th>Количество</th>
                            <th>Цена</th>
                            <th>Сумма</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                <div class="text-right">
                    <p><b>Итого: </b></p>
                    <p><b>Статус: </b></p>
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-danger" type="button">Удалить</button>
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


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\openserver\domains\music_house\resources\views/orders/order.blade.php ENDPATH**/ ?>