@extends('layouts.header')
@section('content')

<div class ="container"><h3>Event #{{$idevent}}</h3></div>
<div class ="container">
     <div class="wrapper">
  @foreach($registered as $reg)
    <div class ="container">
      <h5>{{$reg->Name}}</h5>
    </div>
@endforeach
  </div>
  </div>
@endsection
