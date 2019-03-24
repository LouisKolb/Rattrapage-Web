@extends('layouts.header')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Créer Catégorie</div>

                <div class="card-body">
                    <form method="POST" action="createcat">
                        @csrf
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Titre</label>
                            <div class="col-md-6">
                                <input type="text" name="title" required autofocus placeholder="Entrez un titre">
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
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
