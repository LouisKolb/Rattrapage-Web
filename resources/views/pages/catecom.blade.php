@extends('layouts.header')

@section('content')

<div class="container" style="border:1px solid #cecece;">
    @foreach ($categories as $categories)
    <h3>{{$categories->TITLE}}</h3>
    @endforeach
  @foreach ($stock as $produit)
    <div class="col-sm-4">
        <img src="{{$produit->IMG_URL}}" alt="..." height="180" width="320"/>
           <div class="wrapper">
                <div class="caption post-content col-sm-6">
                    <h3>{{$produit->Name}}</h3>
                    <p>{{$produit->Desc}}</p>
                </div>
               <div class="caption post-content col-sm-6">
                    <h3>{{$produit->Price}}FRF</h3>
                   <button type="button" class="btn btn-primary btn-xs">Ajouter au panier</button>
               </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
