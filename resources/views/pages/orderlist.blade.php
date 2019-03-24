@extends('layouts.header')

@section('content')
<div class="fond">
    <div class="container panier"><h3>Commandes Courantes</h3></div>
    @if($currentordersindex->isEmpty())
      <div class="container" style="border:1px solid #cecece;">
        <div class="col-md-4">
          <h4>Pas de commandes en cours</h4>
        </div>
      </div>
    @endif
    @foreach ($currentordersindex as $orderindex)
    <form method="post" action="orderlist" >
      @csrf
      <div class="container" style="border:1px solid #cecece;"><h3><?php $date = explode("-",$orderindex->Date); echo $date[2] . '/' . $date[1] . '/' . $date[0];?> - Commande #{{$orderindex->ID}}</h3>
      <h4>Client: {{$orderindex->ClientName}}</h4>
      <?php $total = 0; ?>
      @foreach ($currentorderscontent as $ordercontent)
        @if ($ordercontent->ID == $orderindex->ID)
          <?php $total += $ordercontent->Quantity * $ordercontent->Price; ?>
          <div class="col-md-12">
            <div>
              <div class="caption post-content col-md-8">
                <div class="col-md-6">
                  <h5><strong>{{$ordercontent->Name}}</strong></br>Produit: #{{$ordercontent->ID_Stock}}</h5>
                </div>
                <h5 class=" col-md-6"><strong>{{number_format($ordercontent->Price,2)}} FRF</strong></br>Qté: {{$ordercontent->Quantity}}</h5>
              </div>
            </div>
          </div>
          @endif
          @endforeach
        <div>
      </br>
      </br>
      </br>
      </br>
      <input type="hidden" name="orderid" value="{{$orderindex->ID}}">
      <input type="submit" class="btnrefresh" style=" float: right; margin-top: 5px; margin-right: 5px;" value="Finaliser la commande"/>
      </form>
      <h3>Total: {{number_format($total,2)}} FRF</h3>
    </div>
  </div>
  @endforeach
</div>

<div class="fond">
    <div class="container panier"><h3>Commandes Finalisées</h3></div>

    @if($finishedordersindex->isEmpty())
      <div class="container" style="border:1px solid #cecece;">
        <div class="col-md-4">
          <h4>Pas de commandes finalisées</h4>
        </div>
      </div>
    @endif
    @foreach ($finishedordersindex as $orderindex)
      <div class="container" style="border:1px solid #cecece;"><h3><?php $date = explode("-",$orderindex->Date); echo $date[2] . '/' . $date[1] . '/' . $date[0];?> - Commande #{{$orderindex->ID}}</h3>
      <h4>Client: {{$orderindex->ClientName}}</h4>
      <?php $total = 0; ?>
      @foreach ($finishedorderscontent as $ordercontent)
        @if ($ordercontent->ID == $orderindex->ID)
          <?php $total += $ordercontent->Quantity * $ordercontent->Price; ?>
          <div class="col-md-12">
            <div>
              <div class="caption post-content col-md-8">
                <div class="col-md-6">
                  <h5><strong>{{$ordercontent->Name}}</strong></br>Produit: #{{$ordercontent->ID_Stock}}</h5>
                </div>
                <h5 class=" col-md-6"><strong>{{number_format($ordercontent->Price,2)}} FRF</strong></br>Qté: {{$ordercontent->Quantity}}</h5>
              </div>
            </div>
          </div>
          @endif
          @endforeach
        <div>
      </br>
      </br>
      </br>
      </br>
      <h3>Total: {{number_format($total,2)}} FRF</h3>
    </div>
  </div>
  @endforeach
</div>


@endsection

@section('footer')
@include('layouts.footer')
@endsection
