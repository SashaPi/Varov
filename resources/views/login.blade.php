    @extends('layout')
    @section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="login-form mt-5">
                    <h2 class="text-center">Вход</h2>
                    <form action="{{route('login')}}" method = "POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control mb-3" id="login" name="login" placeholder="Логин" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control mb-3" id="password" name="password" placeholder="Пароль" required>
                        </div>
                        <div class="form-group text-center">
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <button type="submit" class="btn btn-dark mb-3">Войти</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection

