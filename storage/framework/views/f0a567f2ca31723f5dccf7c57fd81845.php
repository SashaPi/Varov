    
    <?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="login-form mt-5">
                    <h2 class="text-center">Вход</h2>
                    <form action="<?php echo e(route('login')); ?>" method = "POST">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <input type="text" class="form-control mb-3" id="login" name="login" placeholder="Логин" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control mb-3" id="password" name="password" placeholder="Пароль" required>
                        </div>
                        <div class="form-group text-center">
                            <?php if($errors->any()): ?>
                            <div class="alert alert-danger">
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                            <?php endif; ?>
                            <button type="submit" class="btn btn-dark mb-3">Войти</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\openserver\domains\Varov\music_house\resources\views/login.blade.php ENDPATH**/ ?>