@extends('layouts.header')

@section('content')

<div class="event">

    @if(Auth::ID() && Auth::User()->permission >=2)
    <div class="container event-tittle"><h3>Évenements signalés</h3></div>
    <div class="container event-case" >
    <div class="col-md-12">
        @foreach ($events as $event)
        @if($event->Type >= 1 && $event->Reported_Event == 1)
        <div class="col-md-4">
        <a href="event/{{$event->ID_Events}}">
                <img src="{{$event->URL}}" alt="..." height="180" width="320" class="img-event"/>
                <div class="wrapper">
                    <div class="caption post-content ">
                        <h3>{{$event->TITLE}}</h3>
                    </div>
                </div>

            </a>
            </div>

        @endif
        @endforeach
        </div>
    </div>
    @endif

    <div class="container event-tittle"><h3>Évenements à venir</div>
        <div class="container event-case" >
            <div class="col-md-12">
            @foreach ($events as $event)
            @if($event->Type == 1 && $event->Reported_Event == 0)
            <a class="textevent" href="event/{{$event->ID_Events}}">
                <div class="col-sm-4">
                    <img src="{{ asset('eventimage') }}/{{$event->URL}}" alt="..." height="180" width="320" class="img-event" /></a>
                    <div class="wrapper">
                        <div class="caption post-content ">
                            <h3>{{$event->TITLE}}</h3>
                        </div>
                    </div>

                </a>
                </div>


            @endif
            @endforeach
            </div>
    </div>

    <div class="container event-tittle"><h3>Évenements passés</div>
        <div class="container event-case" >
            @foreach ($events as $event)
            @if($event->Type == 2 && $event->Reported_Event == 0)

                <div class="col-md-4 ">
                <a class="textevent" href="event/{{$event->ID_Events}}">
                    <img src="{{ asset('eventimage') }}/{{$event->URL}}" alt="..." height="180" width="320" />
                    <div class="wrapper">
                        <div class="caption post-content">
                            <h3>{{$event->TITLE}}</h3>
                        </div>
                    </div>
                </a>
                </div>


            @endif
            @endforeach
        </div>
    </div>

        @endsection

        @section('footer')
        @endsection
