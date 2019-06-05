<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tarefa 4</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    </head>
    <body>
    <!--Container-->
    <div class="container p-0">
        <!--Menu-->
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent p-0">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <!--Loop trazendo os menus informados no JSON-->
                    @foreach($data->menu as $menu)
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">{!! $menu->title !!}</a>
                        </li>
                    @endforeach
                    <!--Fim do loop-->
                </ul>
            </div>
        </nav>
        <!--Fim Menu-->

        <!--Logo-->
        <div class="row row-logo justify-content-between m-0">
            <div class="col text-center">
                <span class="h1">{!! $data->logo !!}</span>
                <i class="fas fa-star fa-star-left"></i>
                <i class="fas fa-star fa-star-right"></i>
            </div>
        </div>
        <!--Fim Logo-->

        <!--Banner-->
        <div class="row row-banner m-0">
            <div class="col text-center p-0">
                <img src="{!! $data->banner !!}">
            </div>
        </div>
        <!--Fim Banner-->

        <!--Text-->
        <div class="row row-text justify-content-between m-0">
            <!--Loop trazendo os textos informados no JSON-->
            @foreach($data->text as $text)
                <div class="col-12 col-md p-0">
                    <h5>{!! strtoupper($text->title) !!}</h5>
                    {!! $text->text !!}
                </div>
            @endforeach
            <!--Fim do loop-->
        </div>
        <!--Fim Text-->

        <!--Columns-->
        <div class="row row-featured m-0">
            <!--Loop trazendo os destaques informados no JSON-->
            @foreach($data->highlights as $highlight)
                <div class="col p-0">
                    <img src="{!! $highlight->image !!}" alt="{!! $highlight->title !!}" class="w-100">
                </div>
            @endforeach
            <!--Fim do loop-->
        </div>
        <!--Fim Columns-->
    </div>
    <!--Fim Container-->

    <!--Scripts-->
    <script type="text/javascript" src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    </body>
</html>
