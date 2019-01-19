<?php include 'includes/header-site.php'; ?>

  <!-- Start flotte section -->
  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <!-- Start welcome area -->
          <div class="welcome-content">
            <div class="title-area">
              <h2 class="tittle">Le <span>catalogue</span></h2>
              <span class="tittle-line"></span>
              <p>Choisissez la voiture que vous voulez louer en fonction du modéle</p>
            </div>
          </div>
          <div class="welcome-content">
            <div class="flotte-search">
              <div class="col-xs-12">
                <div class="col-sm-6">
                  <p  style="font-size: 25px">Rechercher un véhicule</p>
                </div>
                <div class="col-sm-6">
                  <form class="search" action="">
                    <input type="text" placeholder="Rechercher" name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                  </form>
                </div>
              </div>
            </div>
            <br>
            <div class="flotte-content">
              <div class="container-fluid">
                <div class="flotte-box-header">
                  <a class="flotte-box-brand" href="/user/login.php">
                    <h2 style="">Nom</h2>
                  </a>
                </div>
              </div>
              <div class="col-lg-6">
                <br>
                <h3>Caractristiques</h3>
                <br>
                <br>
                <div class="col-md-3">Type</div>
                <div class="col-md-3">Marque</div>
                <div class="col-md-3">Version</div>
                <div class="col-md-3">Couleur</div>
                <br>
                <div class="col-md-3">Transmission</div>
                <div class="col-md-3">Climatisation</div>
                <div class="col-md-3">OptionGPS</div>
                <div class="col-md-3">Carburant</div>
                <br>
                <div class="col-md-3">Nmbre de portes</div>
                <div class="col-md-3">Nombre de passagers</div>
                <div class="col-md-3">Kilomètragre</div>
                <div class="col-md-3">Carburant</div>
                <br>
                <br>
                <br>
                <br>
                <h4><strong>Prix</strong></h4>
              </div>
              <div class="col-lg-6">
                <h3>Photo</h3>
                <div><img src="assets/images/acc1.jpg"></div>
              </div>
              <br>
              <br>
              <div class="col-xs-6 col-md-3">
              </div>
              <div class="col-xs-6 col-md-3">
              </div>
               <div class="col-xs-6 col-md-3">
              </div>
              <div class="col-xs-6 col-md-3">
                <button type="submit" data-text="Reserver" class="button button-default">
                  <span>Reserver</span>
                </button>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
  </section>
  <!-- End about section -->


  <!-- Our partners -->

  <section id="client">
    <div class="container">
      <div class="title-area">
        <h2 class="tittle">Ils nous font confiance !</h2>
        <span class="tittle-line"></span>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="client-area">
            <ul class="client-table">
              <li><img src="/assets/images/envato.png" alt="client logo"></li>
              <li><img src="/assets/images/google.png" alt="client logo"></li>
              <li><img src="/assets/images/amazon.png" alt="client logo"></li>
              <li><img src="/assets/images/discovery.png" alt="client logo"></li>
              <li><img src="/assets/images/envato.png" alt="client logo"></li>
              <li><img src="/assets/images/tuenti.png" alt="client logo"></li>
              <li><img src="/assets/images/envato.png" alt="client logo"></li>
              <li><img src="/assets/images/google.png" alt="client logo"></li>
              <li><img src="/assets/images/amazon.png" alt="client logo"></li>
              <li><img src="/assets/images/discovery.png" alt="client logo"></li>
              <li><img src="/assets/images/envato.png" alt="client logo"></li>
              <li><img src="/assets/images/tuenti.png" alt="client logo"></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Start Contact section -->
  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="contact-left wow fadeInLeft">
            <h2>Nous contacter</h2>
            <address class="single-address">
              <h4>Adresse postale :</h4>
              <p>Car-Car Ouest Foire 8007 </p>
            </address>
             <address class="single-address">
              <h4>Siège :</h4>
              <p>26 A Allée Sacré Coeur 3, Allée Immeuble Mariama Ecobank, Dakar 17971</p>
            </address>
             <address class="single-address">
              <h4>Phone</h4>
              <p>Téléphone : (+221) 77 668 88 173</p>
            </address>
             <address class="single-address">
              <h4>E-Mail</h4>
              <p>Adresse : diattamfall@gmail.com</p>
            </address>
          </div>
        </div>
        <div class="col-md-8 col-sm-6 col-xs-12">
          <div class="contact-right wow fadeInRight">
            <h2>Envoyer un messagee</h2>
            <form action="" class="contact-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Entrer nom">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Entrer e-mail">
              </div>
              <div class="form-group">
                <textarea class="form-control"></textarea>
              </div>
              <button type="submit" data-text="Envoyer" class="button button-default"><span>Envoyer</span></button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- End Contact section -->


  <!-- Start Footer -->
<?php include 'includes/footer-site.php'; ?>
