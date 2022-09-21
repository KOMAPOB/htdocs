@extends('layouts.app')

@section('title-block')Список книг@endsection

@section('content')
   <h1>Список книг</h1>
   @foreach($data as $el)
   <div>
      <h3>Название книги: "{{ $el->book }}" Автор: {{$el ->name}}</h3>
      <a href="{{ route ('about-data-one', $el->id)}}"><button></button>Подробнее</a>
   </div>
   @endforeach
@endsection
