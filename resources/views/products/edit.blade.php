@extends('layout')
@section('content')
        <form method="POST" action="{{route('products.update', $product)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <label for="title" class="form-label">Название</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$product->title}}" required>
            <label for="category" class="form-label">Категория</label>
            <select name="category_id" id="category_id" class="form-select">
                <option value="{{$product->category_id}}">{{$product->category->title}}</option>
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
            </select>
            <label for="title" class="form-label">Производитель</label>
            <input type="text" class="form-control" id="country" name="country" value="{{$product->country}}" required>
            <label for="title" class="form-label">Год выпуска</label>
            <input type="text" class="form-control" id="year" name="year" value="{{$product->year}}" required>
            <label for="title" class="form-label">Цена</label>
            <input type="text" class="form-control" id="price" name="price" value="{{$product->price}}" required>
            <label for="title" class="form-label">Количество</label>
            <input type="text" class="form-control" id="qty" name="qty" value="{{$product->qty}}" required>
            <label for="img" class="form-label">Изображение</label>
            <input type="file" class="form-control" id="img" name="img" value="{{$product->img_path}}">
            <button type="submit" class="btn btn-dark">Изменить товар</button>
    </form>
@endsection
