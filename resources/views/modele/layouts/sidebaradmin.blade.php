    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{ route('boss')}}">
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
                                <a href="{{route('auteur')}}">Ajouter</a>
                            </li>
                            <li><i class="fa fa-table"></i>
                                <a href="{{route('listautss')}}">Liste</a>
                            </li>

                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon fa fa-home"></i>Editeur
                        </a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-plus"></i>
                                <a href="{{route('editeur')}}">Ajouter</a>
                            </li>
                            <li><i class="fa fa-table"></i>
                                <a href="{{route('listediss')}}">Liste</a>
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
                                <a href="{{ route('typelivre') }}">Ajouter</a>
                            </li>
                            <li><i class="fa fa-table"></i>
                                <a href="{{ route('listtypess') }}">Liste</a>
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
                                <a href="{{route('pdf')}}">Ajouter</a>
                            </li>
                            <li><i class="fa fa-table"></i>
                                <a href="{{route('listepdfss')}}">Liste</a>
                            </li>

                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon fa fa-cogs"></i>Catégorie
                        </a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-plus"></i><a href="{{ route('catg') }}">Ajouter</a></li>
                            <li><i class="fa fa-table"></i><a href="{{ route('listcatss') }}">Liste</a></li>
                        </ul>
                    </li>

                    <li class="menu-title">GESTION DES UTILISATEURS</li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon fa fa-user"></i>Utilisateur
                        </a>
                        <ul class="sub-menu children dropdown-menu">
                            <!-- <li><i class="fa fa-plus"></i>
                                <a href="#">Ajouter</a>
                            </li> -->
                            <li><i class="fa fa-table"></i>
                                <a href="#">Liste</a>
                            </li>

                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon fa fa-cogs"></i>Rôles
                        </a>
                        <!-- <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-plus"></i><a href="#">Rôle</a></li>
                            <li><i class="fa fa-table"></i><a href="#">Permission</a></li>
                        </ul> -->
                    </li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->