    @extends('layout')
    @section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="cart-container mt-5">
                    <h2>Корзина</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Товар</th>
                                <th>Количество</th>
                                <th>Цена</th>
                                <th>Сумма</th>
                                <th>Действия</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                                <td>{{$product->title}}</td>
                                <td>
                                    <form action="{{route('cart.change', ['product_id'=>$product->id])}}" method="POST">
                                        @csrf
                                        <input type="number" name="qty" value="{{$product->pivot->qty}}" min="0" max="{{$product->qty}}">
                                        <button type="submit" class="btn btn-sm btn-dark">Изменить</button>
                                    </form>
                                </td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->pivot->qty * $product->price}}</td>
                                <td>
                                    <form action="{{route('cart.destroy', ['id'=>$product->id])}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Удалить</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="text-right">
                        <p><b>Итого: </b></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="login-form mt-5">
                    <h2 class="text-center">Подтверждение заказа</h2>
                    <form action="{{route('orders.store')}}" method="POST" class="text-center">
                        @csrf
                        <label for="password" class="form-label">Пароль</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                        <button class="btn btn-dark" type="submit">Оформить заказ</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection

