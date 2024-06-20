@extends('layout')
@section('content')
    <div class="mx-5">
        <h1 class="text-center mt-5">Каталог</h1>
        <form action="{{route('products.filter')}}" method="POST" class="d-flex flex-wrap">
            @csrf
            <div>
                <p class="m-0">Категория:</p>
                <select name="filter" class="filter" id="filter" class="form-select mb-3">
                    <option value="all">Все</option>
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->title}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <p class="m-0">Сортировка:</p>
                <select name="sort" id="sort" class="form-select ms-2 mb-3">
                    <option value="country">По стране (А->Я)</option>
                    <option value="title">По наименованию (А->Я)</option>
                    <option value="price">Сначала дешевле</option>
                </select>
            </div>
            <button type="submit" class="btn btn-dark ms-2 mb-3 align-self-end">Применить</button>
        </form>
        @if (Auth::check() && Auth::user()->is_admin)
            <a href="{{route('products.create')}}" class="btn btn-dark my-3"> Добавить новый товар</a>
        @endif
        <div class="row">
            @foreach ($products as $product)
                <div class="col-6 col-md-4 col-lg-3 mb-3">
                    <div class="card h-100 d-flex flex-column justify-content-between" style="width: 100%;">
                        <img src="{{asset($product->img_path)}}" class="card-img-top" style="height: 200px; object-fit: contain;" alt="...">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{$product->title}}</h5>
                            <p class="card-text">{{$product->price}}</p>
                            <div class="mt-auto text-center">
                                <a href="{{route('products.show', $product)}}" class="btn btn-dark">Подробнее</a>
                                @if (Auth::check() && Auth::user()->is_admin)
                                    <a href="{{route('products.edit', $product)}}" class="btn btn-dark">Изменить</a>
                                    <a href="{{route('products.destroy', $product)}}" class="btn btn-danger">Удалить</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
