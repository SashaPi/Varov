    
    <?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="registration-form mt-5">
                    <h2 class="text-center mb-3">Регистрация</h2>
                    <form action="<?php echo e(route('register')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <input type="text" class="form-control mb-3" id="name" name="name" placeholder="Имя" value="<?php echo e(old('name')); ?>" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control mb-3" id="surname" name="surname" placeholder="Фамилия" value="<?php echo e(old('surname')); ?>" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control mb-3" id="patronymic" name="patronymic" placeholder="Отчество" value="<?php echo e(old('patronymic')); ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control mb-3" id="login" name="login" placeholder="Логин" value="<?php echo e(old('login')); ?>" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control mb-3" id="email" name="email" placeholder="email@mail.ru" value="<?php echo e(old('email')); ?>" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control mb-3" id="password" name="password" placeholder="Пароль" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control mb-3"  id="password_confirmation" name="password_confirmation" placeholder="Подтверждение пароля" required>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="agree">
                            <label class="form-check-label" for="agree">Я согласен с обработкой персональных данных</label>
                        </div>
                        <div class="text-center">
                            <?php if($errors->any()): ?>
                            <div class="alert alert-danger">
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                            <?php endif; ?>
                            <button type="submit" class="btn btn-dark mt-3">Зарегистрироваться</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\openserver\domains\Varov\music_house\resources\views/registration.blade.php ENDPATH**/ ?>