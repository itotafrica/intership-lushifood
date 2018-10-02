<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/login.css" />
    <link rel="stylesheet" href="../bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../font-awesome/css/all.min.css">

</head>

<body>
    <div class="container">
        <div class="login-form">
            <form action="/examples/actions/confirmation.php" method="post">
                <div class="avatar">
                    <img src="#" alt="logo Glou" />
                </div>
                <h2 class="text-center">Identifiant</h2>
                <div class="social-btn text-center">
                    <a href="#" class="btn btn-primary btn-block btn-lg"><i class="fa fa-facebook"></i> se connecter avec <b>Facebook</b></a>
                    <a href="#" class="btn btn-info btn-block btn-lg"><i class="fa fa-twitter"></i> se connecter avec <b>Twitter</b></a>
                    <a href="#" class="btn btn-danger btn-block btn-lg"><i class="fa fa-google"></i> se connecter avec <b>Google</b></a>
                </div>
                <div class="or-seperator"><i>ou</i></div>
                <div class="form-group">
                    <input type="text" class="form-control" name="
                    Nom d'utilisateur" placeholder="Nom d'utilisateur" required="required">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="mot de passe" placeholder="Password" required="required">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block login-btn">
                        se connecter</button>
                </div>
                <p class="text-center small"><a href="#">
                    Mot de passe oublié?</a></p>
            </form>
            <p class="text-center small">
                vous n'avez pas de compte? <a href="#">inscrivez-vous ici!</a></p>
        </div>
    </div>
</body>

</html>