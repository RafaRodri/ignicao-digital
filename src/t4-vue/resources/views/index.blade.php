@extends('templates.master')

@section('content')
    <!--Menu-->
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent p-0">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">Navigation here</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">About us</a>
                </li>
            </ul>
        </div>
    </nav>
    <!--Fim Menu-->

    <!--Logo-->
    <div class="row row-logo justify-content-between m-0">
        <div class="col text-center">
            <span class="h1">LEARN</span>
            <i class="fas fa-star fa-star-left"></i>
            <i class="fas fa-star fa-star-right"></i>
        </div>
    </div>
    <!--Fim Logo-->

    <!--Banner vindo do vue component-->
    <igd-banner></igd-banner>
    <!--Fim Banner-->

    <!--Text vindo do vue component-->
    <igd-text></igd-text>
    <!--Fim Text-->

    <!--Highlights vindo do vue component-->
    <igd-highlights></igd-highlights>
    <!--Fim Columns-->
@endsection
