<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Projet Web</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/.css') }}" rel="stylesheet">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
   <script src="script.js"></script>
    <link rel="stylesheet" href="font.css">
   <link rel="stylesheet" href="style.css">

    <script src="jquery-3.3.1.js"></script>


</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <a href="{{ url('/accueil') }}"><img src="{{ asset('images/logo300.png') }}" height="120" style="margin-left: 10px"></a>
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item {{ Request::segment(1) === NULL ? 'active active-header' : null }} {{ Request::segment(1) === 'accueil' ? 'active active-header' : null }} {{ Request::segment(1) === '' ? 'active active-header' : null }}">
                <a class="nav-link" href="{{ url('/accueil') }}">Accueil</a>
            </li>
            <li class="nav-item {{ Request::segment(1) === 'event' ? 'active active-header' : null }} {{ Request::segment(1) === 'photo' ? 'active active-header' : null }}">
                <a class="nav-link" href="{{ url('/event') }}">Event</a>
            </li>
            <li class="nav-item {{ Request::segment(1) === 'boiteaidees' ? 'active active-header' : null }}">
                <a class="nav-link" href="{{ url('/boiteaidees') }}">Boite à idées</a>
            </li>
            <li class="nav-item {{ Request::segment(1) === 'ecom' ? 'active active-header' : null }} {{ Request::segment(1) === 'cat' ? 'active active-header' : null }}">
                <a class="nav-link" href="{{ url('/ecom') }}">E-Commerce</a>
            </li>
            <li class="nav-item {{ Request::segment(1) === 'forum' ? 'active active-header' : null }}">
                <a class="nav-link" href="{{ url('/forum') }}">Forum</a>
            </li>
            @if (Request::segment(1) === 'ecom' || Request::segment(1) === 'cat' || Request::segment(1) === 'panier')
            <li class="nav-item {{ Request::segment(1) === 'panier' ? 'active active-header' : null }}">
                <a class="nav-link" href="{{ url('/panier') }}"><img src="http://icons.iconarchive.com/icons/iconsmind/outline/512/Shopping-Cart-icon.png" height="20" style="margin-bottom: 5px"> Panier</a>
            </li>
            @endif
        </ul>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item {{ Request::segment(1) === 'login' ? 'active active-header' : null }}">
                                <a class="nav-link" href="{{ url('/login') }}">{{ __('Se connecter') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item {{ Request::segment(1) === 'register' ? 'active active-header' : null }}">
                                    <a class="nav-link" href="{{ url('/register') }}">{{ __("S'enregistrer") }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <span>{{ Auth::user()->prenom }} {{ Auth::user()->nom }} </span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('/profil') }}">
                                      {{ __('Mon profil') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ url('/mescommandes') }}">
                                      {{ __('Mes commandes') }}
                                    </a>
                                    @if(Auth::User()->permission == 2)
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ url('/orderlist') }}">
                                      {{ __('Commandes Boutique') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ url('/createproduct') }}">
                                      {{ __('Ajouter Produit') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ url('/createcat') }}">
                                      {{ __('Ajouter Catégorie') }}
                                    </a>
                                    @endif
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Se déconnecter') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

    </div>
    @include('layouts.footer')
</body>
</html>
