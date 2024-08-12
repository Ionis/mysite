@extends('layouts.layout')

@section('title')Редактирование@endsection

@section('content')
    <form action="{{route('contact-update', $data->id)}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Ваше имя</label>
            <input type="text" name="name" id="name" value="{{$data->name}}" placeholder="Антон" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Ваш email</label>
            <input type="text" name="email" id="email" value="{{$data->email}}" placeholder="mail@yandex.com" class="form-control">
        </div>
        <div class="form-group">
            <label for="theme">Тема обращения</label>
            <input type="text" name="theme" id="theme" value="{{$data->theme}}" placeholder="Где мой заказ?" class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Текст обращения</label>
            <textarea type="text" name="message" id="message" class="form-control">{{$data->message}}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Обновить</button>
    </form>
@endsection
