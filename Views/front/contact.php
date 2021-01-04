<?php 
 include_once "layout.php";
?>
    <!-- =====>> End Top Menu <<===== 
    =========================== -->

    <!-- ===========================
    =====>> Page Hero <<===== -->
    
    <!-- =====>> End Page Hero <<===== 
    =========================== -->


    <!-- ===========================
    =====>> Contact <<===== -->
    <section id="contact-area" class="pt-150 pb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contaict-title">
                        <h2>Contactez Nous</h2>
                    </div>
                </div>
                <div class="col-lg-8">
                    <form action="https://raistheme.com/html/fitner/mail.php" method="POST" id="contact-form" class="contact-box">
                        <input type="text" name="name" placeholder="Nom">
                        <input type="email" name="email" placeholder="Email">
                        <input type="number" name="number" placeholder="Telephone">
                        <textarea name="commet" id="commet" placeholder="Commentaire"></textarea>
                        <button type="submit" class="btn btn-7">Envoyer Message</button>
                    </form>
                    <p class="form-message"></p>
                </div>
                <div class="col-lg-4 ">
                    <div class="contact-ditels m-lg-2">
                        <ul class="media">
                            <li><i class="fas fa-envelope"></i></li>
                            <li>
                    
                                <a href="#">fithub1@gmail.com</a>
                            </li>
                        </ul>
                        <ul class="media">
                            <li><i class="fas fa-phone-volume"></i></li>
                            <li>
                                <a href="#">+216 71 234 567</a> </br>
                                <a href="#">+216 31 234 567</a>
                            </li>
                        </ul>
                        <ul class="media">
                            <li><i class="fas fa-map-marker-alt"></i></li>
                            <li>
                                <a target="_blank" href=""> Tunis, Tunisie </a>
                                    
                                    
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =====>> End Contact <<===== 
    =========================== -->

   <?php include("footer.php");
   ?>