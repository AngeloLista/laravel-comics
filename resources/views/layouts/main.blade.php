<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} | @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}">
    @yield('styles')
</head>
<body>
    @include('includes.header')
    
    <main>
        @yield('content')
    </main>
    
    
    @include('includes.footer')
    
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>