<?php
 include_once "../../../controller/categorieC.php";
 include_once "../../../Model/categorie.php";

 

 $categorieC=new categorieC();
 $listeCategorie=$categorieC->affichercategorie();
 // define database related variables
 $database = 'projetSport';
 $host = 'localhost';
 $user = 'root';
 $pass = '';

 // try to connect to database
 $db = new PDO("mysql:dbname={$database};host={$host};port={3306}", $user, $pass);

 if(!$db){

    echo "Error in database connection";
 }
$start = 0;  $per_page = 4;
$page_counter = 0;
$next = $page_counter + 1;
$previous = $page_counter - 1;

if(isset($_GET['start'])){
 $start = $_GET['start'];
 $page_counter =  $_GET['start'];
 $start = $start *  $per_page;
 $next = $page_counter + 1;
 $previous = $page_counter - 1;
}

$q = "SELECT * FROM categorie LIMIT $start, $per_page";
$query = $db->prepare($q);
$query->execute();

if($query->rowCount() > 0){
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
}
// count total number of rows in categorie table
$count_query = "SELECT * FROM categorie";
$query = $db->prepare($count_query);
$query->execute();
$count = $query->rowCount();
// calculate the pagination number by dividing total number of rows with per page.
$paginations = ceil($count / $per_page);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Les medecins </title>
    <!-- Favicon-->
    <link rel="icon" href="../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="../plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="../css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-pink">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="../index.html"><B>SEIN SAIN centre,</B> Parlez-en aux femmes que vous aimez!</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <
                    <!-- Notifications -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">notifications</i>
                            <span class="label-count">5</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">NOTIFICATIONS</li>
                            <li class="body">
                                <ul class="menu">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">person_add</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>12 nouveaux visiteurs</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 14 mins ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                   
                                   
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-blue-grey">
                                                <i class="material-icons">comment</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b> Maria </b> a laissé un message </h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> il y'a deux minutes
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-blue-grey">
                                                <i class="material-icons">comment</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>Med Taib </b> a laissé un message </h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> il y'a 4 minutes
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-blue-grey">
                                                <i class="material-icons">comment</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>Asma</b> a laissé un message</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> il y'a 3 heures
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                     <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-red">
                                                <i class="material-icons">delete_forever</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>Sinda</b> a supprimé son commentaire</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> il y'a 4 heures
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">View All Notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Notifications -->
                    
                    
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="../images/user3.jpg" width="52" height="52" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><B><font size ="3pt"> Lamis Hm </font></B></div>
                    <div class="email">lamishammemi65@gmail.com</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profil</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Abonnés</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">input</i>Se déconnecter</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
            <ul class="list">
                    <li class="header">NAVIGATION PRINCIPALE</li>
                   
                    <li class="active">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">view_list</i>
                            <span>Les équipes médicales</span>
                        </a>
                        <ul class="active">
                            <li>
                                <a href="../produit/listProduit.php">list des produit</a>
                            </li>
                            <li>
                                <a href="../produit/ajoutProduit.php">Ajouter produit </a>
                            </li>
                            <li>
                                <a href="../produit/statistiqueProduit.php"> Statistique </a>
                            </li>
                              
                            
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">perm_media</i>
                            <span>Gestion Categorie </span>
                        </a>
                        <ul class="active">
                            
                            <li>
                                <a href="../categorie/ajoutCategorie.php">Créer un categorie</a>
                            </li>
                            <li>
                                <a href="../categorie/listCategorie.php">list des categorie</a>
                            </li>
                        </ul>
                    </li>
                    
                  
                    
                   
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2020 - 2021 <a href="javascript:void(0);">AdminLH-SEIN SAIN centre</a>.
                </div>
                
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
       
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    JQUERY DATATABLES
                    <small>Taken from <a href="https://datatables.net/" target="_blank">datatables.net</a></small>
                </h2>
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
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                              Liste des medecins
                            </h2>
                           
                        </div>
                        <div class="body"> 
                        <div class="button">
                         <a class="btn btn-primary" href="generatePDF.php"><span>PDF</span></a>
    </div>
                            <div id="DataTables_Table_1_filter" class="dataTables_filter">
                                <label>Recherche:<input id="myInput"  type="text"name="rechercher" class="form-control input-sm" placeholder="" aria-controls="DataTables_Table_1"></label></div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    SS
                                        <tr>
                                            <th>Image</th>
                                            <th>nom</th>
                                            <th>action</th>
                                          
                                            
                                        </tr>
                                    
                                    
                                    <tbody id="myTable">
                                                 
                                        <?php      foreach ($listeCategorie as $row) {?>
                            <tr class="tr-shadow">
                               
                               
                                <td>
                                <img  src="../../image/<?php echo $row['chemin_img']; ?>"</img>
                                </td>
                                <td>
                                <?php echo $row['nom']; ?>
                                </td>
                               
                                
                                <td>
                                <form
                                  method="POST" action="supprimerCategorie.php">
                        <input type="submit" name="supprimer" value="supprimer">
                        <input type="hidden" value=<?PHP echo $row['idCat']; ?> name="idCat">
                        
                        <a href="modifierCategorie.php?idCat=<?PHP echo $row['idCat']; ?>" type="button"> Modifier </a>
                    </td>
                               </form>
                                                    </td>

                                                    <tr class="spacer"></tr>
                                                   
                                                </tr>
                                            
                                     
                                                <?php
                          }
                          ?>
    </tbody>
                                </table>
                                <center>
            <ul class="pagination">
            <?php
                if($page_counter == 0){
                    echo "<li><a href=?start='0' class='active'>0</a></li>";
                    for($j=1; $j < $paginations; $j++) { 
                      echo "<li><a href=?start=$j>".$j."</a></li>";
                   }
                }else{
                    echo "<li><a href=?start=$previous>Previous</a></li>"; 
                    for($j=0; $j < $paginations; $j++) {
                     if($j == $page_counter) {
                        echo "<li><a href=?start=$j class='active'>".$j."</a></li>";
                     }else{
                        echo "<li><a href=?start=$j>".$j."</a></li>";
                     } 
                  }if($j != $page_counter+1)
                    echo "<li><a href=?start=$next>Next</a></li>"; 
                } 
            ?>
            </ul>
            </center> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                        </div>

    </section>

    <!-- Jquery Core Js -->
    <script src="../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../plugins/node-waves/waves.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="../plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="../plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="../js/admin.js"></script>
    <script src="../js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="../js/demo.js"></script>
</body>

</html>