<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="keywords" content="">
        <meta name="description" content="">
        <title>@yield('title')</title>
        <style></style>
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="icon" type="image/x-icon" href="{{asset('uploads/cart.jpg')}}">
    </head>
    <body>
    

        @yield('content')

        <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
        <script src="{{asset('js/popper.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script src="{{asset('js/index.js')}}"></script>
    </body>
</html>