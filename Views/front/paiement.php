
 <?php 
 include '../../controller/PackController.php'; 
 include_once "layout.php";
 $packC =  new PackC();
        $liste = $packC->ListePackC();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FITHUB</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


    </head>

<body>

<div class="container">
  <div class="py-5 text-center">
    
    <h2>Paiement</h2>
      </div>

  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">TOTAL:</span>
        <span class="badge badge-secondary badge-pill">3</span>
      </h4>
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
         
          <div>
            <h6 class="my-0">Nom produit</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <span class="text-muted">$12</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Second product</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <span class="text-muted">$8</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Third item</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <span class="text-muted">$5</span>
        </li>
        <li class="list-group-item d-flex justify-content-between bg-light">
          <div class="text-success">
            <h6 class="my-0">CODE PROMO</h6>
            <small>EXAMPLECODE</small>
          </div>
          <span class="text-success"></span>
        </li>
        <li class="list-group-item d-flex justify-content-between">
          <span>Total (DINARD)</span>
          <strong>DT</strong>
        </li>
      </ul>

      <form class="card p-2">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Code promo">
          <div class="input-group-append">
            <button type="submit" class="btn btn-secondary">ajouter</button>
          </div>
        </div>
      </form>
    </div>
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Facturation</h4>
      <form class="needs-validation" novalidate>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Prenom</label>
            <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Nom de famille</label>
            <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>

        

        <div class="mb-3">
          <label for="email">Email </label>
          <input type="email" class="form-control" id="email" placeholder="you@example.com">
          
        </div>

        <div class="mb-3">
          <label for="address">Addresse</label>
          <input type="text" class="form-control" id="address" placeholder=" " required>
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>

        <div class="mb-3">
          <label for="address2">Addresse 2 <span class="text-muted">(Optional)</span></label>
          <input type="text" class="form-control" id="address2" placeholder="appartement ou maison">
        </div>

        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">Pays</label>
            <select class="custom-select d-block w-100" id="country" required>
              <option value="">Choix...</option>
              <option>Tunisie</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="state">Region</label>
            <select class="custom-select d-block w-100" id="state" required>
              <option value="">Choix...</option>
              <option>Ben Arous</option>
              <option>Mourouj</option>
              <option>Arina</option>
              <option>Manouba</option>
              <option></option>
            </select>
            <div class="invalid-feedback">
              Please provide a valid state.
            </div>
          </div>
         
        </div>
        <hr class="mb-4">
      
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info">
          <label class="custom-control-label" for="save-info">
          Enregister les informations pour la prochaine fois </label>
        </div>
        <hr class="mb-4">

        <h4 class="mb-3">Paiement</h4>

        <div class="d-block my-3">
          
          <div class="custom-control custom-radio">
            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="paypal">PayPal</label>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="cc-name">Votre nom sous la carte</label>
            <input type="text" class="form-control" id="cc-name" placeholder="" required>
            <small class="text-muted">Nom complet indiqué sur la carte</small>
            <div class="invalid-feedback">
              Name on card is required
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="cc-number">Numéro Carte credit</label>
            <input type="text" class="form-control" id="cc-number" placeholder="" required>
            <div class="invalid-feedback">
              Credit card number is required
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-3">
            <label for="cc-expiration">Expiration</label>
            <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
            <div class="invalid-feedback">
              Expiration date required
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="cc-cvv">CVV</label>
            <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
            <div class="invalid-feedback">
              Security code required
            </div>
          </div>
        </div>
        <hr class="mb-4">
        <button id="payer-btn" class="btn btn-primary btn-lg btn-block" type="submit">Payer</button>
      </form>
    </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2020-2021 FitHub</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>

<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/mvc.js" type="text/javascript"></script>

</body>
</html>