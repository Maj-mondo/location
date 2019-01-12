<?php
  require_once("conn.php");
?>
<?php include 'includes/header-client.php'; ?>


  <!-- Deals of the week -->

  <div class="deals_featured">
    <div class="container">
      <div class="row">
        <div class="col d-flex flex-lg-row flex-column align-items-center justify-content-start">
          
          <!-- Deals -->

          <div class="deals">
            <div class="deals_title">Pour ce week-end</div>
            <div class="deals_slider_container">
              
              <!-- Deals Slider -->
              <div class="owl-carousel owl-theme deals_slider">
                
                
                <!-- Deals Item -->
                <div class="owl-item deals_item">
                  <div class="deals_image"><img src="assets/images/acc2.jpg" alt=""></div>
                  <div class="deals_content">
                    <div class="deals_info_line d-flex flex-row justify-content-start">
                      <div class="deals_item_category"><a href="car-shower.php">Categorie</a></div>
                      <div class="deals_item_price_a ml-auto">prix mini</div>
                    </div>
                    <div class="deals_info_line d-flex flex-row justify-content-start">
                      <div class="deals_item_name">Nom</div>
                      <div class="deals_item_price ml-auto">2250000</div>
                    </div>
                    <div class="available">
                      <div class="available_line d-flex flex-row justify-content-start">
                        <div class="available_title">Disponibles: <span>6</span></div>
                        <div class="sold_title ml-auto">Vendues: <span>28</span></div>
                      </div>
                      <div class="available_bar"><span style="width:17%"></span></div>
                    </div>
                    <div class="deals_timer d-flex flex-row align-items-center justify-content-start">
                      <div class="deals_timer_title_container">
                        <div class="deals_timer_title">Faites vite !</div>
                        <div class="deals_timer_subtitle">L'offre est finie dans:</div>
                      </div>
                      <div class="deals_timer_content ml-auto">
                        <div class="deals_timer_box clearfix" data-target-time="">
                          <div class="deals_timer_unit">
                            <div id="deals_timer3_hr" class="deals_timer_hr"></div>
                            <span>Heure</span>
                          </div>
                          <div class="deals_timer_unit">
                            <div id="deals_timer3_min" class="deals_timer_min"></div>
                            <span>Minutes</span>
                          </div>
                          <div class="deals_timer_unit">
                            <div id="deals_timer3_sec" class="deals_timer_sec"></div>
                            <span>Secondes</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>

            </div>

            <div class="deals_slider_nav_container">
              <div class="deals_slider_prev deals_slider_nav"><i class="fas fa-chevron-left ml-auto"></i></div>
              <div class="deals_slider_next deals_slider_nav"><i class="fas fa-chevron-right ml-auto"></i></div>
            </div>
          </div>
          
          <!-- Featured -->
          <div class="featured">
            <div class="tabbed_container">
              <div class="tabs">
                <ul class="clearfix">
                  <li class="active">Top</li>
                  <li>En soldes</li>
                  <li>Les plus vendus</li>
                </ul>
                <div class="tabs_line"><span></span></div>
              </div>

              <!-- Product Panel -->
              <div class="product_panel panel active">
                <div class="featured_slider slider">

                    <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="assets/images/acc2.jpg" alt=""></div>
                      <div class="product_content">
                        <div class="product_price discount">225000<span>1000000</span></div>
                        <div class="product_name"><div><a href="product.php">Aston</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Voir</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount">-25%</li>
                        <li class="product_mark product_new">nouveau</li>
                      </ul>
                    </div>
                  </div>

                </div>
                <div class="featured_slider_dots_cover"></div>
              </div>

              <!-- Product Panel -->

              <div class="product_panel panel">
                <div class="featured_slider slider">

                  <!-- Slider Item -->
                    <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="assets/images/acc2.jpg" alt=""></div>
                      <div class="product_content">
                        <div class="product_price discount">225000<span>1000000</span></div>
                        <div class="product_name"><div><a href="product.php">Aston</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Ajouter au panier</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount">-25%</li>
                        <li class="product_mark product_new">nouveau</li>
                      </ul>
                    </div>
                  </div>


                </div>
                <div class="featured_slider_dots_cover"></div>
              </div>

              <!-- Product Panel -->

              <div class="product_panel panel">
                <div class="featured_slider slider">

                  

                  <!-- Slider Item -->
                    <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="assets/images/acc2.jpg" alt=""></div>
                      <div class="product_content">
                        <div class="product_price discount">225000<span>1000000</span></div>
                        <div class="product_name"><div><a href="product.php">Aston</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Ajouter au panier</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount">-25%</li>
                        <li class="product_mark product_new">nouveau</li>
                      </ul>
                    </div>
                  </div>


                </div>
                <div class="featured_slider_dots_cover"></div>
              </div>

            </div>
          </div>

        </div>
      </div>
    </div>
  </div>


  <!-- Banner -->

  <div class="banner_2">
    <div class="banner_2_background" style="background-image:url(assets/images/banner_2_background.jpg)"></div>
    <div class="banner_2_container">
      <div class="banner_2_dots"></div>
      <!-- Banner 2 Slider -->

      <div class="owl-carousel owl-theme banner_2_slider">

        <!-- Banner 2 Slider Item -->
        <div class="owl-item">
          <div class="banner_2_item">
            <div class="container fill_height">
              <div class="row fill_height">
                <div class="col-lg-4 col-md-6 fill_height">
                  <div class="banner_2_content">
                    <div class="banner_2_category">Voiture utilitaires</div>
                    <div class="banner_2_title">Ford Transit fourgon</div>
                    <div class="banner_2_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</div>
                    <div class="rating_r rating_r_4 banner_2_rating"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class="button banner_2_button"><a href="#">Explore</a></div>
                  </div>
                  
                </div>
                <div class="col-lg-8 col-md-6 fill_height">
                  <div class="banner_2_image_container">
                    <div class="banner_2_image"><img src="assets/images/fourgonn.jpg" alt=""></div>
                  </div>
                </div>
              </div>
            </div>      
          </div>
        </div>

        <!-- Banner 2 Slider Item -->
        <div class="owl-item">
          <div class="banner_2_item">
            <div class="container fill_height">
              <div class="row fill_height">
                <div class="col-lg-4 col-md-6 fill_height">
                  <div class="banner_2_content">
                    <div class="banner_2_category">Laptops</div>
                    <div class="banner_2_title">MacBook Air 13</div>
                    <div class="banner_2_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</div>
                    <div class="rating_r rating_r_4 banner_2_rating"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class="button banner_2_button"><a href="#">Explore</a></div>
                  </div>
                  
                </div>
                <div class="col-lg-8 col-md-6 fill_height">
                  <div class="banner_2_image_container">
                    <div class="banner_2_image"><img src="assets/images/banner_2_product.png" alt=""></div>
                  </div>
                </div>
              </div>
            </div>      
          </div>
        </div>

        <!-- Banner 2 Slider Item -->
        <div class="owl-item">
          <div class="banner_2_item">
            <div class="container fill_height">
              <div class="row fill_height">
                <div class="col-lg-4 col-md-6 fill_height">
                  <div class="banner_2_content">
                    <div class="banner_2_category">Laptops</div>
                    <div class="banner_2_title">MacBook Air 13</div>
                    <div class="banner_2_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</div>
                    <div class="rating_r rating_r_4 banner_2_rating"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class="button banner_2_button"><a href="#">Explore</a></div>
                  </div>
                  
                </div>
                <div class="col-lg-8 col-md-6 fill_height">
                  <div class="banner_2_image_container">
                    <div class="banner_2_image"><img src="assets/images/banner_2_product.png" alt=""></div>
                  </div>
                </div>
              </div>
            </div>      
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- Popular Categories -->

  <div class="popular_categories">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="popular_categories_content">
            <div class="popular_categories_title">Nos types de véhicules</div>
            <div class="popular_categories_slider_nav">
              <div class="popular_categories_prev popular_categories_nav"><i class="fas fa-angle-left ml-auto"></i></div>
              <div class="popular_categories_next popular_categories_nav"><i class="fas fa-angle-right ml-auto"></i></div>
            </div>
            <div class="popular_categories_link"><a href="shop.php">Voir tout le catalogue</a></div>
          </div>
        </div>
        
        <!-- Popular Categories Slider -->

        <div class="col-lg-9">
          <div class="popular_categories_slider_container">
            <div class="owl-carousel owl-theme popular_categories_slider">

              <!-- Popular Categories Item -->
              <div class="owl-item">
                <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                  <div class="popular_category_image"><img src="http://www.autoccasions.ch/img/carrosserie/Coupe.svg" alt=""></div>
                  <div class="popular_category_text">Coupé</div>
                </div>
              </div>

              <!-- Popular Categories Item -->
              <div class="owl-item">
                <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                  <div class="popular_category_image"><img src="http://www.autoccasions.ch/img/carrosserie/Cabriolet.svg" alt=""></div>
                  <div class="popular_category_text">Cabriolet</div>
                </div>
              </div>

              <!-- Popular Categories Item -->
              <div class="owl-item">
                <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                  <div class="popular_category_image"><img src="http://www.autoccasions.ch/img/carrosserie/SUV.svg" alt=""></div>
                  <div class="popular_category_text">SUV</div>
                </div>
              </div>

              <!-- Popular Categories Item -->
              <div class="owl-item">
                <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                  <div class="popular_category_image"><img src="http://www.autoccasions.ch/img/carrosserie/Berline.svg" alt=""></div>
                  <div class="popular_category_text">Berline</div>
                </div>
              </div>

              <!-- Popular Categories Item -->
              <div class="owl-item">
                <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                  <div class="popular_category_image"><img src="http://www.autoccasions.ch/img/carrosserie/Break.svg" alt=""></div>
                  <div class="popular_category_text">Break</div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>




  <!-- Trends -->

  <div class="trends">
    <div class="trends_background" style="background-image:url(assets/images/trends_background.jpg)"></div>
    <div class="trends_overlay"></div>
    <div class="container">
      <div class="row">

        <!-- Trends Content -->
        <div class="col-lg-3">
          <div class="trends_container">
            <h2 class="trends_title">Les plus louées</h2>
            <div class="trends_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing Donec et.</p></div>
            <div class="trends_slider_nav">
              <div class="trends_prev trends_nav"><i class="fas fa-angle-left ml-auto"></i></div>
              <div class="trends_next trends_nav"><i class="fas fa-angle-right ml-auto"></i></div>
            </div>
          </div>
        </div>

        <!-- Trends Slider -->
        <div class="col-lg-9">
          <div class="trends_slider_container">

            <!-- Trends Slider -->

            <div class="owl-carousel owl-theme trends_slider">

              <!-- Trends Slider Item -->
              <div class="owl-item">
                <div class="trends_item is_new">
                  <div class="trends_image d-flex flex-column align-items-center justify-content-center"><img src="assets/images/aston.jpg" alt=""></div>
                  <div class="trends_content">
                    <div class="trends_category"><a href="#">Berline</a></div>
                    <div class="trends_info clearfix">
                      <div class="trends_name"><a href="product.php">Aston Martin</a></div>
                      <div class="trends_price">15000000</div>
                    </div>
                  </div>
                  <ul class="trends_marks">
                    <li class="trends_mark trends_discount">-25%</li>
                    <li class="trends_mark trends_new">nouveau</li>
                  </ul>
                  <div class="trends_fav"><i class="fas fa-heart"></i></div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- Reviews -->

  

  <div class="viewed">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="viewed_title_container">
            <h3 class="viewed_title">Top 6 de nos voitures les moins chers</h3>
            <div class="viewed_nav_container">
              <div class="viewed_nav viewed_prev"><i class="fas fa-chevron-left"></i></div>
              <div class="viewed_nav viewed_next"><i class="fas fa-chevron-right"></i></div>
            </div>
          </div>

          <div class="viewed_slider_container">
            
            <!-- Recently Viewed Slider -->

            <div class="owl-carousel owl-theme viewed_slider">
              
              <!-- Recently Viewed Item -->
              <div class="owl-item">
                <div class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                  <div class="viewed_image"><img src="assets/images/acc2.jpg" alt=""></div>
                  <div class="viewed_content text-center">
                    <div class="viewed_price">3250000<span>2000000</span></div>
                    <div class="viewed_name"><a href="car-shower.php">Nom</a></div>
                  </div>
                  <ul class="item_marks">
                    <li class="item_mark item_discount">-25%</li>
                    <li class="item_mark item_new">new</li>
                  </ul>
                </div>
              </div>

              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Brands -->

  <div class="brands">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="brands_slider_container">
            
            <!-- Brands Slider -->

            <div class="owl-carousel owl-theme brands_slider">
              
              <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="assets/images/marques/kia.png" alt=""></div></div>
              <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="assets/images/marques/audi.jpg" alt=""></div></div>
              <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="assets/images/marques/citroen.png" alt=""></div></div>
              <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="assets/images/marques/bentley.jpg" alt=""></div></div>
              <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="assets/images/marques/ford.png" alt=""></div></div>
              <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="assets/images/marques/peugeot.jpg" alt=""></div></div>
              <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="assets/images/marques/renault.png" alt=""></div></div>
              <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="assets/images/marques/vw.jpg" alt=""></div></div>
              <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="assets/images/marques/ferrari.png" alt=""></div></div>
              <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="assets/images/marques/chevrolet.jpg" alt=""></div></div>

            </div>
            
            <!-- Brands Slider Navigation -->
            <div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
            <div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>

          </div>
        </div>
      </div>
    </div>
  </div>


  
<?php include 'includes/footer-client.php'; ?>
