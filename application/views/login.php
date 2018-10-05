<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login-restaurant</title>
	<meta charset="UTF-8">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?php echo base_url('assets\images\icons\favicon.ico');?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets\vendor\bootstrap\css\bootstrap.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href=" <?php echo base_url('assets\fonts\font-awesome-4.7.0\css\font-awesome.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets\css\util.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets\css\main.css');?>">
<!--===============================================================================================-->
<!--===============================================================================================-->
<script src="https://www.gstatic.com/firebasejs/5.5.2/firebase.js"></script>
 <script>
        // Initialize Firebase
        var config = {
            apiKey: "AIzaSyAtttiOl9i-wGSK0QFUwf9H8cQrOhF6bxg",
            authDomain: "glou-web-login.firebaseapp.com",
            databaseURL: "https://glou-web-login.firebaseio.com",
            projectId: "glou-web-login",
            storageBucket: "glou-web-login.appspot.com",
            messagingSenderId: "97694971563"
        };
		firebase.initializeApp(config);
		
		function login(){
			firebase.auth().createUserWithEmailAndPassword("gaelmmg@gmail.fr", "password").catch(function(error) {
            var errorCode = error.code;
            var errorMessage = error.message;

            alert(errorMessage);
        	});
		}
    </script>
</head>
<body >
	
	<div class="limiter" >
		<div class="container-login100" style="background-image:url('<?php echo base_url('assets/images/menu.jpg');?>');background-repeat: no-repeat;background-size: 100%;">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30" style="background: rgba(255,255,255,0.8); ">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-55">
						Login
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Mettez une adresse valide svp!: exemple@email.com">
						<input class="input100" type="text" name="email" placeholder="Adresse email" id="ip_email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<img src="<?php echo base_url('assets\images\user.png');?>" width="7%;">
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Mettez un mot de passe">
						<input class="input100" type="password" name="pass" placeholder="Mot de passe" id="ip_pwd">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<img src="<?php echo base_url('assets\images\lock.png');?>" width="7%;">
						</span>
					</div>
					
					<div class="container-login100-form-btn p-t-25">
						<button class="login100-form-btn"  onClick="login()">
							CONNEXION
						</button>
					</div>

					<div class="text-center w-full p-t-42 p-b-22">
						<span class="txt1">
							Ou connectez-vous avec
						</span>
					</div>

					<a href="#" class="btn-face m-b-10">
						<i class="fa fa-facebook-official"></i>
						Facebook
					</a>

					<a href="#" class="btn-google m-b-10">
						<img src="<?php echo base_url('assets\images\icons\icon-google.png');?>" alt="GOOGLE">
						Google
					</a>


				</form>
			</div>
		</div>
	</div>
	
	
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets\vendor\jquery\jquery-3.2.1.min.js');?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets\js\main.js');?>"></script>
<!--===============================================================================================-->


</body>
</html>