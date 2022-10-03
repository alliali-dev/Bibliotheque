@extends('modele.layouts.main')
<title>{{config('app.name')}}|@yield('title','Ajouter un livre')</title>
@section('content')
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Livre</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Tableau de bord</a></li>
                            <li class="active">Ajouter</a></li>
                            <li><a href="{{ route('listepdfs') }}">Liste</a></li>
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
            <div class="row">
                <form action="{{ route('savepdf') }}" class="form" method="post" media="all" enctype="multipart/form-data" style="margin-top: 15px; margin-left: 5px;">
                    @csrf()
                    <div class="row">
                        <!-- <div class="col-xs-4 col-sm-3 col-md-2 col-lg-1 col-form-label">
                            <label for="NomLivre">Nom Livre</label>
                        </div> -->
                        <div class="col-xs-8 col-sm-8 col-md-6 col-lg-7">
                            <input type="text" class="form-control" name="NomLivre" id="NomLivre" value="{{ old('NomLivre') }}" pattern="{{ '[A-Za-zÂ-Ûâ-ûà-ùÄ-Üä-ü0-9é\' ]{2,50}' }}" title="Pas de caractères spéciaux et la taille doit être comprise entre 2 et 50 caractères" autofocus placeholder="Saisir le nom du livre ici" required>
                        </div>
                        <!-- <div class="col-xs-4 col-sm-3 col-md-2 col-lg-1 offset-1">
                            <label for="dateedi">Edité</label>
                        </div> -->
                        <div class="col-xs-4 col-sm-4 col-md-5 col-lg-4">
                            <!-- <label for="dateedi">Edité :</label> -->
                            <input type="date" class="form-control" name="dateedi" id="dateedi" title="Choisissez la date d'édition du livre ici" value="{{ old('dateedi') }}">
                        </div>
                    </div><br>
                    <div class="row">
                        <!-- <div class="col-xs-4 col-sm-3 col-md-2 col-lg-1">
                            <label for="Typelivre">Tye livre</label>
                        </div> -->
                        <div class="col-xs-10 col-sm-8 col-md-6 col-lg-7">
                            <select name="Typelivre" class="form-control" id="Typelivre" value="{{ old('Typelivre') }}" title="Cliquez pour selectionner le type de livre">
                                <option value="" readonly>{{ 'Sélectionnez le type de livre' }}</option>
                                <option value="" readonly>{{ '-------------------------------' }}</option>
                                @foreach($Typelivres as $typelivre)

                                <option value="{{ $typelivre->id }}">{{ $typelivre->LibType }}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- <div class="col-xs-4 col-sm-3 col-md-2 col-lg-1 offset-1">
                            <label for="Auteur">Auteur</label>
                        </div> -->
                        <div class="col-xs-10 col-sm-8 col-md-6 col-lg-4">
                            <select name="Auteur" class="form-control" id="Auteur" value="{{ old('Auteur') }}" title="Cliquez pour selectionner l'Auteur">
                                <option value="" readonly>{{ 'Sélectionnez l\'auteur du livre' }}</option>
                                <option value="" readonly>{{ '-------------------------------' }}</option>
                                @foreach($Auteurs as $auteur)
                                <option value="{{ $auteur->id }}">{{ $auteur->NomPrenAut }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div><br>
                    <div class="row">
                        <!-- <div class="col-xs-4 col-sm-3 col-md-2 col-lg-1">
                            <label for="Editeur">Editeur</label>
                        </div> -->
                        <div class="col-xs-10 col-sm-8 col-md-6 col-lg-7">
                            <select name="Editeur" class="form-control" id="Editeur" value="{{ old('Editeur') }}" title="Cliquez pour selectionner l'Editeur">
                                <option value="" readonly>{{ 'Sélectionnez l\'éditeur du livre' }}</option>
                                <option value="" readonly>{{ '-------------------------------' }}</option>
                                @foreach($Editeurs as $editeur)
                                <option value="{{ $editeur->id }}">{{ $editeur->LibEd }}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- <div class="col-xs-4 col-sm-3 col-md-2 col-lg-1 offset-1">
                            <label for="Categorie">Categorie: </label>
                        </div> -->

                        <div class="col-xs-10 col-sm-8 col-md-6 col-lg-4">
                            <select name="Categorie" class="form-control" id="Categorie" value="{{ old('Categorie') }}" title="Cliquez pour selectionner la categorie">
                                <option value="" readonly>{{ 'Sélectionnez la catégorie du livre' }}</option>
                                <option value="" readonly>{{ '-------------------------------' }}</option>
                                @foreach($Categories as $categorie)
                                <option value="{{ $categorie->id }}">{{ $categorie->LibCat}}</option>
                                @endforeach
                            </select>
                        </div>

                    </div><br>
                    <div class="row">
                        <div class="col-xs-4 col-sm-3 col-md-2 col-lg-1">
                            <label for="Couverture">Couverture </label> &nbsp;&nbsp;&nbsp;
                        </div>
                        <div class="col-xs-10 col-sm-8 col-md-6 col-lg-4">
                            <input type="file" class="form-control" name="Photolivre" title="Choisissez la photo du livre" value="{{ old('Photolivre') }}" id="Photolivre" accept="image/*">
                        </div>
                        <div class="col-xs-4 col-sm-3 col-md-2 col-lg-1 offset-1">
                            <label for="Livrepdf">PDF/Audio </label>&nbsp;&nbsp;&nbsp;
                        </div>
                        <div class="col-xs-10 col-sm-8 col-md-6 col-lg-4">
                            <input type="file" name="Livre" onclick="extension()" value="{{ old('Livre') }}" title="Choisissez le livre" class="form-control" id="Livrepdf" accept="audio/*,.pdf">
                        </div>
                    </div><br><br>
                    <div class="row">
                        <div class="col-xs-10 col-sm-8 col-md-6 col-lg-4 offset-4">
                            <button class="btn btn-danger" type="reset">Reprendre</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <button class="btn btn-primary" type="submit">Envoyer</button>
                        </div>
                    </div>
                </form>

            </div> <!-- .card -->

        </div>
    </div>
</div>
@stop