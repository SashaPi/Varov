<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(asset('CSS/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('CSS/style.css')); ?>">
    <title>Varov_Element</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('products.index')); ?>">Каталог</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('categories.index')); ?>">Категории</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('orders.index')); ?>">Заказы</a>
                      </li>
                    </ul>
                  </div>
              </div>
        </nav>
    </header>

    <!-- Начало шапки -->
    <div class="hed">
      <div class="blok-1"> 

        <header class="site-header">

            <div class="header-bottom">
                <div class="container">
                    <div class="header-bottom-row">
                        <div class="header-logo">
                            <a href="<?php echo e(route('index')); ?>">
                                <img src="img/logo.jpg" alt="logo" height="60">
                            </a>
                        </div>

                    </div>
                </div>
            </div>

    </div>

    <!-- Конец шапки -->

    <footer>
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
      <div class="wrapper2">
              <div class="footer">
                  <div id="knopka"></div>
                      <div id="block">
                          <div id="text">
                              <div class="footer1">
                                  <h1>2024 | VAROV ELEMENT | Все права защищены</h1>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
  </footer>

  <form class="text-center" action="<?php echo e(route('logout')); ?>" method="POST">
      <?php echo csrf_field(); ?>
      <button type="submit" class="btn btn-danger">Выход из аккаунта</button>
    </form>
    
</body>
</html>
<?php /**PATH C:\openserver\domains\Varov\music_house\resources\views/adminlayout.blade.php ENDPATH**/ ?>