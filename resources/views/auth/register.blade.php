
@extends('layouts.header')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input id="nom" type="text" class="form-control{{ $errors->has('nom') ? ' is-invalid' : '' }}" name="nom" value="{{ old('nom') }}" required autofocus>

                                @if ($errors->has('nom'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nom') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="prenom" class="col-md-4 col-form-label text-md-right">{{ __('Prénom') }}</label>

                            <div class="col-md-6">
                                <input id="prenom" type="text" class="form-control{{ $errors->has('prenom') ? ' is-invalid' : '' }}" name="prenom" value="{{ old('prenom') }}" required autofocus>

                                @if ($errors->has('prenom'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('prenom') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Adresse Courriel') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!--<div class="form-group row">
                            <label for="localization" class="col-md-4 col-form-label text-md-right">{{ __('Centre') }}</label>

                            <div class="col-md-6">
                                <input id="localization" type="text" class="form-control{{ $errors->has('localization') ? ' is-invalid' : '' }}" name="localization" value="{{ old('localization') }}" required autofocus>

                                @if ($errors->has('localization'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('localization') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>-->
                        <div class="form-group row">
                            <label for="localization" class="col-md-4 col-form-label text-md-right">{{ __('Campus') }}</label>

                            <div class="col-md-6">

                                <select id="localization" name="localization" class="form-control{{ $errors->has('localization') ? ' is-invalid' : '' }}" value="{{ old('localization') }}" required style="height: 35px;">
                                <option>Angoulême</option>
                                <option>Arras</option>
                                <option>Bordeaux</option>
                                <option>Brest</option>
                                <option>Caen</option>
                                <option>Châteauroux</option>
                                <option>Dijon</option>
                                <option>Grenoble</option>
                                <option>La Rochelle</option>
                                <option>Le Mans</option>
                                <option>Lille</option>
                                <option>Lyon</option>
                                <option>Montpellier</option>
                                <option>Nancy</option>
                                <option>Nantes</option>
                                <option>Nice</option>
                                <option>Orléans</option>
                                <option>Paris Nanterre</option>
                                <option>Pau</option>
                                <option>Reims</option>
                                <option>Rouen</option>
                                <option>Saint-Nazaire</option>
                                <option>Strasbourg</option>
                                <option>Toulouse</option>
                            </select>

                             @if ($errors->has('localization'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('localization') }}</strong>
                                    </span>
                                @endif
                        </div>

                     </div>



                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mot de passe') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmation') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        <div>
                            <input type="checkbox" class="check" name="case" required>
                            <label for="scales"><a href="{{ url('/privacy') }}">Conditions générales d'utilisations</a></label>
                            @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif


                            </div>  
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Enregistrer') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
