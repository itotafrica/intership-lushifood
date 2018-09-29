<!DOCTYPE html>
<html lang="en">
<head>
	<title>Panier</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
				<a href="<?php echo base_url('welcome/index');?>" class="logo">
					<H1>Gl<b style="color: red;">o</b>u</H1>
				</a>
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li>
								<a href="<?php echo base_url('welcome/index');?>">Accueil</a>
							</li>

							<li>
								<a href="<?php echo base_url('welcome/pageapropos'); ?>">About</a>
							</li>
						</ul>
					</nav>
				</div>
				<div class="header-icons">
					<span class="linedivide1"></span>

					<div class="header-wrapicon2">
						<img src="<?php echo base_url('assets/images/icons/icon-header-02.png');?>" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti">1</span>

					</div>
				</div>
			</div>
		</div>
		<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="index.html" class="logo-mobile">
				<H1><b style="color: red;">U</b>NIQUE</H1>
			</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				<div class="header-icons-mobile">

					<span class="linedivide2"></span>

					<div class="header-wrapicon2">
						<img src="<?php echo base_url('assets/images/icons/icon-header-02.png');?>" class="header-icon1 js-show-header-dropdown" alt="ICON">
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

					<li class="item-topbar-mobile p-l-10">
						<div class="topbar-social-mobile">
							<a href="#" class="topbar-social-item fa fa-facebook"></a>
							<a href="#" class="topbar-social-item fa fa-instagram"></a>
							<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
							<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
							<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
						</div>
					</li>

					<li class="item-menu-mobile">
						<a href="<?php echo base_url('welcome/index');?>">Accueil</a>
					</li class="item-menu-mobile">
					

					<li class="item-menu-mobile">
						<a href="<?php echo base_url('welcome/pageapropos');?>">About</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(<?php echo base_url('assets/images/menu.jpg');?>);">
		<h2 class="l-text2 t-center">
			<i class="fa fa-shopping-cart" aria-hidden="true"></i>
			Panier
		</h2>
	</section>
	
	<section class="cart bgwhite p-t-70 p-b-100">
	
		<div class="container">
			<div class="container-table-cart pos-relative">
				<div class="wrap-table-shopping-cart bgwhite">
					<table class="table-shopping-cart">
						<tr class="table-head">
							<th class="column-1"></th>
							<th class="column-2">Produit</th>
							<th class="column-3">Prix</th>
							<th class="column-4">Quantite</th>
							<th class="column-5">Total</th>
							<th class="column-5">Rafraichir</th>
							<th class="column-5">supprimer</th>
						</tr>
						<?php //foreach($this->cart->contents() as $value):?>
						<?php //echo form_open('welcome/mettreajourpanier');?>
						<h5><b><?php //$prix =$value['price']; ?></b></h5>
						<tr class="table-row">
							<td class="column-1">
								<div class="cart-img-product b-rad-4 o-f-hidden">
									<img src="<?php echo base_url('assets\images\menu.jpg');?>" alt="IMG-PRODUCT">
								</div>
							</td>
							<td class="column-2"><h6><b><?php //echo $value['name']; ?></b></h6></td>
							<td class="column-3"><h6><b><?php //echo (float)$prix;?>$</b></h6></td>
							<td class="column-4">
								<div class="flex-w bo5 of-hidden w-size17">
									<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
										<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
									</button>

									<input class="size8 m-text18 t-center num-product" type="number" name="quantity" value="1" style ="color:black;">

									<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
										<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
									</button>
								</div>
								<input type="hidden" value="<?php// echo $value['rowid'];?>" name ="id" >
							</td>
							<td class="column-5"><h6><b><?php// $prixeunitaire = $value['qty']*$value['price']; echo $prixeunitaire; ?>$</b></h6></td>
							<td class="column-6"><button>
									<img src="<?php echo base_url('assets/images/update1.png'); ?>" width = '30%'>
								</button>	</td>
							<td class="column-7"><a href='// echo base_url('welcome/deletepanier/'.$value['rowid']);'>
									<img src="<?php echo base_url('assets/images/sup1.png');?>" width = '30%'>
								</a>	</td>
						</tr>
						<?php //echo form_close();?>
						<?php //$tab[] = $value['name']; $tabprix[] = $value['price']; $tabqty[] = $value['qty']; $tabtaille[]= $value['option']['Size']; $tabcolor[]= $value['option']['Color'];?>
						<?php //endforeach?>
						<?php //$tab = $tab;?>
						<?php //$tabprix = $tabprix; $tabqty = $tabqty;$tabtaille = $tabtaille;?>
						<tr style="color: green; font-size: 12px; font-family: bold;">
						<td class="column-1">
								<div class="cart-img-product b-rad-4 o-f-hidden">
									<img src="<?php echo base_url('assets/images/menu.jpg');?>" alt="IMG-PRODUCT">
								</div>
							</td>
						<td class="column-2"><h6><b>FACTURE</b></h6></td>
							<td class="column-3"><h6><b>_________</b></h6></td>
							<td class="column-4"><h6><b>
								<?php //echo $this->cart->total_items();?>  articles
								</b></h6>
							</td>
							<td class="column-5"><h6><b><?php// echo $this->cart->total()."$";?></b></h6></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<?php //echo form_open('welcome/passetacommande');?>
		<section class="bgwhite p-t-66 p-b-60" >
		<div class="container">
			<div class="row">
				<div class="col-md-6 p-b-30">
					<div class="p-r-20 p-r-0-lg">
						<div class="contact-map size21" id="google_map" data-map-x="40.614439" data-map-y="-73.926781" data-pin="images/icons/icon-position-map.png" data-scrollwhell="0" data-draggable="1"></div>
					</div>
				</div>
				<div class="col-md-6 p-b-30">
						<h4 class="m-text26 p-b-36 p-t-15">
							completez et cliquer sur <b>commander</b>
						</h4>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="nameuser" placeholder="nom complet" required="">
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="email" name="mail" placeholder=" email@exemple.com" required="">
						</div>
							<input class="sizefull s-text7 p-l-22 p-r-22" type="hidden" name="nomarticle"  value="
									">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="hidden" name="prixarticle"  value="
									">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="hidden" name="taillearticle" value="
									echo $tabtaille[$k];
									endfor?>">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="hidden" name="colorarticle"  value="
									">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="hidden" name="quantity"  value="">
						<div class="w-size25">
							<button class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
								COMMANDER
							</button>
						</div>
					</div>
				</div>
			</div>
	</section>
	<?php //echo form_close();?>
	<?php //else: echo "<h1 style ='text-align:center'>Vous n'avez rien dans le panier!</h1>";?>
	<?php// endif?>
	</section>
	<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
		<div class="flex-w p-b-90">
			<div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					REJOINNEZ-NOUS
				</h4>

				<div>
					<p class="s-text7 w-size27">
						Des question? nos adresses: golfmalela 789 av/ndjeke (+243) 97 775 377
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
						<a href="http://ikalaweb.com">ikalaweb</a>
					</li>
					<li>
						<a href="http://pbreakers.com">pbreakers</a>
					</li>
				</u>
				
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					aide?
				</h4>
				<ul>
					<li>
						<a href="<?php echo base_url('welcome/aide'); ?>">Manuel de l'Aide</a>
					</li>
					<li>
						<a href="">0977756377</a>
					</li>
				</ul>
				
			</div>

			<div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					ABONNEZ-VOUS
				</h4>

				<?php// echo form_open("welcome/abonnezvous");?>
					<div class="effect1 w-size9">
						<input class="s-text7 bg6 w-full p-b-5" type="text" name="mail" placeholder="email@exemple.com" required="">
						<span class="effect1-line"></span>
					</div>

					<div class="w-size2 p-t-20">
						<button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
							SOUSCRIRE
						</button>
					</div>

				<?php// echo form_close();?>
			</div>
		</div>

		<div class="t-center p-l-15 p-r-15">

			<div class="t-center s-text8 p-t-20">
				Copyright © <?php echo date('Y');?>. | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by UNIK
			</div>
		</div>
	</footer>
	<script src="<?php echo base_url('assets\js\main.js'); ?>"></script>

</body>
</html>
