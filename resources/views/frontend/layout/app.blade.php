<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title','Default Title')
    </title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>

    {{-- logo for small-shop-1 --}}
    {{-- <img src="{{ asset('storage/big_shop.png') }}" alt="Logo" style="width:140px; height:40px;"> --}}

    {{-- Include the Header partial --}}
    @include('frontend.layout.header')

    {{-- Include the Top bar partial --}}
    @include('frontend.layout.topbar')

    @yield('content')

    {{-- Include the Footer partial  --}}
    @include('frontend.layout.footer')
</body>
</html>