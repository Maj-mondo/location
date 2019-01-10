<?php require_once 'includes/functions.php';?>
<?php require_once 'PHPMailerAutoload.php';?>
<?php include 'includes/scripts.php'; ?>
<?php include 'includes/header-register.php'; ?>

<div class="w3-display-container" style="height:600px;">
  <?php if (!empty($errors)) : ?>
  <div class="alert alert-danger">
    <p>Vous n'avez pas rempli le formulaire correctement</p>
    <ul>
      <?php foreach($errors as $error): ?>
        <li><?= $error; ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
<?php endif; ?>

      <form class="comment-form" method="post" action="">
        <div class="form-group">                
          <input type="text" placeholder="Prénom(s)" name="prenom" class="form-control">
        </div>
        <div class="form-group">                
          <input type="text" placeholder="Nom" name="nom" class="form-control">
        </div>
        <div class="form-group">                
          <input type="email" placeholder="Email Ex: car-car@gmail.com" name="email" class="form-control" >
        </div>
        <div class="form-group">                
          <input type="text" placeholder="Login" name="login" class="form-control">
        </div>
        <div class="form-group">                
          <input type="password" placeholder="Mot de passe" name="password" class="form-control" >
        </div>

        <div class="form-group">                
          <input type="password" placeholder="Confirmer mot de passe" name="password_confirm" class="form-control" >
        </div>
        <br>
         <div class="w3-display-bottommiddle">        
          <button class="w3-button w3-block w3-padding-larg w3-xlarge w3-white w3-border w3-border-red w3-round-large"  data-text="S'inscrire" type="submit">S'inscrire</button>
        </div>
      </form>
    </div>
    </div>
    <!-- End single blog post -->                  
  </div>
</div>
<div class="col-lg-4 col-md-5 col-sm-12">
  <aside class="blog-right">
    <!-- Start Sidebar Single widget -->
 
    <!-- End Sidebar Single widget -->
    <!-- Start Sidebar Single widget -->
    <div class="single-widget">
      <h2>Suivez-nous sur</h2>
      <div class="follow-us">
        <a class="facebook" href="#"><span class="fa fa-facebook"></span></a>
        <a class="twitter" href="#"><span class="fa fa-twitter"></span></a>
        <a class="google-plus" href="#"><span class="fa fa-google-plus"></span></a>
        <a class="youtube" href="#"><span class="fa fa-youtube"></span></a>
        <a class="linkedin" href="#"><span class="fa fa-linkedin"></span></a>
        <a class="dribbble" href="#"><span class="fa fa-dribbble"></span></a>
      </div>
    </div>
    <!-- End Sidebar Single widget -->
  </aside>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- End blog section -->

<!-- Start Footer -->    
<?php include 'includes/footer-site.php'; ?>
