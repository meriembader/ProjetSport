<?php  
  include_once "../../Controller/produitC.php";
  include_once "../../Model/produit.php";

  $produitC=new produitC();
  $listeProduit=$produitC->afficherJoinedcategorie();

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
                            <a href="acceuil.html"><img src="assets/img/logo FitHUb.png" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <div id="head-mobile"></div>
                        <div class="button"></div>
                        <ul class="navbar-nav">
                            <!--<li><a href="acceuil.html">Acceuil</a>
                             
                            </li>
                            -->
                            <li><a href="#">Nos Coachs</a>
                                <ul>
                                    <li><a href="coach.html">coachs</a></li>
                                    <li><a href="trainers-single.html">Trainers Single</a></li>
                                </ul>
                            </li>
                           
                           <li><a href="#">Nos Programmes Sprotifs</a>
                                <ul>
                                    <li><a href="#">Yoga</a></li>
                                    <li><a href="#">CrossFit</a></li>
                                    <li><a href="#">Musculation</a></li>
                                    <li><a href="#">Cardio</a></li>   
                                </ul>
                            </li>
                            <li><a href="#">Nutritions&Alimentation</a>
                                <ul>
                                    <li><a href="nutritionniste.html">Nutritionniste</a></li>
                                    <li><a href="recette.html">Recette alimentaire</a></li>
                                </ul>
                            </li>
                               <li><a href="#">Forum</a>
                                <ul>
                                    <li><a href="news.html">News</a></li>
                                    <li><a href="news-single.html">News Single</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a>
                             
                            </li>
                            <li><a href="#">Boutique</a>
                                <ul>
                                    <li><a href="shop.html">shop</a></li>
                                    <li><a href="shop-single.html">Articles</a></li>
                                </ul>
                            </li>
                         
                           
                        </ul>
                    </div>
                    <!--<div class="col-lg-3 text-right p-0 nobile-position"style=" margin-left: -30px;">-->
                        <div class="shopping-bag">
                            <a class="cart" href="#"><i class="fa fa-shopping-bag" ></i><span>0</span></a>
                        </div>
                        <a href="connexion.html" class="btn btn-3" style="margin-top:10px;">Connexion</a>
                        <div class="search-dropdown">
                            <button type="button" class="icon-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                <i class="fas fa-search"></i>       
                            </button>
                            <form class="dropdown-menu dropdown-menu-right">
                                <input class="search-input " name="search" placeholder="Search " aria-label="Search ">
                                <button class="search-btn " type="submit"><i class="fas fa-search "></i>  </button>
                            </form>
                       <!-- </div>-->
                      
                    </div>
                </div>
            </div>
        </nav>
        <!-- End Top Menu -->
    </header>
    <!-- =====>> End Top Menu <<===== 
    =========================== -->

    <!-- ===========================
    =====>> Page Hero <<===== -->
    <section id="page-hero" class="about-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title text-center">
                        <h1>fitner <span>news</span></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =====>> End Page Hero <<===== 
    =========================== -->

    <!-- ===========================
    =====>> Blog <<===== -->
    <section class="ftco-section">
  <div class="container">
  <div class="af_filter p clearfix range-filter has-slider" data-trigger="p" data-url="prix">
				<div class="af_subtitle_heading">
					<h5 class="af_subtitle">Prix</h5>
				</div>
				<div class="af_filter_content">
													<div class="p_slider af_slider slider" data-url="prix" data-type="p">
						<div class="slider-bar">
							<input type="hidden" id="p_slider" value="419,7449" data-step="1" style="display: none;"><div class="slider-container theme-green" style="width: 100%;"><div class="back-bar"><div class="selected-bar" style="width: 190px; left: 0px;"></div><div class="pointer low" style="left: -7px;"></div><div class="pointer-label low" style="display: none;">419</div><div class="pointer high" style="left: 183px;"></div><div class="pointer-label high" style="display: none;">7449</div><div class="clickable-dummy"></div></div><div class="scale"></div></div>
						</div>
						<div class="slider-values">
							<span class="from_display slider_value">
								<span class="prefix"></span><span class="value">419</span><span class="suffix">DT</span>
								<input type="text" id="p_from" class="input-text" name="sliders[p][from]" value="419">
								<input type="hidden" id="p_min" name="sliders[p][min]" value="419">
							</span>
							<span class="to_display slider_value">
								<span class="prefix"></span><span class="value">7 449</span><span class="suffix">DT</span>
								<input type="text" id="p_to" class="input-text" name="sliders[p][to]" value="7449">
								<input type="hidden" id="p_max" name="sliders[p][max]" value="7449">
							</span>
						</div>
					</div>
																	</div>
							</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
    <br>
    <br>
                <br>
                <br>
  <div class="row clearfix">

                
                <br>
                <br>
                <br>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                              Liste des produits
                            </h2>
                            <br>
                            <div id="DataTables_Table_1_filter" class="dataTables_filter">
                                <label>Recherche:<input id="myInput"  type="text"name="rechercher" class="form-control input-sm" placeholder="" aria-controls="DataTables_Table_1"></label>
                            </div>
                        </div>
                        <br>
                <br>
               
                        <div class="body">
                            <div class="table-responsive">
                         
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                        <th>image Produit</th>
                                                <th>Nom </th>
                                                <th>Prix DT </th>
                                                <th>quantite totale</th>
                                                <th>description</th>
                                                <th>caregorie</th>
                                            
                                        </tr>
                                    </thead>
                                    
                                    <tbody id="myTable">
                                                 
                                        <?php      foreach ($listeProduit as $row) {?>
                            <tr class="tr-shadow">
                               
                               
                         
                                <td>  <img src="images/<?php echo $row['chemin_img']; ?>"</img></td>
                                                    <td>
                                                    <?php echo $row['nom']; ?></
                                                    </td>
                                                    <td class="desc"><?PHP echo $row['prix']."DT"; ?></td>
                                                    <td><?PHP echo $row['quantite_total']; ?></td>
                                                    <td>
                                                    <?PHP echo $row['description']; ?>
                                                    </td>
                                                    <td>
                                                    <?PHP echo $row['nomC']; ?>
                                                    </td>
                                                    <td>
                                                    <form
                                  method="POST" action="">
                        <input type="submit" name="acheter" value="acheter">
                                        </form>
                                        </td>
                                                    <tr class="spacer"></tr>
                                                   
                                                </tr>
                                            
                                     
                                                <?php
                          }
                          ?>
                                      
                                      
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            </div>
                       

</section>	
    <!-- =====>> End Blog <<===== 
    =========================== -->



    <!-- ===========================
    =====>> Footer <<===== -->
    <footer id="footer-area" class="pt-100 pb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 pt-50">
                    <div class="footer-item">
                        <a href="#" class="footer-logo-img"><img style="width: 300px;" src="assets/img/logo FitHUb.png" alt=""></a>
                        <p>Notre commité est de fournir un service honnête, amical et ponctuel. </p>

                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-4 pt-50">
                    <div class="footer-item">
                        <h6>Liens</h6>
                        <ul>
                            <li><a href="index-1.html"><i class="fas fa-angle-right"></i> Acceuil</a></li>
                          
                            <li><a href="#"><i class="fas fa-angle-right"></i> Nos Coachs</a></li>
                            <li><a href="#"><i class="fas fa-angle-right"></i> Boutique</a></li>
                            <li><a href="#"><i class="fas fa-angle-right"></i> Forum</a></li>
                            <li><a href="#"><i class="fas fa-angle-right"></i> Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 pt-50">
                    <div class="footer-item">
                        <h6>Nos Services</h6>
                        <ul>
                            <li><a href="#"><i class="fas fa-angle-right"></i> Yoga </a></li>
                            <li><a href="#"><i class="fas fa-angle-right"></i> Cardio</a></li>
                            <li><a href="#"><i class="fas fa-angle-right"></i> CrossFit</a></li>
                            <li><a href="#"><i class="fas fa-angle-right"></i> Musculation</a></li>
                          
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 pt-50">
                    <div class="footer-item">
                        <h6>Contactez nous </h6>
                        <ul class="media">
                            <li><i class="fas fa-map-marker-alt"></i></li>
                            <li><a target="_blank" href="">Tunis,TUNISIE</a></li>
                            
                        </ul>
                        <ul class="media">
                            <li><i class="fas fa-phone-volume"></i></li>
                            <li><a href="#">+216 71 234 567</a></li>
                        </ul>
                        <ul class="media">
                            <li><i class="fas fa-envelope"></i></li>
                            <li><a href="#">Fithub1@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    
                    <div class="copy-right">  © Tous droits résevés 2020.
</a> </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- =====>> End Footer <<===== 
    =========================== -->



    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/menu.js"></script>
    <script src="assets/js/scroll-slider.js"></script>
    <script src="assets/js/jquery.parallax-1.1.3.js"></script>
    <script src="assets/js/typing.js"></script>
    <script src="assets/js/contact.js"></script>
    <script src="assets/js/script.js"></script>


</body>



</html>