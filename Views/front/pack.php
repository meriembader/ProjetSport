
<?php 

    
     include '../../Controller/PackController.php';
    include_once ("../../controller/PromoController.php");
    include_once "layout.php";
        $packC =  new PackC();
        $liste = $packC->ListePackC();
        $promoC = new PromoC();

    ?>




 <section id="pricing-area" class="pt-150">
        <div class="container ">
            <div class="row ">
                <div class="col-lg-8 offset-lg-2 ">
                    <div class="section-title text-center ">
                        <h2>TARIFS DES <span> ABONNEMENTS </span></h2>
                    </div>
                </div>
            </div>
            <div class="pricing-content pt-40">
                <div class="row">

                    <!-- Pricing Item -->
                    
        <!-- UNE BOUCLE APPELANT TOUS LES PACKS DE LA TABLE PACK  foreach --> 
           
             <?php foreach($liste as $pack){?>
                <?php 
                     $packExist = $promoC->getPromoByPack($pack["id_pack"]);
?>
                    <div class="col-lg-6 mt-40" >
                        <div class="pricing-item media pricing-item-bgc">
                            <div class="pricing-item-left pricing-right">
                                <ul>
                                    <li>
                                        <h3 class="pricing-item-left-h3"> <?php echo $pack['nom_pack']; ?> </h3>
                                    </li>
                                
                                    <li>
                                        <?php if($packExist){?>
        <strike><h2 class="pricing-item-left-h2">
             <?php echo $pack['prix_pack'];?>Dt/mois

         </h2>
         </strike>
          <p class="pricing-item-left-p">taxes inclus</p>
          <br>
                <?php
                    $price = $pack["prix_pack"] - ($pack["prix_pack"] * $packExist["description_promo"] / 100 ) ;
                
                   ?>
                                <h2 style="color:white;" >
                                    <?php echo $price; ?> Dt
                                    <br>
                                    

<div style="position:absolute;left:400px;top:80px">
   <div style="position:absolute;z-index:1;">
      <img src="assets/iconpromo.png">
   </div>
   <div style="position:absolute;top:80px;left:48px; z-index:2;font-size:150%">
      <center><b>-<?php echo $packExist["description_promo"]; ?>%</b></center>
    </div> 
</div>




                                </p>
                                </h2>
                                    <?php }
                                    else{ ?>
                                        <h2 class="pricing-item-left-h2">
                                         <?php echo $pack['prix_pack']; ?>Dt
                                         <p class="pricing-item-left-p">taxes inclus</p>
                                     </h2>
                                    <?php } ?>


                        
                                 
                            </li>
                                </ul>
                            </div>
                            <div class="pricing-item-right pricing-right">
                                <ul>
                                    <p class="pricing-item-left-p">
                                        <?php echo $pack['description_pack']; ?></p>
                                </ul><br> <br> <br>

                                <a href="paiement.php" class="btn btn-4">Je m'inscris</a>
                               
                            </div>
                        </div>
                    </div>

 <?php  }?>


                </div>


            </div>
        </div>
    </section>