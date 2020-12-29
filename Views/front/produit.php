<?php  
  include_once "../../Controller/produitC.php";
  include_once "../../Model/produit.php";

  $produitC=new produitC();
  $listeProduit=$produitC->aaficherPrice();


$min = 100;
$max = 900;

if (! empty($_POST['min_price'])) {
    $min = $_POST['min_price'];
}

if (! empty($_POST['max_price'])) {
    $max = $_POST['max_price'];
}

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


    <link rel="stylesheet"
    href="https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script type="text/javascript">
  
  $(function() {
    $( "#slider-range" ).slider({
      range: true,
      animate: true,
      min: 100,
      max: 400,
      values: [ <?php echo $min; ?>, <?php echo $max; ?> ],
      slide: function( event, ui ) {
        $( "#amount" ).html( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
		$( "#min" ).val(ui.values[ 0 ]);
		$( "#max" ).val(ui.values[ 1 ]);
        $("#amount").show();
      }
      });
    $( "#amount" ).html( "$" + $( "#slider-range" ).slider( "values", 0 ) +
     " - $" + $( "#slider-range" ).slider( "values", 1 ) );
  });
  </script>

<style>


.form-price-range-filter {
	text-align: center;
}

.tutorial-table {
    width: 100%;
    font-size: 13px;
    border-top: #e5e5e5 1px solid;
    border-spacing: initial;
    margin: 20px 0px;
    word-break: break-word;
}

.tutorial-table th {
    background-color: #f5f5f5;
	padding: 10px 20px;
	text-align: left;
}

.tutorial-table td {
    border-bottom: #f0f0f0 1px solid;
    background-color: #ffffff;
	padding: 10px 20px;
}

.text-right {
	text-align: right;
}

th.text-right {
	text-align: right;
}

.btn-submit {
	margin-top: 20px;
	padding: 10px 20px;
	background: #FFF;
	border: #aaa 1px solid;
	border-radius: 4px;
	margin: 20px 0px;
}

#min {
	float: left;
	width: 60px;
	padding: 5px 10px;
	margin-right: 14px;
}

#slider-range {
	width: 75%;
	float: left;
	margin: 5px 0px 5px 0px;
}


#max {
	float: right;
	width: 60px;
	padding: 5px 10px;
}

.no-result {
	padding: 20px;
	background: #ffdddd;
	text-align: center;
	border-top: #d2aeb0 1px solid;
	color: #6f6e6e;
}

.product-thumb {
	width: 50px;
	height: 50px;
	margin-right: 15px;
	border-radius: 50%;
	vertical-align: middle;
}
</style>
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
      <br>
      <br>
  <div class="form-price-range-filter">
        <form method="post" action="">
            <div>
                <input type="" id="min" name="min_price"
                    value="<?php echo $min; ?>">
                <div id="slider-range"></div>
                <input type="" id="max" name="max_price"
                    value="<?php echo $max; ?>">
            </div>
            <div>
                <input type="submit" name="submit_range"
                    value="Filter Product" class="btn-submit">
            </div>
        </form>
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
                                                    <?PHP echo $row['idCat']; ?>
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