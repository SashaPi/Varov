@extends('adminlayout')
@section('content')
    <a href="{{route('categories.create')}}" class="btn btn-dark my-3"> Добавить новую категорию</a>
    @foreach ($categories as $category)
    <h3 class="text-center">{{$category->title}}</h3>
    <div class= "text-center">
        <a href="{{route('categories.edit', $category)}}" class="btn btn-dark">Изменить</a>
        <form action="{{route('categories.destroy', $category)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-dark text-center">Удалить</button>
    </div>
    @endforeach
@endsection
