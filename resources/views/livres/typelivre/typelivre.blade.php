@extends('modele.layouts.mainadmin')
<title>{{ config('app.name') }}| @yield('title','Ajoutez une catégorie')</title>
@section('content')
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Type de livre</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Tableau de bord</a></li>
                            <li class="active">Ajouter</a></li>
                            <li><a href="{{ route('listtype') }}">Liste</a></li>
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
            
            <form action="{{ route('savetypelivre') }}" class="form" method="post" media="all" enctype="multipart/form-data" style="margin-top: 15px; margin-left: 5px;">
                    @csrf()
                <div class="row">   
                    <div class="col-xs-7 col-sm-7 col-md-8 col-lg-8">
                        <select  class="form-control" name="{{'typeLiv'}}" id="typeLiv" required>
                            <option  value="" readonly>Sélectionnez le type de livre</option>
                            <!-- <option  value="" readonly>-----------------------------</option> -->
                            <option  value="{{'pdf'}}">Pdf</option>
                            <option  value="{{'audio'}}">Audio</option>
                        </select>
                    </div>
                    <div class="col-xs-5 col-sm-5 col-md-4 col-lg-4">
                        <button class="btn btn-danger" type="reset">Reprendre</button>&nbsp;
                        <button class="btn btn-primary" type="submit">Ajouter</button>
                    </div>
                </div>
            </form>

             <!-- .card -->

        </div>
    </div>
</div>
@stop