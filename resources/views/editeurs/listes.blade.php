@extends('modele.layouts.main')
<title>{{config('app.name')}}|@yield('title','liste des editeurs')</title>
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
                            <li><a href="#">Tableau de Bord</a></li>
                            <li><a href="{{ route('editeurs') }}">Ajouter</a></li>
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
            <div class="content">
                <div class="animated fadeIn">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Liste des Editeurs</strong>
                        </div>
                        <div class="table-stats order-table ov-h">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th class="serial">#</th>
                                        <th>Nom de l'Editeur</th>
                                        <th>Date de creation</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($Editeurs as $item)
                                    <tr>
                                        <td class="serial">{{ $item->IdEdi }}</td>
                                        </td>
                                        <td>{{ $item->LibEd }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>
                                            <span class="badge badge-complete">Modifier</span>
                                        </td>
                                    </tr>
                                    @empty
                                    <td>Pas d'éditeur renseigné</td>
                                    @endforelse
                                </tbody>
                            </table>
                            <nav class="navbar-link" style="width: 45px ; height: 45px;">
                                {{ $Editeurs->links('pagination::bootstrap-4') }}
                            </nav>

                        </div>
                    </div>
                </div> <!-- /.table-stats -->
            </div>
        </div>
    </div>
</div>
@stop