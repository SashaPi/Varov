<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('CSS/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('CSS/style.css')}}">
    <title>Varov Element</title>
</head>

<body>

  <header>

    <!-- Начало шапки -->
    <div class="hed">
      <div class="blok-1"> 

        <header class="site-header">

          <div class="header-top">
            <div class="container">
              <div class="header-row">
                <div class="header-desc">VarovElement</div>
                  <div class="header-right">
                    <div class="header-info">
                      <img src="img/icons/local.png" alt="">
                      <span>Наро-Фоминский, Калининец д36/2</span>
                    </div>

                    <a href="tel:+7 (985) 198-57-69 " class="header-info">
                      <img src="img/icons/phone.png" alt="+7 (985) 198-57-69">
                      <span>+7 (985) 198-57-69 </span>
                    </a>

                    <div class="header-social">
                      <a href="https://t.me/varov_element">
                        <img src="img/icons/tg.png" alt="Telegram">
                      </a>
                      <a href="https://vk.com/club224345098">
                        <img src="img/icons/vk.png" alt="VK">
                      </a>
                  </div>
                </div>
              </div>
            </div>   
          </div>

            <div class="header-bottom">
                <div class="container">
                    <div class="header-bottom-row">
                        <div class="header-logo">
                            <a href="{{route('index')}}">
                                <img src="img/logo.jpg" alt="logo" height="60">
                            </a>
                        </div>

                        <nav class="header-nav">
                            <ul>
                                <li><a href="{{route('index')}}">Главная</a></li>
                                <li><a href="{{route('contacts')}}">О нас</a></li>
                                <li><a href="{{route('products.index')}}">Каталог</a></li>
                                <li><a href="{{route('login')}}">Войти</a></li>
                                <li><a href="{{route('registration')}}">Регистрация</a></li>
                                <li>
                                    <a href="{{route('cart.index')}}">
                                      <img src="{{asset('Assets/cart.png')}}" alt="cart" width="30px" class="d-inline-block align-text-top">
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

    </div>

    <div class="tree__img">
    <img src="img/diz/Component 1.png" alt="" height="170">
    <img src="img/diz/Component 2.png" alt="" height="170">
    <img src="img/diz/Component 3.png" alt="" height="170">
    </div>
    <!-- Конец шапки -->

  </header>

    <footer>
      @if (Session::has('info'))
          <div class="alert alert-warning">
              {{'info'}}
          </div>
      @endif
      @if (isset($info))
          <div class="alert alert-warning">
              {{$info}}
          </div>
      @endif
      <main>
      @yield('content')
      <script src="{{asset("JS/bootstrap.bundle.min.js")}}"></script>
      <script src="{{asset("js/code.jquery.com_jquery-3.7.1.min.js")}}"></script>
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

</body>
</html>
