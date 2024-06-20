    
    <?php $__env->startSection('content'); ?>
    <h1 class="text-center mt-5">О нас</h1>
    <div class="container1 p-4">
      <h5>Наш магазин музыкальных инструментов - ваш источник вдохновения и звука! У нас вы найдете широкий ассортимент высококачественных музыкальных инструментов для профессионалов и начинающих музыкантов. Мы предлагаем гитары, клавишные инструменты, ударные, духовые, струнные инструменты, а также профессиональное звуковое оборудование и аксессуары. Наша цель - сделать вашу музыкальную мечту реальностью, предоставляя качественные товары по конкурентоспособным ценам. Поднимите ваше музицирование на новый уровень с нами!</h5>
    </div>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <img src="Assets/1.jpeg" class="mx-auto d-block w-50" alt="pic1">
                <div class="carousel-caption1">
                    <h5 class="text-center">Электрогитара YAMAHA Pacifica012RM Red Metallic</h5>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img src="Assets/2.jpeg" class="mx-auto d-block w-50" alt="pic2">
                <div class="carousel-caption1">
                    <h5 class="text-center">Акустическая гитара Yamaha FGX800C Natural</h5>
                </div>
              </div>
              <div class="carousel-item">
                <img src="Assets/3.png" class="mx-auto d-block w-50" alt="pic3">
                <div class="carousel-caption1">
                    <h5 class="text-center">Синтезатор Rockdale RKK-61</h5>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\openserver\domains\music_house\resources\views/index.blade.php ENDPATH**/ ?>