<?php include("header.php"); ?>
    <!-- =====>> End Top Menu <<===== 
    =========================== -->

    <!-- ===========================
    =====>> Page Hero <<===== -->
    <section id="page-hero" class="about-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title text-center">
                        <h1>Mon compte</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =====>> End Page Hero <<===== 
    =========================== -->


    <!-- ===========================
    =====>> My Account <<===== -->
    <section id="my-account-area" class="pt-150 pb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="my-account-content">
                        <h2>Connexion</h2>
                        <form class="my-account-form" action="verifConnexion.php" method="POST">
                            <label for="username">Identifiant ou adresse email *</label>
                            <input type="text" id="username" name="username">

                            <label for="password">Mot de passe *</label>
                            <input type="password" id="password" name="mdp">

                            <input type="submit" class="btn" value="Connexion">
                            <div class="wrapper">
                                <input id="a11y-issue-1" name="a11y-issues" type="checkbox" value="no-issues">
                                <label for="a11y-issue-1">Enregister mot de passe.</label>
                            </div>
                            <a href="#">Mot de passe oublié?</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =====>> End My Account <<===== 
    =========================== -->

<?php include("footer.php"); ?>