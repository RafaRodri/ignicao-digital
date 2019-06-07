<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Layout com JSON</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
</head>
<body>
    <!--Container-->
    <div class="container p-0">
        @yield('content')
    </div>
    <!--Fim Container-->

    <!--Scripts-->
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
