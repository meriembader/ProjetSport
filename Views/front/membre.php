
<?php  
    include("header.php"); 

include_once "../../controller/MembresController.php";
?>
 <!-- ===========================
    =====>> Page Hero <<===== -->
    <section id="page-hero" class="about-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title text-center">
                        <h1>INSCRIPTION</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =====>> End Page Hero <<===== 
    =========================== -->

    <br><br><br><br><br>
    <section>
    
        <form  class="my-account-form" method="POST" action="verifUtilisateur.php">
            <table align="left">
                <tr>
                    <td align="right"><label for="nom_user">Nom:</label></td>
                    <td><input type="text" name="nom"/></td>
                </tr>
                <tr>
                    <td align="right"><label for="prenom_user">Prénom: </label></td>
                    <td><input type="text"  name="prenom"/></td>
                </tr>
                <tr>
                    <td align="right"><label for="date_user">Date de Naissance: </label></td>
                    <td><input type="date"  name="date_naissance"/></td>
                </tr>
                <tr>
                    <td align="right"><label for="sexe">Sexe: </label></td>
                    <td><select id="sexe" name="sexe">
                        <option value="Selectionner">Selectionner</option>
                        <option value="M">Masculin</option>
                        <option value="F">Féminin</option>
                    </select></td>
                </tr>
                <tr>
                    <td align="right"><label for="taille">Taille: </label></td>
                    <td><input type="number"  name="taille"/></td>
                </tr>
                <tr>
                    <td align="right"><label for="poids">Poids: </label></td>
                    <td><input type="number"  name="poids"/></td>
                </tr>
                <tr>
                    <td align="right"><label for="tele">Téléphone:</label></td>
                    <td><input type="tel"  name="telephone"/></td>
                </tr>
                <tr>
                    <td align="right"><label for="adress">Adresse: </label></td>
                    <td><input type="adress"  name="adresse"/></td>
                </tr>
                <tr>
                    <td align="right"><label for="email">Adresse Mail: </label></td>
                    <td><input type="email"  name="mail"/></td>
                </tr>
                <tr>
                    <td align="right"><label for="mdp">Mot de Passe: </label></td>
                    <td><input type="password"  name="mdp"/></td>
                </tr>
                <tr>
                    <td align="right"><label for="mdp2">Confirmation Mot de Passe: </label></td>
                    <td><input type="password"  name="mdp2"/></td>
                </tr>
                <br><tr>
                    <td align="right"></td>
                    <td><input type="submit" name="forminscription"value="Je m'inscris"/></td>
                </tr>
            </table>
        </form>

</section>



<br><br><br><br><br>
<?php include("footer.php"); ?>