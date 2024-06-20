<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(asset('CSS/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('CSS/style.css')); ?>">
    <title>Music House</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?php echo e(route('index')); ?>">
                  <img src="<?php echo e(asset('Assets/logo.svg')); ?>" alt="" width="30px" class="d-inline-block align-text-top">
                  Music House
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('index')); ?>">О нас</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('contacts')); ?>">Контакты</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('products.index')); ?>">Каталог</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('registration')); ?>">Регистрация</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('login')); ?>">Вход</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('cart.index')); ?>">Корзина</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('orders.index')); ?>">Мои заказы</a>
                      </li>
                    </ul>
                  </div>
              </div>
        </nav>
    </header>
    <?php if(Session::has('info')): ?>
        <div class="alert alert-warning">
            <?php echo e('info'); ?>

        </div>
    <?php endif; ?>
    <?php if(isset($info)): ?>
        <div class="alert alert-warning">
            <?php echo e($info); ?>

        </div>
    <?php endif; ?>
    <main>
    <?php echo $__env->yieldContent('content'); ?>
    <script src="<?php echo e(asset("JS/bootstrap.bundle.min.js")); ?>"></script>
    <script src="<?php echo e(asset("js/code.jquery.com_jquery-3.7.1.min.js")); ?>"></script>
    </main>
    <footer>
        <nav class="navbar navbar-dark fixed-bottom bg-body-tertiary bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="<?php echo e(route('index')); ?>">
                <img src="Assets/logo.svg" alt="" width="30px" class="d-inline-block align-text-top">
                Music House
              </a>
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="#">Facebook</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Twitter</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Instagram</a>
                </li>
                <li class="nav-item">
                  <p></p>
                </li>
              </ul>
              <div>
                  <h5 class="text-light text-center">Будьте в курсе всех новостей!</h5>
                  <form class="form-inline">
                  <div class="form-group">
                    <input type="email" class="form-control" id="emailInput" placeholder="Ваш email">
                  </div>
                  <button type="submit" class="btn btn-light">Подписаться</button>
                </form></div>
            </div>
            <div class="container-fluid">
              <p> </p>
              <div class="text-light text-center">
                  <h6>&copy; 2023 Music House. Все права защищены.</h6>
                </div>
                <p> </p>
            </div>
          </nav>
    </footer>
</body>
</html>
<?php /**PATH C:\openserver\domains\music_house\resources\views/layout.blade.php ENDPATH**/ ?>