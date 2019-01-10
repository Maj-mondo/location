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
                  <h3 id="linked-pickers">Linked Pickers</h3>
<div class="container">
    <div class='col-md-5'>
        <div class="form-group">
            <div class="input-group date" id="datetimepicker6">
                <input type='text' class="form-control" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
    </div>
    <div class='col-md-5'>
        <div class="form-group">
            <div class="input-group date" id="datetimepicker7">
                <input type='text' class="form-control" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(function () {
        $('#datetimepicker6').datetimepicker();
        $('#datetimepicker7').datetimepicker({
            useCurrent: false
        });
        $("#datetimepicker6").on("dp.change", function (e) {
            $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
        });
        $("#datetimepicker7").on("dp.change", function (e) {
            $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
        });
    });
</script>


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
                    <h4 class="wc-tittle">Location en libre service</h4>
                    <p>Location en libre-service 24h/24 et partez quand vous le souhaitez.</p>
                  </div>
                </li>
                <li>
                  <div class="single-wc-content wow fadeInUp">
                    <span class="fa fa-sellsy wc-icon"></span>
                    <h4 class="wc-tittle">Reservation simple et rapide</h4>
                    <p>At vero eos et accusamus et iusto odio in dignissimos ducimus voluptatum in delenatque </p>
                  </div>
                </li>
                <li>
                  <div class="single-wc-content wow fadeInUp">
                    <span class="fa fa-line-chart wc-icon"></span>
                    <h4 class="wc-tittle">Paiement sécurisé</h4>
                    <p>At vero eos et accusamus et iusto odio in dignissimos ducimus voluptatum in delenatque </p>
                  </div>
                </li>
                <li>
                  <div class="single-wc-content wow fadeInUp">
                    <span class="fa fa-bus wc-icon"></span>
                    <h4 class="wc-tittle">Professionnels</h4>
                    <p>At vero eos et accusamus et iusto odio in dignissimos ducimus voluptatum in delenatque </p>
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
          <a href="#" class="button button-default" data-text="EN SAVOIR PLUS !"><span>EN SAVOIR PLUS !</span></a>
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
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto</p>
            </div>
            <!-- Start team content -->
            <div class="team-content">
              <ul class="team-grid">
                <li>
                  <div class="team-item team-img-1 wow fadeInUp">
                    <div class="team-info">
                      <p> I must explain to you how all this mistaken idea of denouncing pleasure n</p>
                      <a href="#"><span class="fa fa-facebook"></span></a>
                      <a href="#"><span class="fa fa-twitter"></span></a>
                      <a href="#"><span class="fa fa-pinterest"></span></a>
                      <a href="#"><span class="fa fa-rss"></span></a>
                    </div>
                  </div>
                  <div class="team-address">
                    <p>John Richerd</p>
                    <span>CEO & Founder</span>
                  </div>
                </li>
                <li>
                  <div class="team-item team-img-2 wow fadeInUp">
                    <div class="team-info">
                      <p> I must explain to you how all this mistaken idea of denouncing pleasure n</p>
                      <a href="#"><span class="fa fa-facebook"></span></a>
                      <a href="#"><span class="fa fa-twitter"></span></a>
                      <a href="#"><span class="fa fa-pinterest"></span></a>
                      <a href="#"><span class="fa fa-rss"></span></a>
                    </div>
                  </div>
                  <div class="team-address">
                    <p>MIKE BATTON</p>
                    <span>Co-founder</span>                  
                  </div>
                </li>
                <li>
                  <div class="team-item team-img-3 wow fadeInUp">
                    <div class="team-info">
                      <p> I must explain to you how all this mistaken idea of denouncing pleasure n</p>
                      <a href="#"><span class="fa fa-facebook"></span></a>
                      <a href="#"><span class="fa fa-twitter"></span></a>
                      <a href="#"><span class="fa fa-pinterest"></span></a>
                      <a href="#"><span class="fa fa-rss"></span></a>
                    </div>
                  </div>
                  <div class="team-address">
                    <p>JOHN VICK</p>
                    <span>Developer</span>
                  </div>
                </li>
                  <li>
                  <div class="team-item team-img-4 wow fadeInUp">
                    <div class="team-info">
                      <p> I must explain to you how all this mistaken idea of denouncing pleasure n</p>
                      <a href="#"><span class="fa fa-facebook"></span></a>
                      <a href="#"><span class="fa fa-twitter"></span></a>
                      <a href="#"><span class="fa fa-pinterest"></span></a>
                      <a href="#"><span class="fa fa-rss"></span></a>
                    </div>
                  </div>
                  <div class="team-address">
                    <p>ROB HANSOM</p>
                    <span>Senior designer</span>
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
                    <h4 class="service-title">UX Design</h4>
                    <p>At vero eos et accusa mus odio in dignissimos ducimus qui anditiis the tatum</p>
                  </div>
                </li>
                <li class="col-md-3 col-sm-6">
                  <div class="single-service wow slideInUp">
                    <span class="fa fa-sort-amount-asc service-icon"></span>
                    <h4 class="service-title">Strategy</h4>
                    <p>At vero eos et accusa mus odio in dignissimos ducimus qui anditiis the tatum</p>
                  </div>
                </li>
                <li class="col-md-3 col-sm-6">
                 <div class="single-service wow slideInUp">
                    <span class="fa fa-map-o service-icon"></span>
                    <h4 class="service-title">UI Design</h4>
                    <p>At vero eos et accusa mus odio in dignissimos ducimus qui anditiis the tatum</p>
                  </div>
                </li>
                <li class="col-md-3 col-sm-6">
                  <div class="single-service wow slideInUp">
                    <span class="fa fa-rocket service-icon"></span>
                    <h4 class="service-title">Analystic</h4>
                    <p>At vero eos et accusa mus odio in dignissimos ducimus qui anditiis the tatum</p>
                  </div>
                </li>
                <li class="col-md-3 col-sm-6">
                  <div class="single-service wow slideInUp">
                    <span class="fa fa-car service-icon"></span>
                    <h4 class="service-title">Usibility</h4>
                    <p>At vero eos et accusa mus odio in dignissimos ducimus qui anditiis the tatum</p>
                  </div>
                </li>
                <li class="col-md-3 col-sm-6">
                  <div class="single-service wow slideInUp">
                    <span class="fa fa-bank service-icon"></span>
                    <h4 class="service-title">Business solution</h4>
                    <p>At vero eos et accusa mus odio in dignissimos ducimus qui anditiis the tatum</p>
                  </div>
                </li>
                <li class="col-md-3 col-sm-6">
                  <div class="single-service wow slideInUp">
                    <span class="fa fa-user-secret service-icon"></span>
                    <h4 class="service-title">Creative concept</h4>
                    <p>At vero eos et accusa mus odio in dignissimos ducimus qui anditiis the tatum</p>
                  </div>
                </li>
                <li class="col-md-3 col-sm-6">
                  <div class="single-service wow slideInUp">
                    <span class="fa fa-support service-icon"></span>
                    <h4 class="service-title">Support</h4>
                    <p>At vero eos et accusa mus odio in dignissimos ducimus qui anditiis the tatum</p>
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
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamcoquat. Duis aute irure d olor in reprehenderit</p>
                    <div class="single-testimonial">
                      <img class="testimonial-thumb" src="assets/images/testimonial-image1.png" alt="img">
                      <p>Jonna Hike</p>
                      <span>CEO, Themeforest</span>
                    </div>
                  </div>
                  <!-- single slide -->
                  <div class="single-slide">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamcoquat. Duis aute irure d olor in reprehenderit</p>
                    <div class="single-testimonial">
                      <img class="testimonial-thumb" src="assets/images/team-member2.png" alt="img">
                      <p>Jonna Hike</p>
                      <span>CEO, Themeforest</span>
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
  <!-- End Testimonial section -->
  <!-- Start Portfolio section -->
  <section id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="portfolio-area">
            <div class="title-area">
              <h2 class="tittle">Nos modéles de vehicule</h2>
              <span class="tittle-line"></span>
              <p>Choisissez la voiture que vous voulez louer en fonction du modéle</p>
            </div>
            <!-- Portfolio content -->
            <div class="portfolio-content">
                <!-- portfolio menu -->
               <div class="portfolio-menu">
                 <ul>
                   <li class="filter" data-filter="all">Tous les modèles</li>
                   <li class="filter" data-filter=".branding">Berline</li>
                   <li class="filter" data-filter=".design">Design</li>
                   <li class="filter" data-filter=".development">Development</li>
                   <li class="filter" data-filter=".photography">Photography</li>
                 </ul>
               </div>
               <!-- Portfolio container -->
               <div id="mixit-container" class="portfolio-container">
                 <div class="single-portfolio mix branding">
                   <div class="single-item">
                     <img src="assets/images/portfolio-img-small1.jpg" alt="img">
                     <div class="single-item-content">
                        <div class="portfolio-social-icon">
                          <a class="fancybox" data-fancybox-group="gallery" href="assets/images/portfolio-img-big1.jpg"><i class="fa fa-eye"></i></a>
                          <a class="link-btn" href="#"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="portfolio-title">
                          <h4>Mobile application</h4>
                          <span>UI Design</span>
                        </div>
                     </div>
                   </div>
                 </div>
                 <div class="single-portfolio mix design">
                   <div class="single-item">
                     <img src="assets/images/portfolio-img-small2.jpg" alt="img">
                     <div class="single-item-content">
                        <div class="portfolio-social-icon">
                          <a class="fancybox" data-fancybox-group="gallery" href="assets/images/portfolio-img-big2.jpg"><i class="fa fa-eye"></i></a>
                          <a class="link-btn" href="#"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="portfolio-title">
                          <h4>Mobile application</h4>
                          <span>UI Design</span>
                        </div>
                     </div>
                   </div>
                 </div>
                 <div class="single-portfolio mix development">
                   <div class="single-item">
                     <img src="assets/images/portfolio-img-small3.jpg" alt="img">
                     <div class="single-item-content">
                        <div class="portfolio-social-icon">
                          <a class="fancybox" data-fancybox-group="gallery" href="assets/images/portfolio-img-big3.jpg"><i class="fa fa-eye"></i></a>
                          <a class="link-btn" href="#"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="portfolio-title">
                          <h4>Mobile application</h4>
                          <span>UI Design</span>
                        </div>
                     </div>
                   </div>
                 </div>
                 <div class="single-portfolio mix photography">
                   <div class="single-item">
                     <img src="assets/images/portfolio-img-small4.jpg" alt="img">
                     <div class="single-item-content">
                        <div class="portfolio-social-icon">
                          <a class="fancybox" data-fancybox-group="gallery" href="assets/images/portfolio-img-big4.jpg"><i class="fa fa-eye"></i></a>
                          <a class="link-btn" href="#"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="portfolio-title">
                          <h4>Mobile application</h4>
                          <span>UI Design</span>
                        </div>
                     </div>
                   </div>
                 </div>
                 <div class="single-portfolio mix photography">
                   <div class="single-item">
                     <img src="assets/images/portfolio-img-small5.jpg" alt="img">
                     <div class="single-item-content">
                        <div class="portfolio-social-icon">
                          <a class="fancybox" data-fancybox-group="gallery" href="assets/images/portfolio-img-big5.jpg"><i class="fa fa-eye"></i></a>
                          <a class="link-btn" href="#"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="portfolio-title">
                          <h4>Mobile application</h4>
                          <span>UI Design</span>
                        </div>
                     </div>
                   </div>
                 </div>
                 <div class="single-portfolio mix photography">
                   <div class="single-item">
                     <img src="assets/images/portfolio-img-small6.jpg" alt="img">
                     <div class="single-item-content">
                        <div class="portfolio-social-icon">
                          <a class="fancybox" data-fancybox-group="gallery" href="assets/images/portfolio-img-big6.jpg"><i class="fa fa-eye"></i></a>
                          <a class="link-btn" href="#"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="portfolio-title">
                          <h4>Mobile application</h4>
                          <span>UI Design</span>
                        </div>
                     </div>
                   </div>
                 </div>
                 <div class="single-portfolio mix photography">
                   <div class="single-item">
                     <img src="assets/images/portfolio-img-small7.jpg" alt="img">
                     <div class="single-item-content">
                        <div class="portfolio-social-icon">
                          <a class="fancybox" data-fancybox-group="gallery" href="assets/images/portfolio-img-big7.jpg"><i class="fa fa-eye"></i></a>
                          <a class="link-btn" href="#"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="portfolio-title">
                          <h4>Mobile application</h4>
                          <span>UI Design</span>
                        </div>
                     </div>
                   </div>
                 </div>
                 <div class="single-portfolio mix photography">
                   <div class="single-item">
                     <img src="assets/images/portfolio-img-small2.jpg" alt="img">
                     <div class="single-item-content">
                        <div class="portfolio-social-icon">
                          <a class="fancybox" data-fancybox-group="gallery" href="assets/images/portfolio-img-big2.jpg"><i class="fa fa-eye"></i></a>
                          <a class="link-btn" href="#"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="portfolio-title">
                          <h4>Mobile application</h4>
                          <span>UI Design</span>
                        </div>
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
                    <p>Happy Clients</p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="single-counter">
                  <span class="fa fa-bus"></span>
                  <div class="counter-count">
                    <span class="counter">750</span>
                    <p>Project delivery</p>
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
                    <p>Project done</p>
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
  <section id="from-blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="from-blog-area">
            <div class="title-area">
              <h2 class="tittle">Blog</h2>
              <span class="tittle-line"></span>
              <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est</p>
            </div>
            <!-- From Blog content -->
            <div class="from-blog-content">
              <div class="row">
                <div class="col-md-4">
                  <article class="single-from-blog">
                    <figure>
                      <a href="blog.php"><img src="assets/images/the-sky.jpg" alt="img"></a>
                    </figure>
                    <div class="blog-title">
                      <h2><a href="blog.php">Here is the post title</a></h2>
                      <p>Posted by <a class="blog-admin" href="#">admin</a> on <span class="blog-date">23rd july 2015</span></p>
                    </div>
                    <p>Sed ut perspiciatis unde mnis is te natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis </p>
                    <div class="blog-footer">
                      <a href="#"><span class="fa fa-comment"></span>18 Comments</a>
                      <a href="#"><span class="fa fa-thumbs-o-up"></span>35 Likes</a>
                    </div>
                  </article>
                </div>
                <div class="col-md-4">
                  <article class="single-from-blog">
                    <figure>
                      <a href="blog.php"><img src="assets/images/photographer.jpg" alt="img"></a>
                    </figure>
                    <div class="blog-title">
                      <h2><a href="blog.php">Here is the post title</a></h2>
                      <p>Posted by <a class="blog-admin" href="#">admin</a> on <span class="blog-date">23rd july 2015</span></p>
                    </div>
                    <p>Sed ut perspiciatis unde mnis is te natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis </p>
                    <div class="blog-footer">
                      <a href="#"><span class="fa fa-comment"></span>18 Comments</a>
                      <a href="#"><span class="fa fa-thumbs-o-up"></span>35 Likes</a>
                    </div>
                  </article>
                </div>
                <div class="col-md-4">
                  <article class="single-from-blog">
                    <figure>
                      <a href="blog.php"><img src="assets/images/sealand.jpg" alt="img"></a>
                    </figure>
                    <div class="blog-title">
                      <h2><a href="blog.php">Here is the post title</a></h2>
                      <p>Posted by <a class="blog-admin" href="#">admin</a> on <span class="blog-date">23rd july 2015</span></p>
                    </div>
                    <p>Sed ut perspiciatis unde mnis is te natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis </p>
                    <div class="blog-footer">
                      <a href="#"><span class="fa fa-comment"></span>18 Comments</a>
                      <a href="#"><span class="fa fa-thumbs-o-up"></span>35 Likes</a>
                    </div>
                  </article>
                </div>
              </div>    
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
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
 <br>
  <!-- Start Google Map -->
  <section id="google-map">
    <br>
    <div class="title-area">
      <h2 class="tittle">Toutes les agences de location de voiture au Sénégal</h2>
      <span class="tittle-line"></span>
      <p>Nous avons répertorié pour vous l'ensemble des agences suceptibles de ous satisfaire dans Dakar et dans les rgions.</p>
    </div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d494187.56441498117!2d-17.53610498287854!3d14.608169041501057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sagence+de+location+de+voiture+au+senegal!5e0!3m2!1sfr!2ssn!4v1544441319159"  width="100%" height="500" frameborder="0" style="border:0" allowfullscreen>
      </iframe>
  </section>
  <!-- End Google Map -->

<script>
    if (top != self) { top.location.replace(self.location.href); }
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-47462200-1', 'eonasdan.github.io');
    ga('send', 'pageview');
    </script>
  <!-- Start Footer -->    
<?php include 'includes/footer-site.php'; ?>
