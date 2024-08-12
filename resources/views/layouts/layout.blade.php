<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
{{--    <link rel="stylesheet" href="public/build/assets/css/app-9f381e01.css">--}}
</head>
<body>
    @include('includes.header')
    @if(Request::is('/'))@include('includes.sBlock') @endif
    <div class="container mt-5">
        @include('includes.serviceMessages')
        <div class="row">
            <div class="col-8">
                @yield('content')
            </div>
            <div class="col-4">
                @include('includes.sideMenu')
            </div>
        </div>
    </div>
    @include('includes.footer')
</body>
</html>
