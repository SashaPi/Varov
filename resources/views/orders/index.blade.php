@extends('layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="cart-container mt-5">
                <h2 class="text-center">Мои заказы</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Заказ</th>
                            <th>Сумма</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr>
                                <td><a href="{{route('orders.show', $order)}}">Заказ {{$order->id}}</a> от {{$order->created_at}}</td>
                                <td>{{$order->sum}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<form class="text-center" action="{{route('logout')}}" method="POST">
    @csrf
    <button type="submit" class="btn btn-danger">Выход из аккаунта</button>
</form>
@endsection
