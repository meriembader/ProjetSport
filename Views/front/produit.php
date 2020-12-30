<?php  
  include_once "../../Controller/produitC.php";
  include_once "../../Model/produit.php";
  include_once "layout.php";

  $produitC=new produitC();
  $listeProduit=$produitC->aaficherPrice();


$min = 100;
$max = 300;

if (! empty($_POST['min_price'])) {
    $min = $_POST['min_price'];
}

if (! empty($_POST['max_price'])) {
    $max = $_POST['max_price'];
}

?>
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet"
    href="https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


<script type="text/javascript">
  
  $(function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 1000,
      values: [ <?php echo $min; ?>, <?php echo $max; ?> ],
      slide: function( event, ui ) {
        $( "#amount" ).html( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
		$( "#min" ).val(ui.values[ 0 ]);
		$( "#max" ).val(ui.values[ 1 ]);
      }
      });
    $( "#amount" ).html( "$" + $( "#slider-range" ).slider( "values", 0 ) +
     " - $" + $( "#slider-range" ).slider( "values", 1 ) );
  });
  </script>

<style>
body{
    
}
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
    margin-left: 390px;
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
.form-control {
    /* FONT-VARIANT: JIS78; */
    margin-left: 1350px;
    display: block;
    width: 20%;
    height: calc(2.25rem + 2px);
    padding: .375rem .75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
</style>
</head>

<body>
  
  

<hr>
    <div class="container">

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
    </div>

    <br>
                            <div id="DataTables_Table_1_filter" class="dataTables_filter">
                                <label class="ff">:<input id="myInput"  placeholder= "Recherche" type="text"name="rechercher" class="form-control input-sm" placeholder="" aria-controls="DataTables_Table_1"></label>
                            </div>
                        </div>
                        <br>
                <br>
               
    <div class="container">
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
        
        <div class="table-responsive">
                         
                         <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                             <thead>
                                 <tr>
                                 <th>image Produit</th>
                                         <th>Nom </th>
                                         <th>Prix DT </th>
                                         <th>quantite totale</th>
                                         <th>description</th>
                                      
                                     
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
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
    </div>
</body>
</html>
