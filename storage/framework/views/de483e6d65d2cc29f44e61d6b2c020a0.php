    
    <?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <h2>Контакты</h2>
            <p><b> Мы находимся по адресу: </b>Наро-Фоминский Калининец д36/2</p>
            <p><b>Контактный телефон: </b>+7 (999)-888-77-66</p>
            <img src="<?php echo e(asset('Assets/map.png')); ?>" alt="" width="690px" class="d-inline-block align-text-top">

        </div>

    </div>
</div>
    <script src="JS/bootstrap.bundle.min.js"></script>
    <script src="js/code.jquery.com_jquery-3.7.1.min.js"></script>
    <?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\openserver\domains\Varov\music_house\resources\views/contacts.blade.php ENDPATH**/ ?>