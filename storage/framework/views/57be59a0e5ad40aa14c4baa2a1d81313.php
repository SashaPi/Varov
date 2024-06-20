<?php $__env->startSection('content'); ?>
<main>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="cart-container mt-5">
                <h2 class="text-center">Заказ 000001</h2>
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
                            <td>DAVINCI DC-50A BK Гитара классическая 7/8</td>
                            <td>1</td>
                            <td>3.900 ₽</td>
                            <td>3.900 ₽</td>
                        </tr>
                    </tbody>
                </table>
                <div class="text-right">
                    <p><b>Итого: </b>3.900 ₽</p>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="JS/bootstrap.bundle.min.js"></script>
<script src="js/code.jquery.com_jquery-3.7.1.min.js"></script>
</main>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\openserver\domains\music_house\resources\views/order.blade.php ENDPATH**/ ?>