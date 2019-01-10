<?php
  require_once("conn.php");
?>

<?php include 'includes/header-client.php'; ?>


<div class="newsletter">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="newsletter_container d-flex flex-lg-row flex-column align-items-lg-center align-items-center justify-content-lg-start justify-content-center">
            <div class="newsletter_title_container">
              <div class="newsletter_title">Notre flotte de véhicules</div>
              <div class="newsletter_text"><p>...et recevez -20% de réduction à partir de votre cinquième abonnement !</p></div>
            </div>
            <div class="newsletter_content clearfix">
              <form action="#" class="newsletter_form">
                <input type="email" class="search_input" required="required" placeholder="Chercher une voiture ...">
                <button class="search_button">Rechercher</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <br>
    <div class="container">
      <div class="row" style="box-shadow: 1px 1px 12px #999999;padding: 10px;height: 350px">
        <div class="col-sm-12">
          <nav class="navbar navbar-default" style="background-color: #999999;">
            <div class="container-fluid">
              <div class="navbar-header">
                <a class="navbar-brand" href="#">
                  <h2 style="color: #fff;font-size: 25px">Nom</h2>
                </a>
              </div>
            </div>
          </nav>          
          <div class="col-lg-6">Caractéristiques</div>
          <div class="col-lg-6">Photo</div>
          <hr>
        </div>
        <br>
        <br>
        <hr>
        <div class="col-xs-6 col-md-3">
        </div>
         <div class="col-xs-6 col-md-3">
        </div>
         <div class="col-xs-6 col-md-3">
        </div>
         <div class="col-xs-6 col-md-3">
          <div class="button banner_button"><a href="Product.php">Consulter</a></div>
        </div>
      </div>
    </div>



  <!-- Footer -->

<?php include 'includes/footer-client.php'; ?>
