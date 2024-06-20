@extends('layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="cart-container mt-5">
                <h2 class="text-center"><a href="{{ route('orders.show', $order) }}">Заказ {{ $order->id }}</a> от {{ $order->created_at }}</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Товар</th>
                            <th>Количество</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order->products as $product)
                            <tr>
                                <td>{{$product->title}}</td>
                                <td>{{$product->pivot->qty }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="text-right">
                    <p><b>Статус: </b>{{$order->status}}</p>
                </div>
                <div class="d-grid gap-2">
                    <form action="{{ route('orders.destroy', ['order' => $order]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Удалить</button>
                    </form>
                    @if (Auth::check() && Auth::user()->is_admin)
                        <button class="btn btn-dark" type="button">Подтвердить</button>
                        <button class="btn btn-dark" type="button">Выполнить</button>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
