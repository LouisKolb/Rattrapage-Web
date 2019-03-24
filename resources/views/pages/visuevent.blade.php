@extends('layouts.header')
@section('content')

<div class="container"><h4>{{$events->AuthorName}}</h4></div>
@if(Auth::ID())
<div class="container">
@if(Auth::User()->permission == 3)
  <div class="btnsignaler">
    <form method="post" action="/event/{{$idevent}}/report" >
      @csrf
      <input type="hidden" name="idevent" value="{{$idevent}}">
      <input type="submit" class="btn btn-sm btn-danger" value="{{ $events[0]->Reported_Event == 0 ? 'Signaler' : 'Annuler le signalement' }}">
    </form>
    @else
    <div class="btnsignaler">
    @endif
  </div>
  @if($events->registerstatus == 1 && $events[0]->Type == 1)
  <form method="post" action="/event/{{$idevent}}" >
    @csrf
    <input type="hidden" name="eventid" value="{{$events->idevent}}">
    <input type="hidden" name="userid" value="{{Auth::ID()}}">
    <input type="hidden" name="registerstatus" value="1">
    <input type="submit" name="btnlike" value="Se désinscrire" class="btn btn-sm btn-warning"/>
  </form>
  @endif
  @if(Auth::User()->permission == 2 && $events[0]->Type == 0)
  <form method="post" action="/event/{{$idevent}}/approve" >
    @csrf
    <input type="hidden" name="eventid" value="{{$events->idevent}}">
    <input type="submit" name="btnlike" value="Approuver événement" class="btn btn-sm btn-success"/>
  </form>
  @endif
  @if($events->registerstatus == 1 && $events[0]->Type == 2)
    <a href="{{ url('importpicture') }}/{{$idevent}}" name="btn" class="btn btn-sm btn-info">Publier Image</a>
  @endif
  @if((Auth::User()->permission == 2 || $events[0]->ID_Author == Auth::ID()) && $events[0]->Type >= 1)
    <a href="{{ url('getevententries') }}/{{$idevent}}" name="btn" class="btn btn-sm btn-info">Obtenir la liste des inscrits</a>
  @endif
  @if($events->registerstatus == 0 && $events[0]->Type == 1)
  <form method="post" action="/event/{{$idevent}}" >
    @csrf
    <input type="hidden" name="eventid" value="{{$events->idevent}}">
    <input type="hidden" name="userid" value="{{Auth::ID()}}">
    <input type="hidden" name="registerstatus" value="0">
    <input type="submit" name="btnlike" value="S'inscrire" class="btn btn-sm btn-success"/>
  </form>
  @endif
  @endif
</div>

<div class = "container">
  <div col-sm-6>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        @foreach ($events as $event)
        @if($event->Thumbnail == 1)
        <div class="carousel-item active">
          <a href="/photo/{{$event->ID}}">
            <img class = "img-fluid mx-auto d-block" src="{{ asset('eventimage') }}/{{$event->URL}}">
          </a>
        </div>
        @else
        <div class="carousel-item">
          <a href="/photo/{{$event->ID}}">
            <img class="mx-auto d-block img-fluid" src="{{ asset('eventimage') }}/{{$event->URL}}">
          </a>
        </div>
      @endif
      @endforeach
      </div>

      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <div class="col-sm-6">
   <div class="wrapper">
    <div class="caption post-content">
      <h3>{{$events[0]->TITLE}}</h3>
      <h5>{{$events->date[2]}}/{{$events->date[1]}}/{{$events->date[0]}}</h5>
      <p>{{$events[0]->TXT}}</p>
    </div>
  </div>
</div>
</div>
@endsection
