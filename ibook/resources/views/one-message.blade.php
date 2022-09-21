@extends('layouts.app')

@section('title-block')Просмотр книги {{ $data->book }}@endsection

@section('content')
   <h1>Редактирование книги</h1>
   <div>
      <h3>Название книги: "{{ $data->book }}" Автор: {{$data ->name}}</h3>
      <a href="{{ route ('about-update', $data->id)}}"><button></button>Редактировать</a>
      <a href="{{ route ('about-delete', $data->id)}}"><button></button>Удалить</a>
   </div>

@endsection
