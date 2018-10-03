<!DOCTYPE html>
<html lang="en">
<head>
	<title>Produit restaurant</title>
	<meta charset="UTF-8">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?php echo base_url('assets\images\icons\favicon.ico');?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets\vendor\bootstrap\css\bootstrap.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets\css\util.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets\css\utiles.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets\css\main.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets\css\style.css');?>">
<!--===============================================================================================-->
</head>
<body >
	<header class="header1">
		<div class="container-menu-header">
			<div class="wrap_header">
				<a href="" class="logo">
					<H1>Gl<b style="color: red;">o</b>u</H1>
				</a>
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li>
								<h4><a href="<?php echo base_url('welcome/index');?>">Accueil</a></h4>
							</li>

							<li>
								<a href="<?php echo base_url('welcome/pageapropos');?>">A propos</a>
							</li>
						</ul>
					</nav>
				</div>
				<div class="header-icons">
					<span class="linedivide1"></span>
					<div class="header-wrapicon2">
						<a href=""><img src="<?php echo base_url('assets\images\msg.png');?>" alt="ICON"></a>
						<span class="header-icons-noti">1</span>
					</div>
				</div>
			</div>
		</div>
		<div class="wrap_header_mobile">
			<a href="index.html" class="logo-mobile">
				<H1>Gl<b style="color: red;">o</b>u</H1>
			</a>
			<div class="btn-show-menu">
				<div class="header-icons-mobile">

					<span class="linedivide2"></span>

					<div class="header-wrapicon2">
						<a href="" class="header-icon1 js-show-header-dropdown" alt="ICON"><img src="<?php echo base_url('assets\images\msg.png');?>" alt="ICON"></a>
						<span class="header-icons-noti">1</span>
					</div>
				</div>

				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
		</div>
		<div class="wrap-side-menu" >
			<nav class="side-menu">
					<li class="item-menu-mobile">
						<a href="<?php echo base_url('welcome/index');?>">Accueil</a>
					</li>
					<li class="item-menu-mobile">
						<a href="<?php echo base_url('welcome/pageapropos');?>">About</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>
	<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url('<?php echo base_url('assets/images/menu.jpg');?>');">
		<h2 class="l-text2 t-center">
			Bienvenue chez <b style="color:green;">ITOT</b> restau
		</h2>
		<p class="m-text13 t-center">
			solution de commande!
		</p>
	</section>
	<section class="bgwhite p-t-55 p-b-65">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
					<div class="leftbar p-r-20 p-r-0-sm">
						<h4 class="m-text14 p-b-32">
							COTATION RESTAURANT <img src="<?php echo base_url('assets\images\icons\favicon.ico');?>" width="10%">
						</h4>
						<div class="filter-color p-t-22 p-b-50 bo3">
							<img src="<?php echo base_url('assets/images/et1.png'); ?>" width="20%">
                            <img src="<?php echo base_url('assets/images/et1.png'); ?>" width="20%">
                            <img src="<?php echo base_url('assets/images/et1.png'); ?>" width="20%">
							<img src="<?php echo base_url('assets/images/et1.png'); ?>" width="20%">

						</div>
						<h4 class="m-text14 p-b-32">
							ADRESSE
						</h4>
						<div class="filter-color p-t-22 p-b-50 bo3">
							INFO....

						</div>
						<h4 class="m-text14 p-b-32">
							SPECIALISATION
						</h4>
						<div class="filter-color p-t-22 p-b-50 bo3">
							PLAT ITALIEN

						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
					<div class="flex-sb-m flex-w p-b-35">

						<span class="s-text8 p-t-5 p-b-5">
							Commandez nos plats en un click!
						</span>
					</div>

					<div class="row">
						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
									<img src="<?php echo base_url('assets\images\menu.jpg');?>" alt="IMG-PRODUCT">
									<div class="block2-overlay trans-0-4">
										<div class="block2-btn-addcart w-size1 trans-0-4">

											<a href="product-detail.html" class='flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4'>COMMANDER</a>
										</div>
									</div>
								</div>

								<div class="block2-txt p-t-20">
									<span class="block2-price m-text6 p-r-5">
									<b>NOM ARTICLE
									<span style="color: white;background: red;">PRIX</span></b>

									</span>
								</div>
							</div>

						</div>
						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
									<img src="<?php echo base_url('assets\images\menu.jpg');?>" alt="IMG-PRODUCT">
									<div class="block2-overlay trans-0-4">
										<div class="block2-btn-addcart w-size1 trans-0-4">

											<a href="product-detail.html" class='flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4'>COMMANDER</a>
										</div>
									</div>
								</div>

								<div class="block2-txt p-t-20">
									<span class="block2-price m-text6 p-r-5">
									<b>NOM ARTICLE
									<span style="color: white;background: red;">PRIX</span></b>

									</span>
								</div>
							</div>
							
						</div>
						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
									<img src="<?php echo base_url('assets\images\menu.jpg');?>" alt="IMG-PRODUCT">
									<div class="block2-overlay trans-0-4">
										<div class="block2-btn-addcart w-size1 trans-0-4">

											<a href="product-detail.html" class='flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4'>COMMANDER</a>
										</div>
									</div>
								</div>

								<div class="block2-txt p-t-20">
									<span class="block2-price m-text6 p-r-5">
									<b>NOM ARTICLE
									<span style="color: white;background: red;">PRIX</span></b>

									</span>
								</div>
							</div>
							
						</div>
						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
									<img src="<?php echo base_url('assets\images\menu.jpg');?>" alt="IMG-PRODUCT">
									<div class="block2-overlay trans-0-4">
										<div class="block2-btn-addcart w-size1 trans-0-4">

											<a href="product-detail.html" class='flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4'>COMMANDER</a>
										</div>
									</div>
								</div>

								<div class="block2-txt p-t-20">
									<span class="block2-price m-text6 p-r-5">
									<b>NOM ARTICLE
									<span style="color: white;background: red;">PRIX</span></b>

									</span>
								</div>
							</div>
							
						</div>
						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
									<img src="<?php echo base_url('assets\images\menu.jpg');?>" alt="IMG-PRODUCT">
									<div class="block2-overlay trans-0-4">
										<div class="block2-btn-addcart w-size1 trans-0-4">

											<a href="product-detail.html" class='flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4'>COMMANDER</a>
										</div>
									</div>
								</div>

								<div class="block2-txt p-t-20">
									<span class="block2-price m-text6 p-r-5">
									<b>NOM ARTICLE
									<span style="color: white;background: red;">PRIX</span></b>

									</span>
								</div>
							</div>
							
						</div>
						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
									<img src="<?php echo base_url('assets\images\menu.jpg');?>" alt="IMG-PRODUCT">
									<div class="block2-overlay trans-0-4">
										<div class="block2-btn-addcart w-size1 trans-0-4">

											<a href="product-detail.html" class='flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4'>COMMANDER</a>
										</div>
									</div>
								</div>

								<div class="block2-txt p-t-20">
									<span class="block2-price m-text6 p-r-5">
									<b>NOM ARTICLE
									<span style="color: white;background: red;">PRIX</span></b>

									</span>
								</div>
							</div>
							
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
		<div class="flex-w p-b-90">
			<div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					REJOINNEZ-NOUS
				</h4>

				<div>
					<p class="s-text7 w-size27">
					 nos adresses: golfmalela 789 av/ndjeke (+243) 97 775 377
					</p>

					<div class="flex-m p-t-30">
						<a href="#" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-pinterest-p"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-snapchat-ghost"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
					</div>
				</div>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					partenaire
				</h4>
				<ul>
					<li>
						<a href="">cyber...</a>
					</li>
					<li>
						<a href="">codex</a>
					</li>
				</u>
				
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Liens
				</h4>
				<ul>
					<li>
						<a href="">facebouf</a>
					</li>
				</u>
				
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					aide?
				</h4>
				<ul>
					<li>
						<a href="<?php echo base_url('welcome/aide'); ?>">GUIDE</a>
					</li>
					
				</ul>
				
			</div>

			<div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					ABONNEZ-VOUS AU RESTAU
				</h4>
					<div class="effect1 w-size9">
						<input class="s-text7 bg6 w-full p-b-5" type="text" name="mail" placeholder="email@exemple.com" required="">
						<span class="effect1-line"></span>
					</div>

					<div class="w-size2 p-t-20">
						<button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
							SOUSCRIRE
						</button>
					</div>
			</div>
		</div>

		<div class="t-center p-l-15 p-r-15">

			<div class="t-center s-text8 p-t-20">
				Copyright © <?php echo date('Y');?>. | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> KANKOLA TSHIBALA ELVIS@
			</div>
		</div>
	</footer>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets\vendor\jquery\jquery-3.2.1.min.js');?>"></script>
<!--===============================================================================================-->
	<script src="<?php ase_url('assets\js\main.js');?>"></script>

</body>
</html>