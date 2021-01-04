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
        <style>
#articles {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#articles td {
  border: 1px solid #ddd;
  padding: 8px;

}
#articles th{

text-align: center;

}
#articles tr:nth-child(even){background-color: #f2f2f2;}

 #articles th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  

}

#img_article{
  height: 150px;
  width: 150px;
}
</style>  

    <!-- =====>> End Page Hero <<===== 
    =========================== -->
<section>

  <!--Grid row-->
  <div class="row">

    <!--Grid column-->
    <div class="col-lg-8">

      <!-- Card -->
      <div class="mb-3">
        <div class="pt-4 wish-list">

      <h4 class="mb-3 text-muted text-uppercase medium">Article</h4>
     <table id="articles">
                <!--<thead>
                  <th>
                  </th>
              
                  <th><h3 class="mb-3 text-muted text-uppercase small">QUANTITE</h3></th>
                   <th><h3 class="mb-3 text-muted text-uppercase small">PRIX</h3></th>

                  <th><h3 class="mb-3 text-muted text-uppercase small">SOUS-TOTAL</h3></th>

                </thead>-->
                 <tbody>
          <?php foreach($liste as $produit){ 
              $result = $produitC->getProduitById($produit['reference_produit']);
                    // $result = $produitC->getProduitById(1);
                     //ou peut etre par reference?
            ?>
         
             
    <tr>
      <td>  

      <img src="images/<?php echo $result['chemin_img'];?>" id='img_article'></td>
         <td>     
      <h3><?php echo $result["nom"] ?></h3><br> 
      <p class="mb-3 text-muted text-uppercase small">Reference :<?php echo $result["reference"] ?>
      </p>

<a href="suppPanier.php?id=<?php echo $produit['id_panier']; ?>" type="button" class="card-link-secondary small text-uppercase mr-3"><i class="fas fa-trash-alt mr-1"></i> Supprimer </a>

      </td>



<td>
  <p class="mb-0"><span><strong id="summary">
                 QUANTITE:
                </strong></span></p class="mb-0">
  <select name="quantite" onchange="updateQuantite(this,$produit['id_panier'])">
    <!--  <select name="quantite" onchange="updateQuantite(this)"> -->
        <option selected value="<?php echo $produit["quantite"] ?>">
          <?php echo $produit["quantite"] ?></option>
        <?php
        for ($i = 1; $i <= 10; $i++) {
          if(!($i == $produit["quantite"])){
     ?>  
            <option value="<?php echo $i ?>"><?php echo $i ?></option>

      <?php
    
      }}
      ?>
</select><br> <br> <br> 

<p class="mb-0"><span><strong id="summary">
                PRIX: 
                
 <?php echo $produit["prix_produit"] ?>/dt</strong></span></p class="mb-0"> 
</td>
         

                  
          </tr>

          <?php } ?>

                </tbody>
</table>

        </div>
      </div>
     

      
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-4">

      <!-- Card -->
      <div class="mb-3">
        <div class="pt-4">

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

<li>
 <strong>
  <p class="mb-0">Frais de livraison non inclus pour ce montant</p>
  </strong>


</li>
      </div>

          </ul>
<br>
  <a href="paiement.php" class="btn btn-7 btn-lg btn-block" >COMMANDER</a>
  <a href="liste_produits.php" class="btn btn-3 btn-lg btn-block">Poursuivre vos achats</a>
        </div>
      </div>
      <!-- Card 
      <div class="mb-3">
        <div class="pt-4">

          <a class="dark-grey-text d-flex justify-content-between" data-toggle="collapse" href="#collapseExample"
            aria-expanded="false" aria-controls="collapseExample">
            Ajouter un Code promo (optional)
            <span><i class="fas fa-chevron-down pt-1"></i></span>
          </a>

          <div class="collapse" id="collapseExample">
            <div class="mt-3">
              <div class="md-form md-outline mb-0">
                <input type="text" id="discount-code" class="form-control font-weight-light"
                  placeholder="Enter discount code">
              </div>
            </div>
          </div>
        </div>
      </div>

-->

      <!-- Card -->

   
    <!--Grid column-->
 
 
  <!--Grid row -->

</section>
<!--Section: Block Content-->
 
<?php  
include("footer.php"); ?>

<script>
function updateQuantite(selected) {
  var value = selected.value;  
  var mo='<?PHP //echo $produit["id_panier"];?>';
 // var mo = panier.value;  

  console.log(value);
    console.log(mo);

  window.location="updateQuantity.php?quantite="+ value + "&id_panier="+ mo  ;

}
</script>
/*
function updateQuantite(selected,panier) {
  var value = selected.value;  
  var mo=panier.value;
 // var mo = panier.value;  

  console.log(value);
    console.log(panier);

  window.location="updateQuantity.php?quantite="+ value + "&id_panier="+ panier  ;

}*/
