@extends('layout')
@section('content')
    <h2 class="text-center mt-5">{{$product->title}}</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="d-flex align-items-center">
                    <img src="{{asset($product->img_path)}}" alt="" style="height: 300px; object-fit: contain;"">
                    <div class="p-5">
                        <p><b>Название:</b>{{$product->title}}</p>
                        <p><b>Категория: </b>{{$product->category->title}}</p>
                        <p><b>Производитель: </b>{{$product->country}}</p>
                        <p><b>Год выпуска: </b>{{$product->year}}</p>
                        <p><b>Цена: </b>{{$product->price}}</p>
                        <div class="d-grid gap-2">
                            <a href="{{route('cart.store', ['product_id'=>$product->id])}}" class="btn btn-dark align-items-center">Добавить в корзину</a>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
