<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music House</title>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    
    <?php $__env->startSection('content'); ?>
    <main>
    <h1 class="text-center mt-5">Каталог</h1>
    <select class="form-select" aria-label="Default select example">
        <option selected>Cтрунные инструменты</option>
        <option value="1">Клавишные инструменты</option>
        <option value="2">Смычковые инструменты</option>
      </select>
      <div class="d-flex flex-nowrap">
        <div class="card">
            <img src="Assets/4.png" class="mx-auto d-block" height="250"  alt="img4">
            <div class="card-body">
              <h5 class="card-title"><a href="<?php echo e(route('item1')); ?>">DAVINCI DC-50A BK Гитара классическая 7/8</a> </h5>
              <p class="card-text">3.900 ₽</p>
              <a href="#" class="btn btn-dark mx-auto d-block">Купить</a>
            </div>
          </div>
          <div class="card">
            <img src="Assets/5.png" class="mx-auto d-block" height="250"  alt="img5">
            <div class="card-body">
              <h5 class="card-title">Belucci BC3820 N Гитара акустическая 7/8</h5>
              <p class="card-text">3.221 ₽</p>
              <a href="#" class="btn btn-dark mx-auto d-block">Купить</a>
            </div>
          </div>
      <div class="card">
        <img src="Assets/6.png" class="mx-auto d-block" height="250"  alt="img6">
        <div class="card-body">
          <h5 class="card-title">Korg Grandstage 88 Цифровое пианино</h5>
          <br>
          <p class="card-text">261.000 ₽</p>
          <a href="#" class="btn btn-dark mx-auto d-block">Купить</a>
        </div>
      </div>
      <div class="card">
        <img src="Assets/7.png" class="mx-auto d-block" height="250"  alt="img7">
        <div class="card-body">
          <h5 class="card-title">Скрипка STAGG VN-1/2</h5>
          <br>
          <p class="card-text">8.250 ₽</p>
          <a href="#" class="btn btn-dark mx-auto d-block">Купить</a>
        </div>
      </div>
      <div class="card">
        <img src="Assets/8.png" class="mx-auto d-block" height="250"  alt="img8">
        <div class="card-body">
          <h5 class="card-title">BSM Балалайка секунда, 3-струнная, Doff</h5>
          <p class="card-text">41.896 ₽</p>
          <a href="#" class="btn btn-dark mx-auto d-block">Купить</a>
        </div>
      </div>
      </div>
    <script src="JS/bootstrap.bundle.min.js"></script>
    <script src="js/code.jquery.com_jquery-3.7.1.min.js"></script>
    </main>
    <?php $__env->stopSection(); ?>
</body>
</html>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\openserver\domains\music_house\resources\views/catalog.blade.php ENDPATH**/ ?>