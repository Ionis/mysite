@extends('layouts.layout')

@section('title')Контакты@endsection

@section('content')
    <h1>Свяжитесь с нами</h1>

    <form action="{{route('contact-form')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Ваше имя</label>
            <input type="text" name="name" id="name" placeholder="Антон" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Ваш email</label>
            <input type="text" name="email" id="email" placeholder="mail@yandex.com" class="form-control">
        </div>
        <div class="form-group">
            <label for="theme">Тема обращения</label>
            <input type="text" name="theme" id="theme" placeholder="Где мой заказ?" class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Текст обращения</label>
            <textarea type="text" name="message" id="message" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Отправить</button>
    </form>
@endsection
