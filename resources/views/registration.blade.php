    @extends('layout')
    @section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="registration-form mt-5">
                    <h2 class="text-center mb-3">Регистрация</h2>
                    <form action="{{route('register')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control mb-3" id="name" name="name" placeholder="Имя" value="{{old('name')}}" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control mb-3" id="surname" name="surname" placeholder="Фамилия" value="{{old('surname')}}" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control mb-3" id="patronymic" name="patronymic" placeholder="Отчество" value="{{old('patronymic')}}">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control mb-3" id="login" name="login" placeholder="Логин" value="{{old('login')}}" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control mb-3" id="email" name="email" placeholder="email@mail.ru" value="{{old('email')}}" required>
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
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <button type="submit" class="btn btn-dark mt-3">Зарегистрироваться</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection

