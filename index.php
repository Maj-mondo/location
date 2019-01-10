<?php include 'includes/header-site.php'; ?>
<br>
  <!-- Start about section -->
  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <!-- Start welcome area -->
          <div class="welcome-area">
            <div class="title-area">
              <h2 class="tittle">Bienvenue dans <span>Car-Car</span></h2>
              <span class="tittle-line"></span>
              <p>Votre agence de location automobile en ligne.</p>
            </div>
            <br>
            <!-- Start reservation area -->
            </div>
          <br>
          <div class="welcome-content">
            <div class="w3-display-container w3-margin-top w3-content w3-hide-small wow fadeInLeft" style="max-width:1500px;visibility: visible; animation-name: fadeInLeft;">
              <div class="w3-white" style="height:300px;">
                <div class="w3-padding w3-display-topmiddle">
                  <h3>Reservez votre véhicule</h3>
                </div>
                <form action="reserver.php" method="post">
                  <div class="w3-padding w3-display-left">
                      <label>Choisissez votre agence</label>
                      <input class="w3-input w3-border" type="text" name="nom" placeholder="Entrer une agence">
                    </div>
                    <div class="w3-padding w3-display-middle">
                      <label class="w3-left">Départ</label>
                      <input class="w3-input w3-border" type="datetime-local" name="debut" placeholder="depart">
                    </div>
                    <div class="w3-padding w3-display-right">
                      <label class="w3-left">Arrivée</label>
                      <input class="w3-input w3-border" type="datetime-local" name="fin" placeholder="arrivée">                      
                    </div>
                    <br>
                    <div class="w3-padding w3-display-bottommiddle">                  
                      <p><button class="button button-default" style="width: 135.5px;height: 46px">RECHERCHER</button></p>
                    </div>               
                </form>
              </div>
            </div>
          </div>
                        <!-- End reservation area -->
            <div class="welcome-content">
              <ul class="wc-table">
                <li>
                  <div class="single-wc-content wow fadeInUp">
                    <span class="fas fa-car wc-icon"></span>
                    <h4 class="wc-tittle">Formules</h4>
                    <p>Chez Car-Car, nous savons que chaque client est UNIQUE. C’est pour cela que nous avons développé des offres de locations flexibles et variées, à l’image de notre clientèle.</p>
                  </div>
                </li>
                <li>
                  <div class="single-wc-content wow fadeInUp">
                    <span class="fa fa-sellsy wc-icon"></span>
                    <h4 class="wc-tittle">Valeurs</h4>
                    <p>La satisfaction et le suivi personnalisé que nous apportons à chacun de nos clients sont au cœur de nos préoccupations.</p>
                  </div>
                </li>
                <li>
                  <div class="single-wc-content wow fadeInUp">
                    <span class="fa fa-line-chart wc-icon"></span>
                    <h4 class="wc-tittle">Ambitions</h4>
                    <p>Chaque voyage est une aventure qui mérite d’être vécue au maximum. Notre ambition est de faire en sorte que votre expérience soit un moment unique.</p>
                  </div>
                </li>
                <li>
                  <div class="single-wc-content wow fadeInUp">
                    <span class="fa fa-bus wc-icon"></span>
                    <h4 class="wc-tittle">Professionnels</h4>
                    <p> Nous tenons à votre confiance sans cesse renouvelée, nous apprenons de vos retours d’expérience et nous améliorons, un peu plus chaque jour.</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <!-- End welcome area -->
        </div>
       
      <div class="row">
        <div class="col-md-12">
          <div class="about-area">
            <div class="row">
              <div class="col-md-5 col-sm-6 col-xs-12">
                <div class="about-left wow fadeInLeft">
                  <img src="assets/images/about-img.jpg" alt="img">
                  <a class="introduction-btn" href="catalogue.php">Catalogue</a>
                </div>
              </div>
              <div class="col-md-7 col-sm-6 col-xs-12">
                <div class="about-right wow fadeInRight">
                  <div class="title-area">
                    <h2 class="tittle">Profitez des meilleurs offres de location <span>de voitures</span></h2>
                    <span class="tittle-line"></span>
                    <p> Nous sommes en mesure de proposer les tarifs les plus bas et des options gratuites Milan. Nous vous proposerons les meilleures offres possibles à des prix trés intéressants afin que vous puissiez choisir la location que vous souhaitez.</p> 

                    <p><i class="glyphicon glyphicon-play" style="font-size: 20px;color: #ff2851"></i> Consultez et éditez vos réservations de voiture.</p> 

                    <p><i class="glyphicon glyphicon-play" style="font-size: 20px;color: #ff2851"></i> Pas de frais d'annulation.</p> 
                    
                    <p><i class="glyphicon glyphicon-play" style="font-size: 20px;color: #ff2851"></i> Vos informations sont enregistrées et vos transactions se passent en un seul clic!</p> 

                    <div class="about-btn-area">
                      <a href="login.php" class="button button-default" data-text="INSCRIPTION"><span>INSCRIPTION</span></a>
                    </div>                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> 
  <!-- End about section -->

  <!-- Start call to action -->
  <section id="call-to-action">
    <img src="assets/images/call-to-action-bg.png" alt="img">
    <div class="call-to-overlay">
      <div class="container">
        <div class="call-to-content wow fadeInUp">
          <h2>Nous mettons à votre disposition un <span color="#ff2851">Chauffeur</span>  professionel</h2>
        </div>
      </div>
    </div> 
  </section>
  <!-- End call to action -->

  <!-- Start Team action -->
  <section id="team">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="team-area">
            <div class="title-area">
              <h2 class="tittle">Nos Agences</h2>
              <span class="tittle-line"></span>
              <p>Quelques agences répartis sur l'ensemble du territoire.</p>
            </div>
            <!-- Start team content -->
            <div class="team-content">
              <ul class="team-grid">
                <li>
                  <div class="team-item team-img-1 wow fadeInUp">
                    <div class="team-info">
                      <p>Adresse</p>
                    </div>
                  </div>
                  <div class="team-address">
                    <p>Nom de l'agence</p>
                  </div>
                </li>
              </ul>
            </div>
            <!-- End team content -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Start Team action -->

  <!-- Start service section -->
  <section id="service">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="service-area">
            <div class="title-area">
              <h2 class="tittle">Nos Servies</h2>
              <span class="tittle-line"></span>
              <p>perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore</p>
            </div>
            <!-- service content -->
            <div class="service-content">
              <ul class="service-table">
                <li class="col-md-3 col-sm-6">
                  <div class="single-service wow slideInUp">
                    <span class="fa fa-edit service-icon"></span>
                    <h4 class="service-title">Strategie</h4>
                  </div>
                </li>
                <li class="col-md-3 col-sm-6">
                  <div class="single-service wow slideInUp">
                    <span class="fa fa-sort-amount-asc service-icon"></span>
                    <h4 class="service-title">Disponibilité</h4>
                  </div>
                </li>
                <li class="col-md-3 col-sm-6">
                 <div class="single-service wow slideInUp">
                    <span class="fa fa-map-o service-icon"></span>
                    <h4 class="service-title">Confort</h4>
                  </div>
                </li>
                <li class="col-md-3 col-sm-6">
                  <div class="single-service wow slideInUp">
                    <span class="fa fa-rocket service-icon"></span>
                    <h4 class="service-title">Assurance</h4>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End service section -->


  <!-- Start Testimonial section -->
  <section id="testimonial">
    <img src="assets/images/testimonial-bg.jpg" alt="img">
    <div class="counter-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- Start Testimonial area -->
            <div class="testimonial-area">
              <div class="title-area">
                <h2 class="tittle">Nos nouvelles arrivages !</h2>
                <span class="tittle-line"></span>              
              </div>
              <div class="testimonial-conten">
                <!-- Start testimonial slider -->
                <div class="testimonial-slider">
                  <!-- single slide -->
                  <div class="single-slide">
                    <p>Nom de la voiture</p>
                    <a href="catalogue.php">
                      <div class="single-testimonial">
                      <img class="testimonial-thumb" src="assets/images/acc2.jpg" alt="img" style="width: 250px;height: 250px">
                      <p>Nom voiture</p>
                      <span>Catégorie</span>
                    </div>
                    </a>
                  </div>
                  <!-- single slide -->
                  <div class="single-slide">
                    <p>Nom de la voiture</p>
                    <a href="catalogue.php">
                      <div class="single-testimonial">
                      <img class="testimonial-thumb" src="assets/images/acc2.jpg" alt="img" style="width: 250px;height: 250px">
                      <p>Nom voiture</p>
                      <span>Catégorie</span>
                    </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> 
  </section>
  <!-- End Testimonial section -->
  <!-- Start Portfolio section -->
  <section id="portfolio">
    <br>
  </section>
  <!-- End Portfolio section -->

  <!-- Start counter section -->
  <section id="counter">
    <img src="assets/images/counter-bg.jpg" alt="img">
    <div class="counter-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- Start counter area -->
            <div class="counter-area">
              <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="single-counter">
                  <span class="fa fa-users"></span>
                  <div class="counter-count">
                    <span class="counter">1050</span>
                    <p>Clients satisfaitd</p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="single-counter">
                  <span class="fa fa-bus"></span>
                  <div class="counter-count">
                    <span class="counter">750</span>
                    <p>Locations</p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="single-counter">
                  <span class="fa fa-twitter"></span>
                  <div class="counter-count">
                    <span class="counter">2,300</span>
                    <p>Followers</p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="single-counter">
                  <span class="fa fa-tasks"></span>
                  <div class="counter-count">
                    <span class="counter">800</span>
                    <p>Reservations</p>
                  </div>
                </div>
              </div>    
            </div>
          </div>
        </div>
      </div>
    </div> 
  </section>
  <!-- End counter section -->




  <!-- Start from blog section -->
 
  <!-- End from blog section -->

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
              <li><img src="assets/images/envato.png" alt="client logo"></li>
              <li><img src="assets/images/google.png" alt="client logo"></li>
              <li><img src="assets/images/amazon.png" alt="client logo"></li>
              <li><img src="assets/images/discovery.png" alt="client logo"></li>
              <li><img src="assets/images/envato.png" alt="client logo"></li>
              <li><img src="assets/images/tuenti.png" alt="client logo"></li>
              <li><img src="assets/images/envato.png" alt="client logo"></li>
              <li><img src="assets/images/google.png" alt="client logo"></li>
              <li><img src="assets/images/amazon.png" alt="client logo"></li>
              <li><img src="assets/images/discovery.png" alt="client logo"></li>
              <li><img src="assets/images/envato.png" alt="client logo"></li>
              <li><img src="assets/images/tuenti.png" alt="client logo"></li>                    
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
                <input type="text" class="form-control" name="name-sender" placeholder="Entrer nom">
              </div>
              <div class="form-group">                
                <input type="email" class="form-control" name="email-sender" placeholder="Entrer e-mail">
              </div>              
              <div class="form-group">
                <textarea class="form-control"></textarea>
              </div>
              <button type="submit" data-text="Envoyer" name="message" class="button button-default"><span>Envoyer</span></button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- End Contact section -->
 <br>
  <!-- Start Google Map -->
  <section id="google-map">
    <br>
    <div class="title-area">
      <h2 class="tittle">Toutes les agences de location de voiture au Sénégal</h2>
      <span class="tittle-line"></span>
      <p>Nous avons répertorié pour vous l'ensemble des agences suceptibles de ous satisfaire dans Dakar et dans les régions.</p><br>
    </div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d494187.56441498117!2d-17.53610498287854!3d14.608169041501057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sagence+de+location+de+voiture+au+senegal!5e0!3m2!1sfr!2ssn!4v1544441319159"  width="100%" height="500" frameborder="0" style="border:0" allowfullscreen>
      </iframe>
  </section>
  <!-- End Google Map -->

  <!-- Start Footer -->    
<?php include 'includes/footer-site.php'; ?>
