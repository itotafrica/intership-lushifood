<!DOCTYPE html>
<html lang="Fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo base_url('assets\bootstrap-4.1.3-dist\css\bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_urL('assets\font-awesome\css\all.min.css');?>">
    <title>Accueil</title>
</head>

<body>
    <!-- Navbar bootstrap section -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="..." alt="LOGO GLOU"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ">
                <li class="nav-item active">
                    <a class="nav-link" href="#">ACCEUIL<span class="sr-only">(current)</span></a>

                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2 " type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                    <i class="fa fa-search"></i>
                </button>
                <a href="http://" class="btn btn-success mx-lg-2">s'inscrire</a>
            </form>
        </div>
    </nav>


    <!-- Main section -->
    <div class="container-fluid mt-3">
        <div class="row">
            <!-- sidebar section -->
            <div class="col-lg-2 col-md-3 col-sm-12">
                <div>
                    <img src="<?php echo base_url('assets\images\DSC_1890_processed_small.jpg');?>" class="img-thumbnail" alt="thumbnail reserve pour la carte">
                </div>
                <hr class="divider">

                <div>
                    <p class="h5 font-weight-bold"> <h3>Vos Criteres</h3></p>
                </div>
                <hr class="divider">
                <!-- speciality section -->
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="font-weight-bold text-capitalize nav-link active mb-2" href="#">Specialites</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <div class="mb-0 form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Congolaise</label>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <div class="mb-0 form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Italienne</label>
                            </div>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <div class="mb-0 form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Italienne</label>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <div class="mb-0 form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Italienne</label>
                            </div>
                        </a>
                    </li>
                </ul>
                <hr class="divider">
                <!-- Place section -->
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="font-weight-bold text-capitalize nav-link active mb-2" href="#">Lieux</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <div class="mb-0 form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Centre ville</label>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <div class="mb-0 form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Peripherique</label>
                            </div>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <div class="mb-0 form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">ferme</label>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <div class="mb-0 form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Hotel</label>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-10 col-md-9 col-sm-12">
                <div class="row p-4">
                    <!-- Resto title -->
                    <div class="col-sm-12 col-lg-4 mb-4">
                        <img src="<?php echo base_url('assets\images\DSC_1890_processed_small.jpg');?>" class="img-fluid " alt="La Piazza">
                    </div>
                    <div class="col-sm-12 col-lg-5">
                        <p class="h4 text-capitalize font-weight-bold mb-3">BARCELOS</p>
                        <p></span><i class="fa fa-map-marker-alt"></i>156, av. Mobutu </p>
                        <p> <i class="fa fa-crown"></i> Specialites :
                            <span class="badge badge-secondary">bukari</span>
                            <span class="badge badge-secondary">sushi</span>
                            <span class="badge badge-secondary">riz au lait</span>
                        </p>
                        <p>
                            <i class="fa fa-clock"></i>
                            Ouverture : 7h00 - 20h30
                        </p>
                        <p>
                            856 <i class="fa fa-heart"></i>
                            34 <i class="fa fa-comment"></i>
                        </p>
                    </div>

                    <!-- Resto title -->
                    <div class="col-sm-12 col-lg-4 mb-4">
                        <img src="<?php echo base_url('assets\images\DSC_1890_processed_small.jpg');?>" class="img-fluid " alt="BARCELOS">
                    </div>
                    <div class="col-sm-12 col-lg-5">
                        <p class="h4 text-capitalize font-weight-bold mb-3">La Piazza</p>
                        <p></span><i class="fa fa-map-marker-alt"></i>156, av.lomami/mobutu </p>
                        <p> <i class="fa fa-crown"></i> Specialites :
                            <span class="badge badge-secondary">bukari</span>
                            <span class="badge badge-secondary">sushi</span>
                            <span class="badge badge-secondary">riz au lait</span>
                        </p>
                        <p>
                            <i class="fa fa-clock"></i>
                            Ouverture : 7h00 - 20h30
                        </p>
                        <p>
                            856 <i class="fa fa-heart"></i>
                            34 <i class="fa fa-comment"></i>
                        </p>
                    </div>


                    <!-- Resto title -->
                    <div class="col-sm-12 col-lg-4 mb-4">
                        <img src="<?php echo base_url('assets\images\DSC_1890_processed_small.jpg');?>" class="img-fluid " alt="hypnose">
                    </div>
                    <div class="col-sm-12 col-lg-5">
                        <p class="h4 text-capitalize font-weight-bold mb-3">hypnose High resto</p>
                        <p></span><i class="fa fa-map-marker-alt"></i>156, av. kapenda </p>
                        <p> <i class="fa fa-crown"></i> Specialites :
                            <span class="badge badge-secondary">bukari</span>
                            <span class="badge badge-secondary">sushi</span>
                            <span class="badge badge-secondary">riz au lait</span>
                        </p>
                        <p>
                            <i class="fa fa-clock"></i>
                            Ouverture : 7h00 - 20h30
                        </p>
                        <p>
                            856 <i class="fa fa-heart"></i>
                            34 <i class="fa fa-comment"></i>
                        </p>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!-- Footer Section -->

    <div class="container mt-2">
        <hr class="py-3">
        <div class="row">
            <div class="col-sm-12 col-lg-3 col-md-5 border-1">
                <p class="h5 font-weight-bold">Taux du Jour</p>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Monnaie</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>USD</option>
                        <option>EUR</option>
                        <option>RAND</option>
                        <option>KWATCHA</option>

                                                
                        
                    </select>
                </div>

                <p>Franc Congolais : <input type="numerique" name=""></p>

            </div>
            <div class="col-sm-12 col-lg-9 col-md-5">
                <img src="" alt="LOGO GLOU">
                <p><h6>LUSHIFOOD n est pas un restaurant,mais plutot un espace qui offre une visibilite sur tous les restaurants de la ville de lubumbashi.Vous pourez y faire des commande ou meme des reservations.</h6></p><hr>

                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">A propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Infos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>

                </ul>

                <div class=" text-center mt-2">
                    <h6 class="text-primary ">
                        copyright (&copy;) I.T.O.T Africa 2018
                    </h6>
                </div>
            </div>
        </div>
    </div>


   
    <script src="<?php echo base_url('assets\js\vendor\jquery-3.2.1.min.js');?>"></script>
    <script src="<?php echo base_url('assets\js\vendor\popper.min.js');?>"></script>
   
</body>

</html>