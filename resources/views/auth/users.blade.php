@extends('modele.layouts.mainsuperadmin')
<title>{{ config('app.name')}}|@yield('title','Liste des utilisateurs')</title>
@section('content')
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Utilisateur</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Tableau de Bord</a></li>
                            <li><a href="#">Ajouter</a></li>
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
                    <strong class="card-title">Liste des Utilisateurs</strong>
                </div>
                <div class="table-stats order-table ov-h">
                    <table class="table ">
                        <thead>
                            <tr>
                                <!-- <th class="serial">#</th> -->
                                <th>Nom et Prenoms</th>
                                <th>E-mail</th>
                                <th>Téléphone</th>
                                <th>Photo</th>
                                <th>Statut</th>
                                <th>Date d'Enregistrement</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($utilisateurs as $item)
                            <tr>
                                <td class="serial">{{ $item->name }}</td>

                                </td>
                                <td>{{ $item->email  }}</td>
                                <td>{{ $item->telephone  }}</td>
                                
                                
                                <td>
                                    <img src="{{ asset('fichiers/Avatar/'.$item->image) }}" style="width: 50px; height:50px;" alt="">
                                </td>
                                @php
                                    return $s= $item->statut;
                                            if($s==1){

                                                $stat="Visiteur";
                                                return $stat;
                                            }
                                            elseif($s==2){

                                                $stat="Admin";
                                                return $stat;
                                            }
                                            elseif($s==3){

                                                $stat="Super Admin";
                                                return $stat;
                                            }
                                            else{
                                                return "";
                                            }

                                @endphp
                                @php
                                    foreach($stat as $stats){
                                @endphp
                                 
                                <td>{{$stats[$i]; }}</td>
                                @php 
                                     ;}
                                @endphp
                                <td>{{ $item->created_at}}</td>
                                <td>
                                </td>
                            </tr>
                            @empty
                            <td>Pas d'Abonné</td>
                            @endforelse

                        </tbody>
                    </table>
                    <!-- pagination -->
                    <nav class="navbar-link" style="width: 45px ; height: 45px;">

                        {{ $$utilisateurs->links('pagination::bootstrap-4') }}
                    </nav>
                    <!-- end pagination -->

                </div>
            </div>
        </div> <!-- /.table-stats -->
    </div>
</div>
@stop