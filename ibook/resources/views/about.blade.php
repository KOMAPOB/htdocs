@extends('layouts.app')

@section('title-block')О проекте@endsection

@section('content')
   <h1>О проекте</h1>

    @if($errors->any())
    <div>
      <ul>
        @foreach($errors->all() as $error)
        <li color="red">{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif

   <form action="{{ route('about-submit') }}" method="post">
         @csrf

      <div>
        <label for="book">Введите название книги</label>
        <input type="text" name="book" placeholder="Введите название книги" id="book">
      </div>
      <div>
        <label for="name">Имя автора</label>
        <input type="text" name="name" placeholder="Введите имя автора" id="name">
      </div>
      <button type="submit" class="btn btn-success">Отправить</button>
   </form>
@endsection
