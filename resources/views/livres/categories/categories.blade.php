@extends('modele/layouts.mainsuperadmin')
<title>{{ config('app.name') }}| @yield('title','Ajoutez une catégorie')</title>
@section('content')
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Catégorie</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Tableau de bord</a></li>
                            <li class="active">Ajouter</a></li>
                            <li><a href="{{ route('listcats') }}">Liste</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="animated fadeIn">
        <div class="col-lg-12">
                <form action="{{ route('savecat') }}" class="form" method="post" media="all" enctype="multipart/form-data" style="margin-top: 15px; margin-left: 5px;">
                    @csrf()
                    <div class="row">
                        <div class="col-xs-7 col-sm-7 col-md-8 col-lg-8">
                            <input type="text" class="form-control" id="libcat" name="libcat" value="{{ old('libcat') }}" pattern="{{ '[A-Za-zÂ-Ûâ-ûà-ùÄ-Üä-ü0-9éèÉ\' ]{2,50}' }}" title="Pas de caractères spéciaux et la taille doit être comprise entre 2 et 50 caractères"  autocomplete="true" autofocus placeholder="Saisir le nom de la catégorie ici"  required>
                        </div>
                        <div class="col-xs-5 col-sm-5 col-md-4 col-lg-4">
                            <button class="btn btn-danger" type="reset">Effacer</button>
                            &nbsp;
                            <button class="btn btn-primary" type="submit">Envoyer</button>
                        </div>
                    </div>
                </form>

        </div> <!-- .card -->

    </div>
</div>
@stop