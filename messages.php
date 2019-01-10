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
<link rel="stylesheet" type="text/css" href="assets/css/messages.css">
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

   #panel, #flip {
  padding: 5px;
  text-align: center;
  background-color: #e5eecc;
  border: solid 1px #c3c3c3;
  }

  #panel {
    padding: 50px;
    display: none;
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
            <div class="top_bar_contact_item"><div class="top_bar_icon"></div><a href="mailto:diattamfall@gmail.com">Envoyer un courriel</a></div>
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
                    <img src="assets/images/mail.png" style="width: 35px;height:31px" alt="">
                    <div class="cart_count"><span>2</span></div>
                  </div>
                  <div class="cart_content">
                    <div class="cart_text"><a href="#">Messages</a></div>
                    <div class="cart_price"></div>
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


 
<h2>Vertical Tabs</h2>
<p>Click on the buttons inside the tabbed menu:</p>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">London</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Paris</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</button>
</div>

<div id="London" class="tabcontent">
  <h3>London</h3>
  <p>London is the capital city of England.</p>
</div>

<div id="Paris" class="tabcontent">
  <h3>Paris</h3>
  <p>Paris is the capital of France.</p> 
</div>

<div id="Tokyo" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>

  <!-- Reviews -->

  <div class="reviews">
    <div class="container">
      <div class="row">
        <div class="col">
          
          <div class="reviews_title_container">
            <h3 class="reviews_title">Messages</h3>
          </div>

          
        </div>
      </div>
    </div>
  </div>

  <!-- Single Blog Post -->

  <div class="single_post">
    <div class="container">
      <div class="row">
        <div class="single_post_title">Vivamus sed nunc in arcu cursus mollis quis et orci. Interdum et malesuada</div>
        <div class="col-lg-12">
          
                      
          <div class="container">
            <h2>Table Head Colors</h2>
            <p>The .thead-dark class adds a black background to table headers, and the .thead-light class adds a grey background to table headers:</p>
            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th>Firstname</th>
                  <th>Lastname</th>
                  <th>Email</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>John</td>
                  <td>Doe</td>
                  <td>john@example.com</td>
                </tr>
                <tr>
                  <td>Mary</td>
                  <td>Moe</td>
                  <td>mary@example.com</td>
                </tr>
                <tr>
                  <td>July</td>
                  <td>Dooley</td>
                  <td>july@example.com</td>
                </tr>
              </tbody>
            </table>
           
            
          </div>

          <div class="single_post_quote text-center">
              <div class="quote_image"><img src="assets/images/quote.png" alt=""></div>
              <div class="quote_text">Quisque sagittis non ex eget vestibulum. Sed nec ultrices dui. Cras et sagittis erat. Maecenas pulvinar, turpis in dictum tincidunt, dolor nibh lacinia lacus.</div>
              <div class="quote_name">Liam Neeson</div>
            </div>

            <p>Praesent ac magna sed massa euismod congue vitae vitae risus. Nulla lorem augue, mollis non est et, eleifend elementum ante. Nunc id pharetra magna.  Praesent vel orci ornare, blandit mi sed, aliquet nisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
          
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
<script src="assets/js/messages.js"></script>
</body>

</html>