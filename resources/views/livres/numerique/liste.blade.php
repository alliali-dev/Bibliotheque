@extends('modele.layouts.mainuser')
<title>{{ config('app.name')}}|@yield('title','Liste des livres')</title>
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
                            <li><a href="#">Tableau de Bord</a></li>
                            <!-- <li><a href="{{ route('pdf') }}">Ajouter</a></li> -->
                            <li class="active">Liste</li>
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
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Liste Livre</strong>
                </div>
                <div class="table-stats order-table ov-h">
                    <table class="table ">
                        <thead>
                            <tr>
                                <!-- <th class="serial">#</th> -->
                                <th>Nom du livre</th>
                                <th>Type du livre</th>
                                <th>Categorie du livre</th>
                                <th>Auteur du livre</th>
                                <th>Editeur du livre</th>
                                <th>Photo du livre</th>
                                <th>Contenu du livre</th>
                                <th>Date d'Enregistrement'</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($Livres as $item)
                            <tr>
                                <td class="serial">{{ $item->LibLivre }}</td>

                                <!-- <span class="badge badge-complete">Lire</span> -->

                                </td>
                                <td>{{ $item->typelivre->LibType  }}</td>
                                <td>{{ $item->categorie->LibCat  }}</td>
                                <td>{{ $item->auteur->NomPrenAut }}</td>
                                <td>{{ $item->editeur->LibEd }}</td>
                                <td>
                                    <img src="{{ asset('fichiers/image/'.$item->image) }}" alt="">
                                </td>
                                <td>{{ $item->document }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td>
                                    @php
                                    $url = URL::asset('fichiers/document/'.$item->document);
                                    $src = $url;
                                    @endphp
                                    <!-- button lecture -->
                                    <button type="button" class=" btn btn-success" data-toggle="modal" data-target="#lirelivre" data-src="{{ $src }}">
                                        <i class="mdi mdi-eye-plus text-primary"></i>
                                        Lire
                                    </button>
                                    <!-- end button lecture -->
                                </td>
                            </tr>
                            @empty
                            <td>Pas de livre renseigné</td>
                            @endforelse

                        </tbody>
                    </table>
                    <!-- pagination -->
                    <nav class="navbar-link" style="width: 45px ; height: 45px;">

                        {{ $Livres->links('pagination::bootstrap-4') }}
                    </nav>
                    <!-- end pagination -->

                </div>
            </div>
        </div> <!-- /.table-stats -->
    </div>
    <!-- Modal starts -->
    <div class="modal fade bd-example-modal-lg" id="lirelivre" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        LIVRE
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- iframe -->
                    <iframe src="" id="preview_doc" frameborder="0" style="width:100%;min-height:640px;">
                    </iframe>


                    <!-- end iframe -->
                </div>
                <!-- Boutton retour -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Retour</button>
                </div>
                <!-- endBoutton retour -->
            </div>
        </div>
    </div>
    <!-- Modal Ends -->
</div>
</div>
</div>
@stop

@section('js')


<script type="text/javascript">
    jQuery(document).ready(function() {
        console.log(111);
    });
</script>
<script type="text/javascript">
    console.log(111);
    jQuery('#lirelivre').on('show.bs.modal', function(event) {
        var button = jQuery(event.relatedTarget);
        var src = button.data('src');
        var modal = jQuery(this);
        jQuery('#preview_doc').attr('src', src);
        console.log(src);
        modal.find('.modal-body #preview_doc').attr('src', src);
    });
</script>
@endsection