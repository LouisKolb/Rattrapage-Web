@extends('layouts.header')

@section('content')
  @if(Auth::ID())
  <div class = "container">
    @switch(Auth::user()->permission)
    @case(1)
    <a href="createevent" class="btnevent" role="button">Proposer une idée</a>
    @break
    @case(2)
    <a href="createevent" class="btnevent" role="button">Créer un événement</a>
    @break
    @case(3)
    <a href="createevent" class="btnevent" role="button">Proposer une idée</a>
    @break
    @Default
    @break
    @endswitch
  </div>
  @endif

  @if(Auth::ID() && Auth::User()->permission >= 2)
  <div class="container"><h3>Idées signalées</h3></div>
  <div class="container" style="border:1px solid #cecece;">
    @foreach($events as $event)
    @if($event->Type == 0 && $event->Reported_Event == 1)
    <a href="event/{{$event->ID_Events}}">
      <div class="container">
        <img class="baiimg" src="{{ asset('eventimage') }}/{{$event->URL}}" alt="..." height="180" width="320"/>
        <div class="baitxt">
          <h3>{{$event->TITLE}}</h3>
          <p>{{$event->TXT}}</p>
        </div>
      </div>
    </a>
    <hr>
    @endif
    @endforeach
    @endif
  </div>

  <div class="container">
    <h3>Idées proposés</h3>
  </div>

  <div class="container" style="border:1px solid #cecece;">
    @foreach ($events as $event)
    @if($event->Type == 0 && $event->Reported_Event == 0)
    <a href="event/{{$event->ID_Events}}">
      <div class="container">
        <img class="baiimg" src="{{ asset('eventimage') }}/{{$event->URL}}" alt="..." height="180" width="320"/>
        <div class="baitxt">
          <h3>{{$event->TITLE}}</h3>
        </a>
        <div style="float: left;">
          @if(Auth::ID())
          <?php
          $event->votestatus = 0;
          foreach($votes as $vote){
            if(Auth::ID() == $vote->ID_User && $vote->ID_Events == $event->ID){
              $event->votestatus = 1;
            }
          }
          ?>
          @if($event->votestatus == 1)
          <div class="marginright">
          <form method="post" action="boiteaidees" >
            @csrf
            <input type="hidden" name="eventid" value="{{$event->ID}}">
            <input type="hidden" name="userid" value="{{Auth::ID()}}">
            <input type="hidden" name="likestatus" value="1">
            <input type="submit" name="btnlike" value="Ne plus soutenir" class="btn btn-sm btn-info"/>
          </form>
        </div>
          @else
          <div class="marginright">
          <form method="post" action="boiteaidees" >
            @csrf
            <input type="hidden" name="eventid" value="{{$event->ID}}">
            <input type="hidden" name="userid" value="{{Auth::ID()}}">
            <input type="hidden" name="likestatus" value="0">
            <input type="submit" name="btnlike" value="Soutenir" class="btn btn-sm btn-primary"/>
          </form>
        </div>
          @endif
          @endif

        </div>
          <h5 class="soutient">Soutiens: {{$event->votescount}}</h5>
          <p><br>{{$event->TXT}}</p>
        </div>
      </div>

    <hr>
    @endif
    @endforeach
  </div>
@endsection
