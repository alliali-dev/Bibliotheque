@extends('modele.layouts.main')
<title>{{config('app.name')}}|@yield('title','Ajouter un éditeur')</title>
@section('content')
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Editeur</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Tableau de bord</a></li>
                            <li class="active">Ajouter</a></li>
                            <li><a href="{{ route('listediss') }}">Liste</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="animated fadeIn">
        <div class="col-md-10 col-lg-12">

            <form action="{{ route('saveedi') }}" class="form" method="post" media="all" enctype="multipart/form-data">
                @csrf()
                <div class="row">
                    <div class="col-xs-7 col-sm-7 col-md-8 col-lg-8">
                        <input type="text" class="form-control" id="libedi" style="width: 99%;" name="libedi" pattern="{{ '[A-Za-zÂ-Ûâ-ûà-ùÄ-Üä-ü0-9éè\' ]{2,50}' }}" title="Pas de caractères spéciaux et la taille doit être comprise entre 2 et 50 caractères" autofocus placeholder="Saisir le nom de l'éditeur ici">
                    </div>
                    <div class="col-xs-5 col-sm-5 col-md-4 col-lg-4">
                        <button class="btn btn-danger" type="reset">Reprendre</button>&nbsp;
                        <button class="btn btn-primary" type="submit">Ajouter</button>
                    </div>
                </div>
            </form>

        </div> <!-- .card -->
    </div>
</div>
@stop