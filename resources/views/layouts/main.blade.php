<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    @stack('stylesheets')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<div>
<div>
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif
</div>

<div class="container mt-3">
    <div class="row">
        <div class="col">
            <h1>Central and Eastern European Infrasound Network - PORTAL</h1>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                            <a class="nav-link" href="{{@route('home')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{@route('download_data')}}">Download data</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{@route('news')}}">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{@route('bulletins')}}">CEEIN Bulletins</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{@route('publications')}}">Publications</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">History</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{@route('stations')}}">Stations</a>
                                <a class="dropdown-item" href="{{@route('memorandum')}}">Memorandum of understanding</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    @yield('content')
</div>

<footer class="page-footer mt-5" align="center">
    <img src="/images/logo_resized.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img src="/images/CSFK_logo.png" height="70">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img src="/images/IAP_logo.jpg" height="70">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img src="/images/ZAMG_logo.png" height="70">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</footer>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@stack('scripts')

</body>
</html>
