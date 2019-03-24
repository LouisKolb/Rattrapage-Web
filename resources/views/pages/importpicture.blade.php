@extends('layouts.header')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Importer image événement #{{$idevent}}</div>

                <div class="card-body">
                    <form method="POST" action="{{$idevent}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Image (.jpeg/.png)</label>

                            <div class="col-md-6">
                                <input name="image" required autofocus type="file">
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <input type="hidden" name="authorid"  value="{{Auth::ID()}}">
                                <input type="hidden" name="eventid"  value="{{$idevent}}">
                                <input type="submit" class="btnrefresh" style=" float: right; margin-top: 5px; margin-right: 5px;" value="Publier"/>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
