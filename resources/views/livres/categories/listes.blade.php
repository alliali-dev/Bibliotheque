@extends('modele/layouts.main')
<title>{{ config('app.name') }}| @yield('title','Liste des catégories')</title>
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
                            <li><a href="#">Tableau de Bord</a></li>
                            <li><a href="{{ route('catgs') }}">Ajouter</a></li>
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
                            <strong class="card-title">Liste Catégories</strong>
                        </div>
                        <div class="table-stats order-table ov-h">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th class="serial">#</th>
                                        <th>Nom de la catégorie</th>
                                        <th>Date de creation</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($Categories as $item)
                                    <tr>
                                        <td class="serial">{{ $item->IdCat }}</td>
                                        <!-- <td class="avatar"> -->
                                        <!-- <div class="round-img">
                                                    <a href="#"><img class="rounded-circle" src="{{asset('eladmin/images/avatar/1.jpg')}}" alt=""></a>
                                                </div> -->
                                        </td>
                                        <td>{{ $item->LibCat }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>
                                            <span class="badge badge-complete">Complete</span>
                                        </td>
                                    </tr>
                                    @empty
                                    <td>Pas de catégorie renseignée</td>
                                    @endforelse

                                </tbody>

                            </table>

                            <nav class="navbar-link">
                                {{ $Categories->links('pagination::bootstrap-4') }}
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