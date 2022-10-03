@extends('modele.layouts.main')
<title>{{ config('app.name') }}| @yield('title','Liste des types de livre')</title>
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
                            <li><a href="#">Tableau de Bord</a></li>
                            <li><a href="{{ route('typelivres') }}">Ajouter</a></li>
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
                            <strong class="card-title">Les types de livre</strong>
                        </div>
                        <div class="table-stats order-table ov-h">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th>type de livre</th>
                                        <th>Date de creation</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($Typelivres as $item)
                                    <tr>
                                        <td>{{ $item->LibType	 }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>
                                            <span class="badge badge-complete">Complete</span>
                                        </td>
                                    </tr>
                                    @empty
                                    <td>Aucun type de livre</td>
                                    @endforelse

                                </tbody>

                            </table>

                            <nav class="navbar-link">
                                {{ $Typelivres->links('pagination::bootstrap-4') }}
                            </nav>

                        </div>
                    </div>
                </div> <!-- /.table-stats -->
            </div>
        </div> <!-- /.table-stats -->
    </div>
</div>
</div>
</div>
@stop