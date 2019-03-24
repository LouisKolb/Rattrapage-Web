@extends('layouts.header')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Créer Produit</div>

                <div class="card-body">
                    <form method="POST" action="createproduct" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Titre</label>
                            <div class="col-md-6">
                                <input type="text" name="title" required autofocus placeholder="Entrez un titre">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Prix</label>
                            <div class="col-md-6">
                                <input type="number" step="0.01" name="price" required autofocus placeholder="Entrez un prix">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Catégorie" class="col-md-4 col-form-label text-md-right">Catégorie</label>
                            <div class="col-md-6">
                                <select name="cat" required style="height: 25px;">
                                @foreach($availablecat as $cat)
                                <option value="{{$cat->ID}}">{{$cat->TITLE}}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Description</label>
                            <div class="col-md-6">
                                <textarea name="desc" class="form-control" rows="7" required autofocus placeholder="Entrez une description"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Illustration (.jpeg/.png)</label>

                            <div class="col-md-6">
                                <!--<input type="file" name="image" required autofocus accept="image/png, image/jpeg">-->
                                <input name="image" type="file" required autofocus id="image">
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
