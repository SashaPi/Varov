    @extends('layout')
    @section('content')
    <h1 class="text-center mt-5">О нас</h1>
    <div class="container1 p-4">
      <h5>Парфюмерное искусство - это волшебный мир ароматов, которые, словно тайные послания, раскрываются на коже, рассказывая историю твоей индивидуальности и подчеркивая уникальность стиля.</h5>
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
                <img src="img/4.jpg" class="mx-auto d-block w-50" alt="pic1">
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img src="img/5.jpg" class="mx-auto d-block w-50" alt="pic2">
              </div>
              <div class="carousel-item">
                <img src="img/6.jpg" class="mx-auto d-block w-50" alt="pic3">
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
@endsection

