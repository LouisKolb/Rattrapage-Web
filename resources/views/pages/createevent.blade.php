@extends('layouts.header')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Créer Évenement</div>

                <div class="card-body">
                    <form method="POST" action="createevent" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Titre</label>
                            <div class="col-md-6">
                                <input type="text" name="title" required autofocus placeholder="Entrez un titre">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Date</label>
                            <div class="col-md-6">
                              <input type="date" name="date" required autofocus min="{{date('Y-m-d')}}" value="{{date('Y-m-d')}}">
                            </div>
                        </div>
                        @if(Auth::User()->permission == 2)
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Récurrent</label>
                            <div class="col-sm-2">
                              <p>Tout les</p>
                            </div>
                            <div class="col-md-3">
                              <input type="number" name="recurrent" required autofocus min="0" value="0">
                            </div>
                            <div class="col-md-2">
                              <p>jours</p>
                            </div>
                        </div>
                        @else
                        <input type="hidden" name="recurrent" value="0">
                        @endif
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Description</label>
                            <div class="col-md-6">
                                <textarea name="desc" class="form-control" rows="7" required autofocus placeholder="Entrez une description"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Illustration (.jpeg/.png)</label>

                            <div class="col-md-6">
                                <input name="image" required autofocus type="file">
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <input type="hidden" name="authorid"  value="{{Auth::ID()}}">
                                @if(Auth::User()->permission == 1 || Auth::User()->permission == 3)
                                <input type="hidden" name="type"  value="0">
                                @endif
                                @if(Auth::User()->permission == 2)
                                <input type="hidden" name="type"  value="1">
                                @endif
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
