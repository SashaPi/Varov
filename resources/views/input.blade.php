    @extends('layout')
    @section('content')
<main>  <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="login-form mt-5">
                    <h2 class="text-center">Вход</h2>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control mb-3" placeholder="Логин" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control mb-3" placeholder="Пароль" required>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-dark mb-3">Войти</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="JS/bootstrap.bundle.min.js"></script>
    <script src="js/code.jquery.com_jquery-3.7.1.min.js"></script>
</main>
    @endsection

