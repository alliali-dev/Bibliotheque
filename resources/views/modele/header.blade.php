<header>
    <div id="top-header">
        <div class="container">
            <ul class="header-links pull-left">
                <li>
                    <a href="#">
                        <i class="fa fa-clock-o" style="color: white;"></i>
                        <?= date('d-m-Y H:i'); ?>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-map-marker"></i>
                        Yopougon niangon/ Abidjan/ Côte d'ivoire
                    </a>
                </li>
            </ul>
            <!-- <ul class="header-links pull-right">
						<li><a href="#"><i class="fa fa-user-o"></i> Mon compte</a></li>
					</ul> -->
        </div>
    </div>
    <!-- /TOP HEADER -->

    <!-- MAIN HEADER -->
    <div id="header">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- LOGO -->
                <div class="col-md-3">
                    <div class="header-logo">
                        <a href="" class="logo">
                            <img src="{{asset('images/affiches/logo_bibliosave.jpg')}}"
                                style="width: 150px; height:90px;" alt="logo">
                        </a>
                    </div>
                </div>
                <!-- /LOGO -->

                <!-- SEARCH BAR -->
                <div class="col-md-6">
                    <div class="header-search">
                        <form>
                            <!-- <select class="input-select">
								<option value="1">Poesie</option>
								<option value="1">Roman</option>
								<option value="1">Theatre</option>
							</select> -->
                            <input class="input" placeholder="Search here">
                            <button class="search-btn">Recherche</button>
                        </form>
                    </div>
                </div>
                <!-- /SEARCH BAR -->
                <!-- ACCOUNT -->
                <div class="col-md-3 clearfix">
                    <div class="header-ctn">
                        <!-- Wishlist -->
                        <!-- <div>
									<a href="#">
										<i class="fa fa-heart-o"></i>
										<span>Votre liste de souhait</span>
										<div class="qty">2</div>
									</a>
								</div> -->
                        <!-- /Wishlist -->

                        <!-- Cart -->
                        <!-- <div class="dropdown"> -->
                        <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
								<i class="fa fa-user-o"></i>
								<span>Mon compte</span>
							</a> -->
                        <!-- <div class="cart-dropdown"> -->
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <a href="{{ '#' }}" style="color:white; font-size:15px;">
                                    <button class="btn btn-primary"><i class="fa fa-pencil"></i></button> Inscription
                                </a>
                                <span style="color:white; font-size:15px;">&VerticalBar;</span>
                                <!-- </div>|
							<div class="col-sm-6 col-md-8 col-lg-10"> -->
                                <a href="{{ '#' }}" style="color:white; font-size:15px;">
                                    <button class="btn btn-primary"><i class="fa fa-lock"></i></button> Connexion
                                </a>
                            </div>
                        </div>
                        <!-- </div> -->
                        <!-- </div> -->
                    </div>
                    <!-- /Cart -->

                    <!-- Menu Toogle -->
                    <!-- <div class="menu-toggle">
						<a href="#" style="color: white;">
							<i class="fa fa-bars"></i>
							<span>Menu</span>
						</a>
					</div> -->
                    <!-- /Menu Toogle -->
                </div>
            </div>
            <!-- /ACCOUNT -->
        </div>
        <!-- row -->
    </div>
    <!-- container -->
    </div>
    <!-- /MAIN HEADER -->
</header>