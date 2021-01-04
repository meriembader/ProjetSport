<?php  
include_once "layout.php";
     include '../../controller/PanierController.php';
     include '../../controller/ProduitController.php';
     include '../../controller/PromoController.php';
        $panierC = new panierC();
        $produitC = new produitC(); 
        $liste = $panierC->ListePanierC();
       // print_r($liste);

        ?>
 <!-- ===========================
   

<section>

  <!--Grid row-->


    <!--Grid column-->
    <div class="col-lg-8">
      <!-- Card -->
      <div class="mb-3">
        <div class="pt-4 wish-list">

          <h3 class="mb-3 text-muted text-uppercase mb">Panier</h3>( Articles)

    
          <?php foreach($liste as $produit){ 
              $result = $produitC->getProduitById($produit['reference_produit']);
             
                    // $result = $produitC->getProduitById(1);
                     //ou peut etre par reference?
            ?>
           
              
          <div class="row mb-4">
            
            <div class="col-md-5 col-lg-3 col-xl-3">
              <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
    
      <img class="img-fluid w-100" src="images/<?php echo $result['chemin_img']; ?>" >
              </div>
            </div>

            <div class="col-md-7 col-lg-9 col-xl-9">
              <div>
                <div class="d-flex justify-content-between">
                 
                  <div>
                    <h3><?php echo $result["nom"] ?></h3><br> 
                    <p class="mb-3 text-muted text-uppercase small">Reference :<?php echo $result["reference"] ?></p>
                  </div>
                  <div>

                
<p class="mb-0"><span><strong id="summary">
                 QUANTITE:
                </strong></span></p class="mb-0">
      <select name="quantite" onchange="updateQuantite(this)">

        <option selected value="<?php echo $produit["quantite"] ?>"><?php echo $produit["quantite"] ?></option>
        <?php
        for ($i = 1; $i <= 10; $i++) {
          if(!($i == $produit["quantite"])){
     ?>  
            <option value="<?php echo $i ?>"><?php echo $i ?></option>

      <?php
    
      }}
      ?>
</select>

            <p class="mb-0">
                    <span><br><br>
                      <strong id="summary">
                    PRIX: <?php echo $produit["prix_produit"] ?> /dt
                  </strong>
                  </span>
                  </p class="mb-0">
                    
                  </div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                  

                    <a href="suppPanier.php?id=<?php echo $produit['id_panier']; ?>" type="button" class="card-link-secondary small text-uppercase mr-3"><i class="fas fa-trash-alt mr-1"></i> Supprimer </a>
                    
              
                  
                </div>
              </div>
              </div>
            </div>
          </div>

          <hr class="mb-4">
          <?php } ?>

    
        </div>
      </div>

  

    <!--Grid column-->
    <div class="col-lg-4" >

      <!-- Card -->
      <div class="mb-3"  >
        <div class="pt-4" >

          <h5 class="mb-3" >TOTAL : </h5>

          <ul class="list-group list-group-flush" >
            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
              Montant:
              <?php
              $i = 0;
           foreach($liste as $produit){ 
            $i = $i + $produit["prix_produit"] * $produit["quantite"];

      } ?>              <span><?php echo $i ?> / dt</span> 

      
 
            </li>

          

            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
              <div><hr class="mb-4">
                <strong>Paiement par :</strong>
                <img class="mr-2" width="45px"
            src="https://mdbootstrap.com/wp-content/plugins/woocommerce/includes/gateways/paypal/assets/images/paypal.png"
            alt="PayPal acceptance mark">
                <strong>
                  <p class="mb-0">(TVA inclus)</p>
                </strong>
                
              </div>
             
            </li>

          </ul>

          <button type="button" class="btn btn-dark btn-lg btn-block" >Finaliser l'achat</button>

        </div>
      </div>
      

    </div>
    <!--Grid column-->

  
  <!--Grid row -->

</section>
<!--Section: Block Content-->
 
<?php  
include("footer.php"); ?>

<script>
function updateQuantite(selected) {
  var value = selected.value;  
  var mo='<?PHP echo $produit["id_panier"];?>';
 // var mo = panier.value;  

  console.log(value);
    console.log(mo);

  window.location="updateQuantity.php?quantite="+ value + "&id_panier="+ mo  ;

}
</script>