@extends('layouts.layout')

@section('title')Ваши обращения@endsection

@section('content')
    @foreach($data as $item)
        <div class="alert alert-info">
            <h5>{{$item->theme}}</h5>
            <p><small>{{$item->created_at}}</small></p>
            <p>{{$item->name}}</p>
            <p>{{$item->email}}</p>
            <a href="{{route('contact-oneMessage', $item->id)}}"><button class="btn btn-success">Открыть</button></a>
        </div>
    @endforeach
@endsection
