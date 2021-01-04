
<?php session_start();
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FITHUB</title>

    <!-- favicon icon -->
    <link rel=icon href=iconFit.png type="png">

    <link rel="stylesheet" href="assets/font/flaticon.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/about.css">
    <link rel="stylesheet" href="assets/css/panier.css">

</head>

<body>
    <!-- ===========================
    =====>> Top Preloader <<===== -->
    <div id="preloader">
        <div class="lds-css">
            <div class="preloader-3">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- =====>> End Top Preloader <<===== 
    =========================== -->

    <!-- ===========================
    =====>> Top Menu <<===== -->

    <header class="top-nav">
        <!-- Top Address -->
        <div class="top-address">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="top-address-ditels">
                            <ul>
                                <li>
                                    <i class="fas fa-map-marker-alt"></i>
                                    <a target="_blank" href="https://www.google.com/maps/place/New+York,+NY+10036,+USA/@40.7462126,-74.0089606,14z/data=!3m1!4b1!4m5!3m4!1s0x89c2585393f82307:0xf7d56896de1566ed!8m2!3d40.7602619!4d-73.9932872">Tunis, TUNISIE </a>
                                </li>
                                <li>
                                    <i class="far fa-clock"></i>
                                    <span>Lundi à Dimanche  :  8.00 Am - 9.00 Pm</span>
                                </li>
                                <li>
                                    <i class="fas fa-phone"></i>
                                    <a href="#">+216 71 234 567</a>
                                </li>
                            </ul>
                        </div>
                        <div class="top-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Top Address -->

        <!-- Top Menu -->
        <nav id="cssmenu">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="logo" >
                            <a href="accueil.php"><img src="assets/img/logo FitHUb.png" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <div id="head-mobile"></div>
                        <div class="button"></div>
                        <ul class="navbar-nav">
                            <!--<li><a href="acceuil.html">Acceuil</a>
                             
                            </li>
                            -->
                        <?php 
if (isset($_SESSION['id']))
{ ?>
                            <li><a href="#">Programmes&Coachs</a>
                                <ul>
                                    <li><a href="#">Programmes sportifs</a>
                                            

                                    <li><a href="#">Yoga</a></li>
                                    <li><a href="#">CrossFit</a></li>
                                    <li><a href="#">Musculation</a></li>
                                    <li><a href="#">Cardio</a></li>
                                        

                                    </li>
                                    <li><a href="#">Nos Coachs</a></li>
                                </ul>
                            </li>
                            <li><a href="abonnements.php">Abonnements</a>
                                </li>

                        
                            <li><a href="#">Nutritions&Alimentation</a>
                                <ul>
                                    <li><a href="">Nutritionniste</a></li>
                                    <li><a href="">Recette alimentaire</a></li>
                                </ul>
                            </li>
                               <li><a href="#">Forum</a>
                                <ul>
                                    <li><a href="#">News</a></li>
                                    <li><a href="">News Single</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.php">Contact</a>
                             
                            </li>
                            <li><a href="liste_produits.php">Boutique</a>
                                
                            </li>
                         
                           
                        </ul>
                    </div>
                    <!--<div class="col-lg-3 text-right p-0 nobile-position"style=" margin-left: -30px;">-->
                        <div class="shopping-bag">
                            <a class="cart" href="panier.php"><i class="fa fa-shopping-bag" ></i><span>0</span></a>
                        </div>
                        <a href="deconnexion.php" class="btn btn-3" style="margin-top:10px;">Deconnexion</a>
                       
                        <!-- <div class="search-dropdown">
                            <button type="button" class="icon-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                <i class="fas fa-search"></i>       
                            </button>
                            <form class="dropdown-menu dropdown-menu-right">
                                <input class="search-input " name="search" placeholder="Search " aria-label="Search ">
                                <button class="search-btn " type="submit"><i class="fas fa-search "></i>  </button>
                            </form>
                        </div>-->
                      
                    </div>
                     <?php 

                    }else{ ?>
                        <a href="connexion.php" class="btn btn-3" style="margin-top:10px;">Connexion</a> <?php } ?>
                </div>
            </div>
        </nav>
        <!-- End Top Menu -->
    </header>