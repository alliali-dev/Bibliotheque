@extends('modele.master')
@section('content')
<!-- NAVIGATION -->
<nav id="navigation">
	<!-- container -->
	<div class="container">
		<!-- responsive-nav -->
		<div id="responsive-nav">
			<!-- NAV -->
			<ul class="main-nav nav navbar-nav">
				<li class="active"><a href="#">Accueil</a></li>
				<li>
				<li><a href="{{ route('catg') }}">Categories</a></li>
				</li>
				<li>
					<a href="{{ route('audio') }}">Livres audio</a>
				</li>
				<li>
					<a href="{{ route('pdf') }}">Ajouter livre</a>
					<!-- <a href="{{ route('pdf') }}">Livres numérique</a> -->
				</li>
				<li>
					<a href="{{ route('listepdf') }}">Liste livre</a>
				</li>
				<li>
					<a href="{{ route('auteur') }}">Auteurs</a>
				</li>
				<li>
					<a href="{{ route('editeur') }}">Editeur</a>
				</li>
				<li>
					<a href="{{ route('typelivre') }}">Type de livre</a>
				</li>
				<li>

				</li>
			</ul>
			<!-- /NAV -->

		</div>
		<!-- /responsive-nav -->
	</div>
	<!-- /container -->
</nav>
<!-- /NAVIGATION -->

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<!-- shop -->
			<div class="col-md-4 col-xs-6">
				<div class="shop">
					<div class="shop-img">
						<img src="./img/shop01.png" alt="">
					</div>
					<div class="shop-body">
						<h3>Laptop<br>Collection</h3>
						<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
			<!-- /shop -->

			<!-- shop -->
			<div class="col-md-4 col-xs-6">
				<div class="shop">
					<div class="shop-img">
						<img src="./img/shop03.png" alt="">
					</div>
					<div class="shop-body">
						<h3>Accessories<br>Collection</h3>
						<a href="#" class="cta-btn">
							Shop now
							<i class="fa fa-arrow-circle-right">

							</i>
						</a>
					</div>
				</div>
			</div>
			<!-- /shop -->


		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">

			<!-- section title -->
			<div class="col-md-12">
				<div class="section-title">
					<h3 class="title">Affiches</h3>
				</div>
			</div>
			<!-- /section title -->

			<!-- Products tab & slick -->
			<div class="col-md-12">
				<div class="row">
					<div class="products-tabs">
						<!-- tab -->
						<div id="tab1" class="tab-pane active">
							<div class="products-slick" data-nav="#slick-nav-1">
								<!-- product -->
								<div class="product">
									<div class="product-img">
										<img src="{{asset('images/affiches/affiche1bibliosave265.jpg')}}" style="width:265px; height:200px;" alt="Affiche 1">
									</div>
								</div>
								<!-- /product -->

								<!-- product -->
								<div class="product">
									<div class="product-img">
										<img src="{{asset('images/affiches/affiche2bibliosave265.jpg')}}" style="width:265px; height:200px;"><img>
									</div>
								</div>
								<!-- /product -->

								<!-- product -->
								<div class="product">
									<div class="product-img">
										<img src="{{asset('images/affiches/affiche3bibliosave265.jpg')}}" style="width:265px; height:200px;" alt="Affiche 3">
									</div>
								</div>
								<!-- /product -->

								<!-- product -->
								<div class="product">
									<div class="product-img">
										<img src="{{asset('images/affiches/affiche5.jpg')}}" style="width:265px; height:200px;" alt="Affiche 5">
									</div>
								</div>
								<!-- product -->
								<div class="product">
									<div class="product-img">
										<img src="{{asset('images/affiches/affiche7.jpg')}}" style="width:265px; height:200px;" alt="Affiche 5">
									</div>
								</div>
								<!-- /product -->
								<!-- product -->
								<!-- <div class="product">
											<div class="product-img"> -->
								<!-- attribut poster pour afficher une image sur la video; autobuffer pour lecture et pause -->
								<!-- <video controls autobuffer poster="{{asset('images/affiches/logo_bibliosave.jpg')}}" src="{{asset('images/affiches/presentation.mp4')}}"  style="width: 265px; height:200px;"></video> -->
								<!-- </div>
										</div> -->
								<!-- /product -->
							</div>
							<div id="slick-nav-1" class="products-slick-nav"></div>
						</div>
						<!-- /tab -->
					</div>
				</div>
			</div>
			<!-- Products tab & slick -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">

			<!-- section title -->
			<div class="col-md-12">
				<div class="section-title">
					<h3 class="title">Les livres disponibles</h3>
					<div class="section-nav">
						<ul class="section-tab-nav tab-nav">
							<li class="active">
								<a data-toggle="tab" href="#tab2">Science</a>
							</li>
							<li>
								<a data-toggle="tab" href="#tab2">Société</a>
							</li>
							<li>
								<a data-toggle="tab" href="#tab2">Business</a>
							</li>
							<li>
								<a data-toggle="tab" href="#tab2">Culture</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /section title -->
			<!-- Products tab & slick -->
			<div class="col-md-12">
				<div class="row">
					<div class="products-tabs">
						<!-- tab -->
						<div id="tab2" class="tab-pane fade in active">
							<div class="products-slick" data-nav="#slick-nav-2">
								<!-- product -->
								<div class="product">
									<div class="product-img">
										<img src="{{asset('images/couvertures/Ali_Diaby_les_flammes_de_la_haine.jpg')}}" style="width:200px; height:120px;" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Ali Diaby</p>
										<h3 class="product-name"><a href="#">Les flammes de la haine</a></h3>
										<div class="product-rating">
										</div>
										<div class="product-btns">
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-book"></i>
											Lire
										</button>
									</div>
								</div>
								<!-- /product -->

								<!-- product -->
								<div class="product">
									<div class="product-img">
										<img src="{{asset('images/couvertures/Napoleon_Hill_Riche.png')}}" style="width:200px; height:120px;" alt="">
										<div class="product-label">
										</div>
									</div>
									<div class="product-body">
										<p class="product-category">Napoleon Hill</p>
										<h3 class="product-name"><a href="#">réfléchissez et devenez riche</a></h3>
										<div class="product-rating">
										</div>
										<div class="product-btns">
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-book"></i>
											Lire
										</button>
									</div>
								</div>
								<!-- /product -->

								<!-- product -->
								<div class="product">
									<div class="product-img">
										<img src="{{asset('images/couvertures/KLG_libre_pour_la_vérité_et_la_justice.jpg')}}" style="width:200px; height:120px;" alt="">
										<div class="product-label">
										</div>
									</div>
									<div class="product-body">
										<p class="product-category">Laurent GBAGBO</p>
										<h3 class="product-name"><a href="#">Libre pour la vérité et la justice</a></h3>
										<div class="product-rating">
										</div>
										<div class="product-btns">
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-book"></i>
											Lire
										</button>
									</div>
								</div>
								<!-- /product -->

								<!-- product -->
								<div class="product">
									<div class="product-img">
										<img src="{{asset('images/couvertures/Ali_Diaby_un_jour_dans_ma_vie.jpg')}}" style="width:200px; height:120px;" alt="">
										<div class="product-label">
										</div>
									</div>
									<div class="product-body">
										<p class="product-category">Ali Diaby</p>
										<h3 class="product-name"><a href="#">Un jour dans ma vie</a></h3>
										<div class="product-rating">
										</div>
										<div class="product-btns">
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-book"></i>
											Lire
										</button>
									</div>
								</div>
								<!-- /product -->

								<!-- product -->
								<div class="product">
									<div class="product-img">
										<img src="{{asset('images/couvertures/atiana-Assi-3secrets-de-reussite-d-un-business-en-ligne.jpg')}}" style="width:200px; height:120px;" alt="">
										<div class="product-label">
										</div>
									</div>
									<div class="product-body">
										<p class="product-category">Tatiana-Assi</p>
										<h3 class="product-name"><a href="#">3 secrets de reussite d'un business en ligne</a></h3>
										<div class="product-rating">
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-book"></i>
											Lire
										</button>
									</div>
								</div>
								<!-- /product -->
							</div>
							<div id="slick-nav-2" class="products-slick-nav"></div>
						</div>
						<!-- /tab -->
					</div>
				</div>
			</div>
			<!-- /Products tab & slick -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-4 col-xs-6">
				<div class="section-title">
					<h4 class="title">Romans</h4>
					<div class="section-nav">
						<div id="slick-nav-3" class="products-slick-nav"></div>
					</div>
				</div>

				<div class="products-widget-slick" data-nav="#slick-nav-3">
					<div>
						<p class="">abdoul_latif_President_et_assassins</p>
						<!-- product widget -->
						<div class="product-widget">
							<div class="product-img">
								<img src="{{asset('images/couvertures/abdoul_latif_President_et_assassins.jpg')}}" style="width:200px; height:120px;" alt="">
							</div>
							<div class="product-body">
							</div>
						</div>
						<!-- /product widget -->

						<!-- product widget -->
						<div class="product-widget">
						</div>
						<!-- /product widget -->

						<!-- product widget -->
						<div class="product-widget">
						</div>
						<!-- product widget -->
					</div>

					<div>
						<!-- product widget -->
						<div class="product-widget">
							<div class="product-img">
								<img src="./img/product01.png" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Category</p>
								<h3 class="product-name"><a href="#">product name goes here</a></h3>
								<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
							</div>
						</div>
						<!-- /product widget -->

						<!-- product widget -->
						<div class="product-widget">
							<div class="product-img">
								<img src="./img/product02.png" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Category</p>
								<h3 class="product-name"><a href="#">product name goes here</a></h3>
								<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
							</div>
						</div>
						<!-- /product widget -->

						<!-- product widget -->
						<div class="product-widget">
							<div class="product-img">
								<img src="./img/product03.png" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Category</p>
								<h3 class="product-name"><a href="#">product name goes here</a></h3>
								<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
							</div>
						</div>
						<!-- product widget -->
					</div>
				</div>
			</div>

			<div class="col-md-4 col-xs-6">
				<div class="section-title">
					<h4 class="title">Top vente</h4>
					<div class="section-nav">
						<div id="slick-nav-4" class="products-slick-nav"></div>
					</div>
				</div>

				<div class="products-widget-slick" data-nav="#slick-nav-4">
					<div>
						<!-- product widget -->
						<div class="product-widget">
							<div class="product-img">
								<img src="./img/product04.png" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Category</p>
								<h3 class="product-name"><a href="#">product name goes here</a></h3>
								<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
							</div>
						</div>
						<!-- /product widget -->

						<!-- product widget -->
						<div class="product-widget">
							<div class="product-img">
								<img src="./img/product05.png" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Category</p>
								<h3 class="product-name"><a href="#">product name goes here</a></h3>
								<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
							</div>
						</div>
						<!-- /product widget -->

						<!-- product widget -->
						<div class="product-widget">
							<div class="product-img">
								<img src="./img/product06.png" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Category</p>
								<h3 class="product-name"><a href="#">product name goes here</a></h3>
								<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
							</div>
						</div>
						<!-- product widget -->
					</div>

					<div>
						<!-- product widget -->
						<div class="product-widget">
							<div class="product-img">
								<img src="./img/product07.png" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Category</p>
								<h3 class="product-name"><a href="#">product name goes here</a></h3>
								<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
							</div>
						</div>
						<!-- /product widget -->

						<!-- product widget -->
						<div class="product-widget">
							<div class="product-img">
								<img src="./img/product08.png" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Category</p>
								<h3 class="product-name"><a href="#">product name goes here</a></h3>
								<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
							</div>
						</div>
						<!-- /product widget -->

						<!-- product widget -->
						<div class="product-widget">
							<div class="product-img">
								<img src="./img/product09.png" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Category</p>
								<h3 class="product-name"><a href="#">product name goes here</a></h3>
								<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
							</div>
						</div>
						<!-- product widget -->
					</div>
				</div>
			</div>

			<div class="clearfix visible-sm visible-xs"></div>

			<div class="col-md-4 col-xs-6">
				<div class="section-title">
					<h4 class="title">Top selling</h4>
					<div class="section-nav">
						<div id="slick-nav-5" class="products-slick-nav"></div>
					</div>
				</div>

				<div class="products-widget-slick" data-nav="#slick-nav-5">
					<div>
						<!-- product widget -->
						<div class="product-widget">
							<div class="product-img">
								<img src="./img/product01.png" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Category</p>
								<h3 class="product-name"><a href="#">product name goes here</a></h3>
								<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
							</div>
						</div>
						<!-- /product widget -->

						<!-- product widget -->
						<div class="product-widget">
							<div class="product-img">
								<img src="./img/product02.png" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Category</p>
								<h3 class="product-name"><a href="#">product name goes here</a></h3>
								<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
							</div>
						</div>
						<!-- /product widget -->

						<!-- product widget -->
						<div class="product-widget">
							<div class="product-img">
								<img src="./img/product03.png" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Category</p>
								<h3 class="product-name"><a href="#">product name goes here</a></h3>
								<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
							</div>
						</div>
						<!-- product widget -->
					</div>

					<div>
						<!-- product widget -->
						<div class="product-widget">
							<div class="product-img">
								<img src="./img/product04.png" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Categories</p>
								<h3 class="product-name"><a href="#">product name goes here</a></h3>
								<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
							</div>
						</div>
						<!-- /product widget -->

						<!-- product widget -->
						<div class="product-widget">
							<div class="product-img">
								<img src="./img/product05.png" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Category</p>
								<h3 class="product-name"><a href="#">product name goes here</a></h3>
								<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
							</div>
						</div>
						<!-- /product widget -->

						<!-- product widget -->
						<div class="product-widget">
							<div class="product-img">
								<img src="./img/product06.png" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Catego</p>
								<h3 class="product-name"><a href="#">product name goes here</a></h3>
								<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
							</div>
						</div>
						<!-- product widget -->
					</div>
				</div>
			</div>

		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->
<!-- Partenaires -->
<!-- SECTION -->

<!-- /SECTION -->
<!-- /top footer -->
<!-- /Partenaires -->
<!-- NEWSLETTER -->
<!-- <div id="newsletter" class="section"> -->
<!-- container -->
<!-- <div class="container"> -->
<!-- row -->
<!-- <div class="row">
					<div class="col-md-12">
						<div class="newsletter">
							<p>Abonnez-vous a notre <strong>NEWSLETTER</strong></p>
							<form>
								<input class="input" type="email" placeholder="Enter Your Email">
								<button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
							</form>
							<ul class="newsletter-follow">
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-instagram"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-pinterest"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div> -->
<!-- /row -->
<!-- </div> -->
<!-- /container -->
<!-- </div> -->
<!-- /NEWSLETTER -->
@stop