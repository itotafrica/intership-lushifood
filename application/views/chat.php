<!DOCTYPE html>
<html lang="en">
<head>
	<title>About</title>
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
<body>
<style>
#enline:hover{
	box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
	color: black;
}
#enline img, #send img {
    border-radius: 100%;
}
#service{
	position: absolute;
	left:35%;
	margin-top:-10%;
}
#send{
	position: absolute;
	margin-top: -12%;
	width:10%;
	left:69%;
}
textarea {
    width: 70%;
    padding: 12px 20px;
    margin: 8px 0;
     display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
	margin-top: 50%;
	border-radius: 2%;
	background: white;
 }
</style>
<header class="header1">
		<div class="container-menu-header">
			<div class="wrap_header">
				<a href="" class="logo">
					<H1>Gl<b style="color: red;">o</b>u Messenger</H1>
				</a>
				<div class="header-icons">
				<a href="#" class="header-wrapicon1 dis-block">
						<img src="<?php echo base_url('assets\images\icons\icon-header-01.png');?>" class="header-icon1" alt="ICON">
					</a>
					<span class="linedivide1"></span>
					<div class="header-wrapicon2">
						<a href=""><img src="<?php echo base_url('assets\images\para.png');?>" alt="ICON" width ="100%;"></a>
					</div>
				</div>
			</div>
		</div>
		<div class="wrap_header_mobile">
			<a href="index.html" class="logo-mobile">
				<H1>Gl<b style="color: red;">o</b>u Messenger</H1>
			</a>
			<div class="btn-show-menu">
				<div class="header-icons-mobile">

					<span class="linedivide2"></span>

					<div class="header-wrapicon2">
						<a href="" class="header-icon1 js-show-header-dropdown" alt="ICON"><img src="<?php echo base_url('assets\images\para.png');?>" alt="ICON"></a>
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
			</nav>
		</div>
	</header>
	<section class="bgwhite p-t-55 p-b-65" >
		<div class="container">
			<div class="row" >
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
					<div class="leftbar p-r-20 p-r-0-sm">
						<h4 class="m-text14 p-b-32">
							EN LIGNE
						</h4>
						<div class="filter-color p-t-22 p-b-50 bo3" id="enline">
							<img src="<?php echo base_url('assets/images/menu.jpg'); ?>" class="img-cercle" width ="30%">
							<div id="service">Kankola tshibala</div>
						</div>
                        <div class="filter-color p-t-22 p-b-50 bo3"  id="enline">
							<img src="<?php echo base_url('assets/images/menu.jpg'); ?>" class="img-cercle" width ="30%">
							<div id="service"> Roland Roben</div>
						</div>
                        <div class="filter-color p-t-22 p-b-50 bo3"  id="enline">
							<img src="<?php echo base_url('assets/images/menu.jpg'); ?>" class="img-cercle" width ="30%">
							<div id="service"> JoBoy</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-8 col-lg-9 p-b-50" style ="background-image: url('<?php echo base_url('assets/images/menu.jpg');?>'); background-repeat:no-repeat;background-size:100%;">
					<div class="flex-sb-m flex-w p-b-35">
					</div>

					<div class="row">
						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50" style ="background-color: rgba(1,1,88,0.8); width:100%; color: white;left:5%; ">
							<div class="block2">
								salut ca va?
							</div>

						</div>
                        <div style = "position:absolute; width:50%;margin-top:6%;left:54%; background-color:rgba(2,2,111,0.8);color: white;" class ="col-sm-12 col-md-6 col-lg-4 p-b-50">
							<div class="block2">
								ca va et toi?
							</div>
						</div>
					</div>
					<textarea type="text" placeholder="Entrez un message" name="msg" required></textarea>
					<div id ="send">
 						<a href =""><img src =" <?php echo base_url('assets\images\send.png');?>" width ="100%"></a>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
</html>