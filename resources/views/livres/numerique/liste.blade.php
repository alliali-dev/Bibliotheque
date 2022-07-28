@extends('modele.master')
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
            <!-- <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Tableau de Bord</a></li>
                            !-- <li><a href="{{ route('pdf') }}">Ajouter</a></li> --
                            <li class="active">Liste</li>
                        </ol>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>
<div class="content">
    <div class="animated fadeIn">
        <div class="col-lg-12">
            <!-- <div class="card"> -->
            <div class="row">
                <div class="col-4"></div>

                <div class="col-4" style="text-align: center;">
                    @forelse($Livres as $item)
                    &nbsp;&nbsp;
                    <img src="{{ asset('fichiers/image/'.$item->image) }}" alt="" style="height: 8cm; width:6cm;">
                    <br>
                    @php
                    $url = URL::asset('fichiers/document/'.$item->document);
                    $src = $url;
                    @endphp
                    <!-- button lecture -->
                    <button type="button" class=" btn btn-success" data-toggle="modal" data-target="#lirelivre"
                        data-src="{{ $src }}">
                        <i class="mdi mdi-eye-plus text-primary"></i>
                        Lire
                    </button>
                    <!-- end button lecture -->

                    @empty
                    Pas de livre renseigné
                    @endforelse


                    <!-- pagination -->
                    <nav class="navbar-link" style="width: 25px ; height: 25px;">

                        {{ $Livres->links('pagination::bootstrap-4') }}
                    </nav>
                    <!-- end pagination -->
                </div>


                <div class="col-4"></div>
            </div>
        </div>
    </div>
    <!-- Modal starts -->
    <div class="modal fade bd-example-modal-lg" id="lirelivre" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
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