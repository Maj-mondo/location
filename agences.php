<?php
  require_once("conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Client | Car-Car</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Favicon -->
<link rel="shortcut icon" type="image/icon" href="assets/images/favicon.ico"/>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap4/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
<link href="assets/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="assets/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="assets/plugins/slick-1.8.0/slick.css">
<link rel="stylesheet" type="text/css" href="assets/css/main_styles.css">
<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
<link rel="stylesheet" type="text/css" href="assets/css/v3-homepage.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<style>
   .custom-select{
    height: 29px;
    width: 200px;
    color: #acaaaa;
    font-size: 100%;
   }


</style>
<body>

<div class="super_container">
  
  <!-- Header -->
  
  <header class="header">

    <!-- Top Bar -->

    <div class="top_bar">
      <div class="container">
        <div class="row">
          <div class="col d-flex flex-row">
            <div class="top_bar_contact_item"><div class="top_bar_icon"><img src="assets/images/user.svg" alt="" style="width: 13px;height: 13px"></div>User</div>
            <div class="top_bar_contact_item"><div class="top_bar_icon"><img src="assets/images/mail.png" alt=""></div><a href="mailto:fastsales@gmail.com">email</a></div>
            <div class="top_bar_content ml-auto">
              <div class="top_bar_user">
                <div class="user_icon"><img src="assets/images/user.svg" alt=""></div>
                <div><a href="#">Paramètres du compte</a></div>
                <div><a href="#">Deconnexion</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>    
    </div>

    <!-- Header Main -->

    <div class="header_main">
      <div class="container">
        <div class="row">

          <!-- Logo -->
          <div class="col-lg-2 col-sm-3 col-3 order-1">
            <div class="logo_container">
              <div class="logo"><a href="#">Car-Car</a></div>
            </div>
          </div>

          <!-- Search -->
          <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
            <div class="header_search">
              <div class="header_search_content">
                <div class="header_search_form_container">
                  <form action="#" class="header_search_form clearfix">
                    <input type="search" required="required" class="header_search_input" placeholder="Chercher une voiture...">
                    <div class="custom_dropdown">
                      <div class="custom_dropdown_list">
                        <span class="custom_dropdown_placeholder clc">Tous les types</span>
                        <i class="fas fa-chevron-down"></i>
                        <ul class="custom_list clc">
                          <li><a class="clc" href="#">Tous les types</a></li>
                          <li><a class="clc" href="#">Berline</a></li>
                          <li><a class="clc" href="#">Coupé</a></li>
                          <li><a class="clc" href="#">Fourgon</a></li>
                          <li><a class="clc" href="#">SUV</a></li>
                          <li><a class="clc" href="#">Cabriolet</a></li>
                        </ul>
                      </div>
                    </div>
                    <button type="submit" class="header_search_button trans_300" value="Submit"><img src="assets/images/search.png" alt=""></button>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <!-- Wishlist -->
          <div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
            <div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
              <div class="wishlist d-flex flex-row align-items-center justify-content-end">
                <div class="wishlist_icon"><img src="assets/images/heart.png" alt=""></div>
                <div class="wishlist_content">
                  <div class="wishlist_text"><a href="#">Promos</a></div>
                  <div class="wishlist_count">25%</div>
                </div>
              </div>

              <!-- Cart -->
              <div class="cart">
                <div class="cart_container d-flex flex-row align-items-center justify-content-end">
                  <div class="cart_icon">
                    <img src="assets/images/cart.png" alt="">
                    <div class="cart_count"><span>10</span></div>
                  </div>
                  <div class="cart_content">
                    <div class="cart_text"><a href="#">Cart</a></div>
                    <div class="cart_price">$85</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Main Navigation -->

    <nav class="main_nav">
      <div class="container">
        <div class="row">
          <div class="col">
            
            <div class="main_nav_content d-flex flex-row">

              <!-- Categories Menu -->

              <div class="cat_menu_container">
                <div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
                  <div class="cat_burger"><span></span><span></span><span></span></div>
                  <div class="cat_menu_text">categories</div>
                </div>

                <ul class="cat_menu">

                  <li><a href="#">Cameras & Photos<i class="fas fa-chevron-right"></i></a></li>
                  <li class="hassubs">
                    <a href="#">Hardware<i class="fas fa-chevron-right"></i></a>
                    <ul>
                      <li class="hassubs">
                        <a href="#">Menu Item<i class="fas fa-chevron-right"></i></a>
                        <ul>
                          <li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
                          <li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
                          <li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
                          <li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
                        </ul>
                      </li>
                      <li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
                      <li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
                      <li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
                    </ul>
                  </li>
                  <li><a href="#">Smartphones & Tablets<i class="fas fa-chevron-right"></i></a></li>
                  <li><a href="#">TV & Audio<i class="fas fa-chevron-right"></i></a></li>
                  <li><a href="#">Gadgets<i class="fas fa-chevron-right"></i></a></li>
                  <li><a href="#">Car Electronics<i class="fas fa-chevron-right"></i></a></li>
                  <li><a href="#">Video Games & Consoles<i class="fas fa-chevron-right"></i></a></li>
                  <li><a href="#">Accessories<i class="fas fa-chevron-right"></i></a></li>
                </ul>
              </div>

              <!-- Main Nav Menu -->

              <div class="main_nav_menu ml-auto">
                <ul class="standard_dropdown main_nav_dropdown">
                  <li><a href="Client.php">Home<i class="fas fa-chevron-down"></i></a></li>
                    <li class="hassubs">
                    <a href="#">Mes transactions<i class="fas fa-chevron-down"></i></a>
                    <ul>
                      <li>
                        <a href="Location.php">Locations<i class="fas fa-chevron-down"></i></a>
                      </li>
                      <li><a href="reservations.php">Réservations<i class="fas fa-chevron-down"></i></a></li>
                      <li><a href="achat.php">Acheter un vehicule<i class="fas fa-chevron-down"></i></a></li>
                      <li><a href="vente.php">Vendre un vehicule<i class="fas fa-chevron-down"></i></a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="vehicules.php">Véhicules<i class="fas fa-chevron-down"></i></a>  </li>
                  <li>
                    <a href="tarifs.php">Tarifs<i class="fas fa-chevron-down"></i></a>
                  </li>
                 <li>
                    <a href="agences.php">Agences<i class="fas fa-chevron-down"></i></a>
                  </li>
                  <li>
                    <a href="shop.php">Shop<i class="fas fa-chevron-down"></i></a>
                  </li>
                  <li><a href="blog-cli.php">Blog<i class="fas fa-chevron-down"></i></a></li>
                  <li><a href="contact.php">Contact<i class="fas fa-chevron-down"></i></a></li>
                </ul>
              </div>

              <!-- Menu Trigger -->

              <div class="menu_trigger_container ml-auto">
                <div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
                  <div class="menu_burger">
                    <div class="menu_trigger_text">menu</div>
                    <div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </nav>
    
    <!-- Menu -->


  </header>
  
  <!-- Banner -->

  <div class="banner">
    <div class="banner_background" style="background-image:url(assets/images/banner_background.jpg)"></div>
    <div class="container fill_height">
      <div class="row fill_height">
        <div class="banner_product_image"><img src="assets/images/dd.png" style="width: 700px"></div>
        <div class="col-lg-5 offset-lg-4 fill_height">
          <div class="banner_content">
            <h1 class="banner_text">Notre nouvelle arrivage</h1>
            <div class="banner_price"><span>4.5M</span>2M</div>
            <div class="banner_product_name">La nouvelle décapotable</div>
            <div class="button banner_button"><a href="achat.jpg">Acheter</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>


   
  <!-- Deals of the week -->

  <div class="deals_featured">
    <div class="container">
      <div class="row">
        <div class="col d-flex flex-lg-row flex-column align-items-center justify-content-start">
          
          <!-- Deals -->

          <div class="deals">
            <div class="deals_title">Nos agences</div>
            <div class="deals_slider_container">
              
              <!-- Deals Slider -->
              <div class="owl-carousel owl-theme deals_slider">
                
                <!-- Deals Item -->
                <div class="owl-item deals_item">
                  <div class="deals_image"><img src="assets/images/marker.png" alt=""></div>
                  <div class="deals_content">
                    <div class="deals_info_line d-flex flex-row justify-content-start">
                      <div class="deals_item_category"><a href="#">Headphones</a></div>
                      <div class="deals_item_price_a ml-auto">$300</div>
                    </div>
                    <div class="deals_info_line d-flex flex-row justify-content-start">
                      <div class="deals_item_name">Beoplay H7</div>
                      <div class="deals_item_price ml-auto">$225</div>
                    </div>
                    <div class="available">
                      <div class="available_line d-flex flex-row justify-content-start">
                        <div class="available_title">Available: <span>6</span></div>
                        <div class="sold_title ml-auto">Already sold: <span>28</span></div>
                      </div>
                      <div class="available_bar"><span style="width:17%"></span></div>
                    </div>
                    <div class="deals_timer d-flex flex-row align-items-center justify-content-start">
                      <div class="deals_timer_title_container">
                        <div class="deals_timer_title">Hurry Up</div>
                        <div class="deals_timer_subtitle">Offer ends in:</div>
                      </div>
                      <div class="deals_timer_content ml-auto">
                        <div class="deals_timer_box clearfix" data-target-time="">
                          <div class="deals_timer_unit">
                            <div id="deals_timer1_hr" class="deals_timer_hr"></div>
                            <span>hours</span>
                          </div>
                          <div class="deals_timer_unit">
                            <div id="deals_timer1_min" class="deals_timer_min"></div>
                            <span>mins</span>
                          </div>
                          <div class="deals_timer_unit">
                            <div id="deals_timer1_sec" class="deals_timer_sec"></div>
                            <span>secs</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Deals Item -->
                <div class="owl-item deals_item">
                  <div class="deals_image"><img src="assets/images/deals.png" alt=""></div>
                  <div class="deals_content">
                    <div class="deals_info_line d-flex flex-row justify-content-start">
                      <div class="deals_item_category"><a href="#">Headphones</a></div>
                      <div class="deals_item_price_a ml-auto">$300</div>
                    </div>
                    <div class="deals_info_line d-flex flex-row justify-content-start">
                      <div class="deals_item_name">Beoplay H7</div>
                      <div class="deals_item_price ml-auto">$225</div>
                    </div>
                    <div class="available">
                      <div class="available_line d-flex flex-row justify-content-start">
                        <div class="available_title">Available: <span>6</span></div>
                        <div class="sold_title ml-auto">Already sold: <span>28</span></div>
                      </div>
                      <div class="available_bar"><span style="width:17%"></span></div>
                    </div>
                    <div class="deals_timer d-flex flex-row align-items-center justify-content-start">
                      <div class="deals_timer_title_container">
                        <div class="deals_timer_title">Hurry Up</div>
                        <div class="deals_timer_subtitle">Offer ends in:</div>
                      </div>
                      <div class="deals_timer_content ml-auto">
                        <div class="deals_timer_box clearfix" data-target-time="">
                          <div class="deals_timer_unit">
                            <div id="deals_timer2_hr" class="deals_timer_hr"></div>
                            <span>hours</span>
                          </div>
                          <div class="deals_timer_unit">
                            <div id="deals_timer2_min" class="deals_timer_min"></div>
                            <span>mins</span>
                          </div>
                          <div class="deals_timer_unit">
                            <div id="deals_timer2_sec" class="deals_timer_sec"></div>
                            <span>secs</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Deals Item -->
                <div class="owl-item deals_item">
                  <div class="deals_image"><img src="assets/images/deals.png" alt=""></div>
                  <div class="deals_content">
                    <div class="deals_info_line d-flex flex-row justify-content-start">
                      <div class="deals_item_category"><a href="#">Headphones</a></div>
                      <div class="deals_item_price_a ml-auto">$300</div>
                    </div>
                    <div class="deals_info_line d-flex flex-row justify-content-start">
                      <div class="deals_item_name">Beoplay H7</div>
                      <div class="deals_item_price ml-auto">$225</div>
                    </div>
                    <div class="available">
                      <div class="available_line d-flex flex-row justify-content-start">
                        <div class="available_title">Available: <span>6</span></div>
                        <div class="sold_title ml-auto">Already sold: <span>28</span></div>
                      </div>
                      <div class="available_bar"><span style="width:17%"></span></div>
                    </div>
                    <div class="deals_timer d-flex flex-row align-items-center justify-content-start">
                      <div class="deals_timer_title_container">
                        <div class="deals_timer_title">Hurry Up</div>
                        <div class="deals_timer_subtitle">Offer ends in:</div>
                      </div>
                      <div class="deals_timer_content ml-auto">
                        <div class="deals_timer_box clearfix" data-target-time="">
                          <div class="deals_timer_unit">
                            <div id="deals_timer3_hr" class="deals_timer_hr"></div>
                            <span>hours</span>
                          </div>
                          <div class="deals_timer_unit">
                            <div id="deals_timer3_min" class="deals_timer_min"></div>
                            <span>mins</span>
                          </div>
                          <div class="deals_timer_unit">
                            <div id="deals_timer3_sec" class="deals_timer_sec"></div>
                            <span>secs</span>
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
                  <li class="active">Informations générales</li>
                  <li>Horaires</li>
                  <li>Géolocalisation</li>
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
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="assets/images/featured_1.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price discount">$225<span>$300</span></div>
                        <div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount">-25%</li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="assets/images/featured_2.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name"><div><a href="product.php">Apple iPod shuffle</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button active">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="assets/images/featured_3.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name"><div><a href="product.php">Sony MDRZX310W</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="assets/images/featured_4.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price discount">$225<span>$300</span></div>
                        <div class="product_name"><div><a href="product.php">LUNA Smartphone</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount">-25%</li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="assets/images/featured_5.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name"><div><a href="product.php">Canon STM Kit...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="assets/images/featured_6.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name"><div><a href="product.php">Samsung J330F...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="assets/images/featured_7.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name"><div><a href="product.php">Lenovo IdeaPad</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount">-25%</li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="assets/images/featured_8.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name"><div><a href="product.php">Digitus EDNET...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="assets/images/featured_1.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="assets/images/featured_2.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="assets/images/featured_3.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="assets/images/featured_4.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="assets/images/featured_5.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="assets/images/featured_6.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="assets/images/featured_7.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="assets/images/featured_8.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
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
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="assets/images/featured_1.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price discount">$225<span>$300</span></div>
                        <div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount">-25%</li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="assets/images/featured_2.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name"><div><a href="product.php">Apple iPod shuffle</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button active">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="assets/images/featured_3.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name"><div><a href="product.php">Sony MDRZX310W</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="assets/images/featured_4.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price discount">$225<span>$300</span></div>
                        <div class="product_name"><div><a href="product.php">LUNA Smartphone</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount">-25%</li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="assets/images/featured_5.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name"><div><a href="product.php">Canon STM Kit...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="assets/images/featured_6.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name"><div><a href="product.php">Samsung J330F...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="assets/images/featured_7.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name"><div><a href="product.php">Lenovo IdeaPad</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount">-25%</li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="assets/images/featured_8.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name"><div><a href="product.php">Digitus EDNET...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="assets/images/featured_1.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="assets/images/featured_2.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="assets/images/featured_3.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="assets/images/featured_4.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="assets/images/featured_5.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="assets/images/featured_6.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="assets/images/featured_7.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="assets/images/featured_8.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
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
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="assets/images/featured_1.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price discount">$225<span>$300</span></div>
                        <div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount">-25%</li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="assets/images/featured_2.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name"><div><a href="product.php">Apple iPod shuffle</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button active">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="assets/images/featured_3.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name"><div><a href="product.php">Sony MDRZX310W</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="assets/images/featured_4.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price discount">$225<span>$300</span></div>
                        <div class="product_name"><div><a href="product.php">LUNA Smartphone</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount">-25%</li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="assets/images/featured_5.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name"><div><a href="product.php">Canon STM Kit...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="assets/images/featured_6.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name"><div><a href="product.php">Samsung J330F...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="assets/images/featured_7.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name"><div><a href="product.php">Lenovo IdeaPad</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount">-25%</li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="assets/images/featured_8.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name"><div><a href="product.php">Digitus EDNET...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="assets/images/featured_1.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="assets/images/featured_2.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="assets/images/featured_3.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="assets/images/featured_4.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="assets/images/featured_5.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="assets/images/featured_6.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="assets/images/featured_7.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="featured_slider_item">
                    <div class="border_active"></div>
                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                      <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="assets/images/featured_8.png" alt=""></div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name"><div><a href="product.php">Huawei MediaPad...</a></div></div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input type="radio" checked name="product_color" style="background:#b19c83">
                            <input type="radio" name="product_color" style="background:#000000">
                            <input type="radio" name="product_color" style="background:#999999">
                          </div>
                          <button class="product_cart_button">Add to Cart</button>
                        </div>
                      </div>
                      <div class="product_fav"><i class="fas fa-heart"></i></div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
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




  <!-- Brands -->

  <div class="brands">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="brands_slider_container">
            
            <!-- Brands Slider -->

            <div class="owl-carousel owl-theme brands_slider">
              
              <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="assets/images/brands_1.jpg" alt=""></div></div>
              <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="assets/images/brands_2.jpg" alt=""></div></div>
              <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="assets/images/brands_3.jpg" alt=""></div></div>
              <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="assets/images/brands_4.jpg" alt=""></div></div>
              <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="assets/images/brands_5.jpg" alt=""></div></div>
              <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="assets/images/brands_6.jpg" alt=""></div></div>
              <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="assets/images/brands_7.jpg" alt=""></div></div>
              <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="assets/images/brands_8.jpg" alt=""></div></div>

            </div>
            
            <!-- Brands Slider Navigation -->
            <div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
            <div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>

          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Footer -->

  <footer class="footer">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 footer_col">
          <div class="footer_column footer_contact">
            <div class="logo_container">
              <div class="logo"><a href="#">OneTech</a></div>
            </div>
            <div class="footer_title">Got Question? Call Us 24/7</div>
            <div class="footer_phone">+38 068 005 3570</div>
            <div class="footer_contact_text">
              <p>17 Princess Road, London</p>
              <p>Grester London NW18JR, UK</p>
            </div>
            <div class="footer_social">
              <ul>
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                <li><a href="#"><i class="fab fa-google"></i></a></li>
                <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-lg-2 offset-lg-2">
          <div class="footer_column">
            <div class="footer_title">Find it Fast</div>
            <ul class="footer_list">
              <li><a href="#">Computers & Laptops</a></li>
              <li><a href="#">Cameras & Photos</a></li>
              <li><a href="#">Hardware</a></li>
              <li><a href="#">Smartphones & Tablets</a></li>
              <li><a href="#">TV & Audio</a></li>
            </ul>
            <div class="footer_subtitle">Gadgets</div>
            <ul class="footer_list">
              <li><a href="#">Car Electronics</a></li>
            </ul>
          </div>
        </div>

        <div class="col-lg-2">
          <div class="footer_column">
            <ul class="footer_list footer_list_2">
              <li><a href="#">Video Games & Consoles</a></li>
              <li><a href="#">Accessories</a></li>
              <li><a href="#">Cameras & Photos</a></li>
              <li><a href="#">Hardware</a></li>
              <li><a href="#">Computers & Laptops</a></li>
            </ul>
          </div>
        </div>

        <div class="col-lg-2">
          <div class="footer_column">
            <div class="footer_title">Customer Care</div>
            <ul class="footer_list">
              <li><a href="#">My Account</a></li>
              <li><a href="#">Order Tracking</a></li>
              <li><a href="#">Wish List</a></li>
              <li><a href="#">Customer Services</a></li>
              <li><a href="#">Returns / Exchange</a></li>
              <li><a href="#">FAQs</a></li>
              <li><a href="#">Product Support</a></li>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </footer>

  <!-- Copyright -->

  <div class="copyright">
    <div class="container">
      <div class="row">
        <div class="col">
          
          <div class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
            <div class="copyright_content"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</div>
            <div class="logos ml-sm-auto">
              <ul class="logos_list">
                <li><a href="#"><img src="assets/images/logos_1.png" alt=""></a></li>
                <li><a href="#"><img src="assets/images/logos_2.png" alt=""></a></li>
                <li><a href="#"><img src="assets/images/logos_3.png" alt=""></a></li>
                <li><a href="#"><img src="assets/images/logos_4.png" alt=""></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/js/custom-bis.js"></script>
<script src="assets/css/bootstrap4/popper.js"></script>
<script src="assets/css/bootstrap4/bootstrap.min.js"></script>
<script src="assets/plugins/greensock/TweenMax.min.js"></script>
<script src="assets/plugins/greensock/TimelineMax.min.js"></script>
<script src="assets/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="assets/plugins/greensock/animation.gsap.min.js"></script>
<script src="assets/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="assets/plugins/slick-1.8.0/slick.js"></script>
<script src="assets/plugins/easing/easing.js"></script>
<script src="assets/js/form.js"></script>
</body>

</html>