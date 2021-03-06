<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @yield('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <title>Laravel - Crud | @yield('title')</title>
</head>
<body>
    @include('includes.header')
    {{-- contenuto principale --}}
    <main>
        @include('includes.jumbotron')
        @yield('content')    
    </main>
    @include('includes.footer')
    {{-- script --}}
    @yield('scripts')
</body>
</html>