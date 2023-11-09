<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fontawesome/css/all.css')}}">
</head>
<body>
    {{-- Header --}}
    @include('layout.header')
    {{-- end Header --}}

    {{-- Main --}}
    @yield('content')
    {{-- end Main --}}

    {{-- Footer --}}

    {{-- end Footer --}}
    <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.js') }}"></script>
</body>
</body>
</html>