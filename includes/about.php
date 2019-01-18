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
                    <a href="/user/login.php" class="button button-default" data-text="INSCRIPTION"><span>INSCRIPTION</span></a>
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
