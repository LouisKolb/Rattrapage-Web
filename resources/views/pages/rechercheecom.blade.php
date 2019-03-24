@extends('layouts.header')

@section('content')
<div class="container">
<a type="button" class="btn btn-primary btn-xs" href="/ecom">Retour</a>
</div>
<div class="container" style="border:1px solid #cecece;">
    <h3>Liste des produits</h3>
@foreach($rechercheprod as $rechercheprod)
    <div class="col-sm-4">
        <img src="{{$rechercheprod->IMG_URL}}" alt="..." height="180" width="320"/>
           <div class="wrapper">
                <div class="caption post-content col-sm-6">
                    <h3>{{$rechercheprod->Name}}</h3>
                    <p>{{$rechercheprod->Desc}}</p>
                </div>
                <div class="caption post-content col-sm-6">
                    <h3>{{$rechercheprod->Price}}FRF</h3>
                   <button type="button" class="btn btn-primary btn-xs">Ajouter au panier</button>
               </div>
            </div>
        </div>
    @endforeach
</div>
@endsection