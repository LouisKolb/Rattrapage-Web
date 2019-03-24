@extends('layouts.header')

@section('content')
<div class="fond">
    <div class="container panier"><h3>Mon profil</h3></div>
        <div class="container">
          <h4>Nom: </h4><h5>{{ Auth::user()->nom }}</h5>
          <h4>Prénom: </h4><h5>{{ Auth::user()->prenom }}</h5>
          <h4>Adresse Courriel: </h4><h5>{{ Auth::user()->email }}</h5>
          <h4>Status: </h4>
          @switch(Auth::user()->permission)
          @case(1)
          <h5>Étudiant</h5>
          @break
          @case(2)
          <h5>Membre du BDE</h5>
          @break
          @case(3)
          <h5>Salarié CESI</h5>
          <a href="{{ url('downloadpictures') }}" style=" float: right; margin-top: 5px; margin-right: 5px;" class="btnrefresh">Telecharger les photos</a>
          @break
          @endswitch
        <div class="row">
        </div>
    </div>
  </div>
  </div>

@endsection

@section('footer')
@include('layouts.footer')
@endsection
