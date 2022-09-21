@extends('layouts.app')

@section('title-block')Редактирование@endsection

@section('content')
   <h1>Редактирование книги</h1>

   <form action="{{ route('about-update-submit', $data->id) }}" method="post">
         @csrf

      <div>
        <label for="book">Введите название книги</label>
        <input type="text" name="book" value="{{$data->book}}" placeholder="Введите название книги" id="book">
      </div>
      <div>
        <label for="name">Имя автора</label>
        <input type="text" name="name" value="{{$data->name}}" placeholder="Введите имя автора" id="name">
      </div>
      <button type="submit" class="btn btn-success">Сохранить</button>
   </form>
@endsection
