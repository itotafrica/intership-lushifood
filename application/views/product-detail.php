<!DOCTYPE html>
<html lang="en">
<head>
	<title>Product Detail</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
<body class="animsition">

	<header class="header1">
		<div class="container-menu-header">
			<div class="wrap_header">
				<a href="index.html" class="logo">
					<H1>Gl<b style="color: red;">o</b>u</H1>
				</a>
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">

							<li>
								<a href="<?php echo base_url('welcome/index');?>">Accueil</a>
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
			<a href="#" class="logo-mobile">
				<H1>Gl<b style="color: red;">o</b>u</H1>
			</a>
			<div class="btn-show-menu">
				<div class="header-icons-mobile">
					<span class="linedivide2"></span>
					<div class="header-wrapicon2">
						<a href=""><img src="<?php echo base_url('assets\images\msg.png');?>" alt="ICON"></a>
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
				<ul class="main-menu">
					
					<li class="item-menu-mobile">
						<a href="<?php echo base_url('welcome/index');?>">Accueil</a>
					</li>

					<li class="item-menu-mobile">
						<a href="<?php echo base_url('welcome/pageapropos');?>">A propos</a>
					</li>

					
				</ul>
			</nav>
		</div>
	</header>
	<div class="container bgwhite p-t-35 p-b-80">
		<div class="flex-w flex-sb">
			<div class="w-size13 p-t-30 respon5">
				<div class="wrap-slick3 flex-sb flex-w">
					<div class="wrap-slick3-dots"></div>


					<div class="slick3">
						<div class="item-slick3" data-thumb="images/menu.jpg">
							<div class="wrap-pic-w">
								<img src="<?php echo base_url('assets\images\menu.jpg');?>" alt="IMG-PRODUCT">
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="w-size14 p-t-30 respon5">
				<h4 class="product-detail-name m-text16 p-b-13">
					BUKARI-ZAMBIE
				</h4>

				<span class="m-text17">
					$22
				</span>

				<p class="s-text8 p-t-10">
					ce produit est d'une qualite legale.
				</p>

				<!--  -->
				<div class="p-t-33 p-b-60">

					<form method="post">
						<div class="flex-m flex-w p-b-10">
						<div class="s-text15 w-size15 t-center">
							<h5>PRIX</h5>
						</div>

						<div class="rs2-select2 rs3-select2 bo4 of-hidden w-size16">
							20$
						</div>
					</div>

					<div class="flex-m flex-w">
						<div class="s-text15 w-size15 t-center">
							 <h5>ETOILES</h5>
						</div>

						<div class="rs2-select2 rs3-select2 bo4 of-hidden w-size16">
							3 etoiles
						</div>
					</form>
					
				</div>

					<div class="flex-r-m flex-w p-t-10">
						<div class="w-size16 flex-m flex-w">
							<div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">

								<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
									Panier
								</button>
							</div>
						</div>
					</div>
				</div>

				<div class="p-b-45">
					<span class="s-text8 m-r-35">Made in congo</span>
					<span class="s-text8">elvis Design</span>
				</div>

				<!--  -->
				<div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						DESCRIPTION: ce produit est fait a lushi-garnd-katanga-rdcongo
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<p class="s-text8">
							Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat
						</p>
					</div>
				</div>

				
			</div>
		</div>
	</div>

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
						<a href="">GUIDE</a>
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

</body>
</html>
