<?php  
include("header.php");
     include '../../controller/PanierController.php';
     include '../../controller/ProduitController.php';
     include '../../controller/PromoController.php';
        $panierC = new panierC();
        $produitC = new produitC(); 
        $liste = $panierC->ListePanierC();
       // print_r($liste);

        ?>
 <!-- ===========================
    =====>> Page Hero <<===== -->
    <section id="page-hero" class="about-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title text-center">
                        <h1>Mon Panier</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
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


     <table id="articles">
                <thead>
                  <th><h3 class="mb-3 text-muted text-uppercase small">Article</h3>
                  </th>
                 
                 
                  <th><h3 class="mb-3 text-muted text-uppercase small">QUANTITE</h3></th>
                   <th><h3 class="mb-3 text-muted text-uppercase small">PRIX</h3></th>

                  <th><h3 class="mb-3 text-muted text-uppercase small">SOUS-TOTAL</h3></th>

                </thead>
                 <tbody>
          <?php foreach($liste as $produit){ 
              $result = $produitC->getProduitById($produit['reference_produit']);
                    // $result = $produitC->getProduitById(1);
                     //ou peut etre par reference?
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
 
  color:#0000;

}

#img_article{
  height: 150px;
  width: 150px;
}
</style>  
             
    <tr>
      <td>  

      <img src="images/<?php echo $result['chemin_img'];?>" id='img_article'>
              
      <h3><?php echo $result["nom"] ?></h3><br> 
      <p class="mb-3 text-muted text-uppercase small">Reference :<?php echo $result["reference"] ?>
      </p>

<a href="suppPanier.php?id=<?php echo $produit['id_panier']; ?>" type="button" class="card-link-secondary small text-uppercase mr-3"><i class="fas fa-trash-alt mr-1"></i> Supprimer </a>



      
      </td>



<td>
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
</select>
</td>
<td> <?php echo $produit["prix_produit"] ?>/dt
</td>
         

                  
          </tr>

          <?php } ?>

                </tbody>
</table>

        </div>
      </div>
     

      
      <!-- Card -->
      <div class="mb-3">
        <div class="pt-4">

          <h5 class="mb-4">Paiement par :</h5>

          <img class="mr-2" width="45px"
            src="https://mdbootstrap.com/wp-content/plugins/woocommerce/includes/gateways/paypal/assets/images/paypal.png"
            alt="PayPal acceptance mark">
        </div>
      </div>
      <!-- Card -->

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-4">

      <!-- Card -->
      <div class="mb-3">
        <div class="pt-4">

          <h5 class="mb-3">TOTAL : </h5>

          <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
              Montant
              <?php
              $i = 0;
           foreach($liste as $produit){ 
            $i = $i + $produit["prix_produit"] * $produit["quantite"];

} ?>              <span><?php echo $i ?> / dt</span> 

      

            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
              Livraison
              <span>Gratuite</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
              <div>
                <strong>Paiement par: 
                 <p class="mb-0">(TVA inclus)</p>
              </strong>

          <img class="mr-2" width="45px"
            src="https://mdbootstrap.com/wp-content/plugins/woocommerce/includes/gateways/paypal/assets/images/paypal.png"
            alt="PayPal acceptance mark">
              </div>
              <span><strong></strong></span>
            </li>
          </ul>

          <button type="button" class="btn btn-primary btn-block">Payer</button>

        </div>
      </div>
      <!-- Card -->
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
      <!-- Card -->

    </div>
    <!--Grid column-->
 
  </div>
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
