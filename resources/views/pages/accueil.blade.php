@extends('layouts.header')

@section ('content')
<?php
  if(Request::segment(1) === 'logout'){
    echo '<div class="alert alert-danger container" role="alert"><strong>Vous êtes déconnecté</strong></div>';
  }
?>
<div class="test">
    <div class="container intro">
        <h1> BDE exia.CESI Strasbourg</h1>
        <p class="text-intro">
          Bienvenue sur le site du Bureau des élèves de l'exia.CESI Strasbourg
        </p>
      </div>
    <br>
    <br>
    <div class="carouss">
        <div id="carousel" class="carousel slide " data-ride="carousel">
            <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="{{ url('/event') }}">
                    <img src="{{ asset('images/logs.png') }}" class="img-responsive" style="margin:0px auto; height: 500px;" />
                    </a>
                </div>
                <div class="carousel-item " >
                    <div class="carousel-page">
                        <a href="{{ url('/boiteaidees') }}">
                        <img src="{{ asset('images/troll.jpg') }}" class="img-responsive "style="margin:0px auto; height: 500px;"/>
                        </a>
                    </div>
                </div>
                <div class="carousel-item ">
                <a href="{{ url('/ecom') }}">
                <img src="{{ asset('images/troll.jpg') }}" class="img-responsive " style="margin:0px auto;height: 500px;"/>
                </div>
                </a>
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev" >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class= "equipe-txt" style="width:auto; text-align:center; padding:20px;">
            <p>Bienvenue sur le site du BDE de l'exia.CESI Strasbourg. L'équipe du BDE présente ci-dessous est à votre disposition.
            </p>
            <br>
            <a href="https://www.facebook.com/BdeExiaStrasbourg/">
            <img src="{{ asset('images/bde.jpg') }}" class="equipe-bde" title="équipe BDE" style="max-width: 1000px; min-width: 10%; height: auto">
            </a>
    </div>


    <div class="container-case">
        <div class="row">

            <div class="col-sm bloc">
                <h1 class="titre-pages"> Les événements a venir</h1>
                <a href="{{ url('/event') }}"><img  class="link-pages" src="{{ asset('images/lala.jpg') }}"></a>
            </div>
            <div class="col-sm bloc">
            <h1 class="titre-pages"> Boite à idées</h1>
                <a href="{{ url('/boiteaidees') }}"><img class="link-pages" src="{{ asset('images/troll.jpg') }}" ></a>
            </div>
            <div class="col-sm bloc">
            <h1 class="titre-pages">La boutique du BDE</h1>
                <a href="{{ url('/ecom') }}"><img class="link-pages" src="{{ asset('images/lala.jpg') }}" ></a>
            </div>
        </div>
    </div>

    <br>
    <br>
    <br>
    <br>
    <br>

@endsection
