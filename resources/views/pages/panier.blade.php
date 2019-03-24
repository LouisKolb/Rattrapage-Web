@extends('layouts.header')

@section('content')
<div class="fond">
  <form method="post" action="panier">
    @csrf
    <div class="container panier"><h3>Panier</h3></div>
    <div class="container" style="border:1px solid #cecece;">
      @if(!$basket->isEmpty())
      @foreach ($basket as $produit)
      <div class="col-md-12" style="margin-top: 5px; margin-bottom: 5px;">
        <div class="col-md-4">
            <img src="{{ asset('illustrations') }}/{{$produit->IMG_URL}}" alt="..." height="180" width="320"/>
        </div>
        <div>
            <div class="caption post-content col-md-8">
                <div class="col-md-8">
                    <h4><strong>{{$produit->Name}}</strong></h4>
                    <p>{{$produit->Desc}}</p>
                </div>
                <h3 class=" col-md-4">{{$produit->Price}} FRF</h3>
                <input type="hidden" name="stockid_{{$produit->ID}}" value="{{$produit->ID}}">
                <input type="number" name="quantity_{{$produit->ID}}" value="{{$produit->Quantity}}" min="0" max="100"/>
            </div>
        </div>
    </div>
    <!--<hr width="100%" size="8" align="center">-->
    @endforeach
  </div>
<div class="container">
    <input type="hidden" name="orderid" value="{{$basket->orderid->ID}}">
    <input type="submit" class="btncommander" style=" float: right; margin-top: 5px;" value="Commander" name="order">
    <input type="submit" class="btnrefresh" style=" float: right; margin-top: 5px; margin-right: 5px;" role="button" value="Mettre à jour le panier" name="refresh"/>
    <h3 style=" float: left; margin-top: 5px;">Total: {{number_format($basket->total,2)}} FRF</h3>
</div>
@else
<div class="container" style="border:1px solid #cecece;">
    <div class="col-md-4">
      <h4>Votre panier est vide</h4>
  </div>
</div>
@endif
</form>
</div>
</div>

@endsection

@section('footer')
@include('layouts.footer')
@endsection
