<?php  
  include_once "../../Controller/categorieC.php";
  include_once "../../Model/categorie.php";

  
  $categorieC=new categorieC();
  $listCategorie=$categorieC->affichercategorie();
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from raistheme.com/html/fitner/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Nov 2020 11:57:37 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FITHUB</title>

    <!-- favicon icon -->
    <link rel=icon href=iconFit.png type="png">
    <link rel="stylesheet" href="assets/font/flaticon.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link href="style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
<style>
    * {
    box-sizing: border-box;
    font-family: -apple-system, BlinkMacSystemFont, "segoe ui", roboto, oxygen, ubuntu, cantarell, "fira sans", "droid sans", "helvetica neue", Arial, sans-serif;
    font-size: 16px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
body {
    background-color: #FFFFFF;
    margin: 0;
}
.navtop {
    background-color: #3f69a8;
    height: 60px;
    width: 100%;
    border: 0;
}
.navtop div {
    display: flex;
    margin: 0 auto;
    width: 1000px;
    height: 100%;
}
.navtop div h1, .navtop div a {
    display: inline-flex;
    align-items: center;
}
.navtop div h1 {
    flex: 1;
    font-size: 24px;
    padding: 0;
    margin: 0;
    color: #ecf0f6;
    font-weight: normal;
}
.navtop div a {
    padding: 0 20px;
    text-decoration: none;
    color: #c5d2e5;
    font-weight: bold;
}
.navtop div a i {
    padding: 2px 8px 0 0;
}
.navtop div a:hover {
    color: #ecf0f6;
}
.content {
    width: 1000px;
    margin: 0 auto;
}
.content h2 {
    margin: 0;
    padding: 25px 0;
    font-size: 22px;
    border-bottom: 1px solid #ebebeb;
    color: #666666;
}
.image-popup {
    display: none;
    flex-flow: column;
    justify-content: center;
    align-items: center;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.8);
    z-index: 99999;
}
.image-popup .con {
    display: flex;
    flex-flow: column;
    background-color: #ffffff;
    padding: 25px;
    border-radius: 5px;
}
.image-popup .con h3 {
    margin: 0;
    font-size: 18px;
}
.image-popup .con .edit, .image-popup .con .trash {
    display: inline-flex;
    justify-content: center;
    align-self: flex-end;
    width: 40px;
    text-decoration: none;
    color: #FFFFFF;
    padding: 10px 12px;
    border-radius: 5px;
    margin-top: 10px;
}
.image-popup .con .trash {
    background-color: #b73737;
}
.image-popup .con .trash:hover {
    background-color: #a33131;
}
.image-popup .con .edit {
    background-color: #37afb7;
}
.image-popup .con .edit:hover {
    background-color: #319ca3;
}
.home .upload-image {
    display: inline-block;
    text-decoration: none;
    background-color: #38b673;
    font-weight: bold;
    font-size: 14px;
    border-radius: 5px;
    color: #FFFFFF;
    padding: 10px 15px;
    margin: 15px 0;
}
.home .upload-image:hover {
    background-color: #32a367;
}
.home .images {
    display: flex;
    flex-flow: wrap;
}
.home .images a {
    display: block;
    text-decoration: none;
    position: relative;
    overflow: hidden;
    width: 300px;
    height: 200px;
    margin: 0 20px 20px 0;
}
.home .images a:hover span {
    opacity: 1;
    transition: opacity 1s;
}
.home .images span {
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    position: absolute;
    opacity: 0;
    top: 0;
    left: 0;
    color: #fff;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.2);
    padding: 15px;
    transition: opacity 1s;
}
.upload form {
    padding: 15px 0;
    display: flex;
    flex-flow: column;
    width: 400px;
}
.upload form label {
    display: inline-flex;
    width: 100%;
    padding: 10px 0;
    margin-right: 25px;
}
.upload form input, .upload form textarea {
    padding: 10px;
    width: 100%;
    margin-right: 25px;
    margin-bottom: 15px;
    border: 1px solid #cccccc;
}
.upload form textarea {
    height: 200px;
}
.upload form input[type="submit"] {
    display: block;
    background-color: #38b673;
    border: 0;
    font-weight: bold;
    font-size: 14px;
    color: #FFFFFF;
    cursor: pointer;
    width: 200px;
    margin-top: 15px;
    border-radius: 5px;
}
.upload form input[type="submit"]:hover {
    background-color: #32a367;
}
.delete .yesno {
    display: flex;
}
.delete .yesno a {
    display: inline-block;
    text-decoration: none;
    background-color: #38b673;
    font-weight: bold;
    color: #FFFFFF;
    padding: 10px 15px;
    margin: 15px 10px 15px 0;
    border-radius: 5px;
}
.delete .yesno a:hover {
    background-color: #32a367;
}
.images{
    justify-content: space-around;
    justify-content: space-between;
    align-items: stretch;
    /*height : 10px;*/
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
                        <h1>fitner <span>shop</span></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =====>> End Page Hero <<===== 
    =========================== -->


    <!-- ===========================
    =====>> Shop <<===== -->
    <section id="shop-area" class="shop-gallery pt-100 pb-150">
        <div class="container">
        <script>
// Container we'll use to show an image
let image_popup = document.querySelector('.image-popup');
// Loop each image so we can add the on click event
document.querySelectorAll('.images a').forEach(img_link => {
	img_link.onclick = e => {
		e.preventDefault();
		let img_meta = img_link.querySelector('img');
		let img = new Image();
		img.onload = () => {
			// Create the pop out image
			image_popup.innerHTML = `
				<div class="con">
					<h3>${img_meta.dataset.title}</h3>
					<p>${img_meta.alt}</p>
					<img src="${img.src}" width="${img.width}" height="${img.height}">
					<a href="delete.php?id=${img_meta.dataset.id}" class="trash" title="Delete Image"><i class="fas fa-trash fa-xs"></i></a>
				</div>
			`;
			image_popup.style.display = 'flex';
		};
		img.src = img_meta.src;
	};
});
// Hide the image popup container if user clicks outside the image
image_popup.onclick = e => {
	if (e.target.className == 'image-popup') {
		image_popup.style.display = "none";
	}
};
</script>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="content home">
    <h2>Categorie</h2>
    <br>
    <br>
	<p>Welcome to the Categorie page, you can view the list of images below.</p>
    <br>
    <br>

	
    
	<div class="images">
		<?php foreach ($listCategorie as $image): ?>
	
      
		<a href="produit.php">
			<img src="../image/<?=$image['chemin_img']?>"  width="300" height="200">
            <span><?=$image['nom']?></span>

            </a>
         
		<?php endforeach; ?>
	</div>
</div>
<div class="image-popup"></div>
                </div>
        </div>
    </section>
    <!-- =====>> End Shop <<===== 
    =========================== -->

    <!-- ===========================
    =====>> Cta <<===== -->
    <section id="cta-area" class="cta-bg1 pt-80 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="cta-left">
                        <h2>Offre du Decembre </h2>
                        <p>2 mois de reduction <span>$39.95/</span> pour les couples</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="cta-btn ">
                        <a href="contact.html" class="btn btn-1">Contactez nous</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =====>> End Cta <<===== 
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


<!-- Mirrored from raistheme.com/html/fitner/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Nov 2020 11:57:37 GMT -->
</html>