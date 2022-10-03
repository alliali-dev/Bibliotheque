    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                @if(Auth()->user()->statut==3)
                <ul class="nav navbar-nav">
                    <li class="active">
                        <!-- tableau de bord gauche -->
                        <a href="{{route('dashboard')}}">
                            <i class="menu-icon fa fa-laptop"></i>Tableau de bord
                        </a>
                    </li>
                    <li class="menu-title">AUTEUR & EDITEUR</li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon fa fa-user"></i>Auteur
                        </a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-plus"></i>
                                <a href="{{route('auteurs')}}">Ajouter</a>
                            </li>
                            <li><i class="fa fa-table"></i>
                                <a href="{{route('listauts')}}">Liste</a>
                            </li>

                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon fa fa-home"></i>Editeur
                        </a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-plus"></i>
                                <a href="{{route('editeurs')}}">Ajouter</a>
                            </li>
                            <li><i class="fa fa-table"></i>
                                <a href="{{route('listedis')}}">Liste</a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-title">TYPES DE LIVRES</li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon fa fa-user"></i>Type de livre
                        </a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-plus"></i>
                                <a href="{{ route('typelivres') }}">Ajouter</a>
                            </li>
                            <li><i class="fa fa-table"></i>
                                <a href="{{ route('listtypes') }}">Liste</a>
                            </li>

                        </ul>
                    </li>

                    <li class="menu-title">LIVRES & CATEGORIES</li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon fa fa-book"></i>Livre
                        </a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-plus"></i>
                                <a href="{{route('pdfs')}}">Ajouter</a>
                            </li>
                            <li><i class="fa fa-table"></i>
                                <a href="{{route('listepdfs')}}">Liste</a>
                            </li>

                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon fa fa-cogs"></i>Catégorie
                        </a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-plus"></i><a href="{{ route('catgs') }}">Ajouter</a></li>
                            <li><i class="fa fa-table"></i><a href="{{ route('listcats') }}">Liste</a></li>
                        </ul>
                    </li>

                    <li class="menu-title">GESTION DES UTILISATEURS</li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon fa fa-user"></i>Utilisateur
                        </a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-plus"></i>
                                <a href="{{ route('registeradmin') }}">Ajouter un administrateur</a>
                            </li>
                            <li><i class="fa fa-plus"></i>
                                <a href="{{ route('registersuper') }}">Ajouter un super administrateur</a>
                            </li>
                            <li><i class="fa fa-table"></i>
                                <a href="{{ route('lm') }}">Liste</a>
                            </li>

                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon fa fa-cogs"></i>Rôles
                        </a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-plus"></i><a href="#">Rôle</a></li>
                            <li><i class="fa fa-table"></i><a href="#">Permission</a></li>
                        </ul>
                    </li>

                </ul>
                @elseif(Auth()->user()->statut==2)
                <ul class="nav navbar-nav">
                    <li class="active">
                        <!-- tableau de bord gauche -->
                        <a href="{{route('dashboard')}}">
                            <i class="menu-icon fa fa-laptop"></i>Tableau de bord
                        </a>
                    </li>
                    <li class="menu-title">AUTEUR & EDITEUR</li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon fa fa-user"></i>Auteur
                        </a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-plus"></i>
                                <a href="{{route('auteurs')}}">Ajouter</a>
                            </li>
                            <li><i class="fa fa-table"></i>
                                <a href="{{route('listauts')}}">Liste</a>
                            </li>

                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon fa fa-home"></i>Editeur
                        </a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-plus"></i>
                                <a href="{{route('editeurs')}}">Ajouter</a>
                            </li>
                            <li><i class="fa fa-table"></i>
                                <a href="{{route('listedis')}}">Liste</a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-title">TYPES DE LIVRES</li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon fa fa-user"></i>Type de livre
                        </a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-plus"></i>
                                <a href="{{ route('typelivres') }}">Ajouter</a>
                            </li>
                            <li><i class="fa fa-table"></i>
                                <a href="{{ route('listtypes') }}">Liste</a>
                            </li>

                        </ul>
                    </li>

                    <li class="menu-title">LIVRES & CATEGORIES</li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon fa fa-book"></i>Livre
                        </a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-plus"></i>
                                <a href="{{route('pdfs')}}">Ajouter</a>
                            </li>
                            <li><i class="fa fa-table"></i>
                                <a href="{{route('listepdfs')}}">Liste</a>
                            </li>

                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon fa fa-cogs"></i>Catégorie
                        </a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-plus"></i><a href="{{ route('catgs') }}">Ajouter</a></li>
                            <li><i class="fa fa-table"></i><a href="{{ route('listcats') }}">Liste</a></li>
                        </ul>
                    </li>

                    <li class="menu-title">GESTION DES UTILISATEURS</li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon fa fa-user"></i>Utilisateur
                        </a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i>
                                <a href="{{ route('lm') }}">Liste</a>
                            </li>

                        </ul>
                    </li>
                </ul>
                @else
                <ul class="nav navbar-nav">
                    <li class="active">
                        <!-- tableau de bord gauche -->
                        <a href="{{route('dashboard')}}">
                            <i class="menu-icon fa fa-laptop"></i>Tableau de bord
                        </a>
                    </li>
                    <li class="menu-title">AUTEUR & EDITEUR</li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon fa fa-user"></i>Auteur
                        </a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i>
                                <a href="{{route('listauts')}}">Liste</a>
                            </li>

                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon fa fa-home"></i>Editeur
                        </a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i>
                                <a href="{{route('listedis')}}">Liste</a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-title">TYPES DE LIVRES</li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon fa fa-user"></i>Type de livre
                        </a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i>
                                <a href="{{ route('listtypes') }}">Liste</a>
                            </li>

                        </ul>
                    </li>

                    <li class="menu-title">LIVRES & CATEGORIES</li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon fa fa-book"></i>Livre
                        </a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i>
                                <a href="{{route('listepdfs')}}">Liste</a>
                            </li>

                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon fa fa-cogs"></i>Catégorie
                        </a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="{{ route('listcats') }}">Liste</a></li>
                        </ul>
                    </li>
                </ul>
                @endif
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->