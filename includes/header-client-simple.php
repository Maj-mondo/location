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
<link rel="stylesheet" type="text/css" href="assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.css">

<link rel="stylesheet" type="text/css" href="assets/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="assets/plugins/slick-1.8.0/slick.css">
<link rel="stylesheet" type="text/css" href="assets/css/main_styles_simple.css">
<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
<link rel="stylesheet" type="text/css" href="assets/css/v3-homepage.css">
<link rel="stylesheet" type="text/css" href="assets/css/cart_styles.css">
<link rel="stylesheet" type="text/css" href="assets/css/cart_responsive.css">
<link rel="stylesheet" type="text/css" href="assets/css/shop_styles.css">
<link rel="stylesheet" type="text/css" href="assets/css/blog_styles.css">
<link rel="stylesheet" type="text/css" href="assets/css/blog_responsive.css">
<link rel="stylesheet" type="text/css" href="assets/css/shop_responsive.css">
<link rel="stylesheet" type="text/css" href="assets/css/contact_styles.css">
<link rel="stylesheet" type="text/css" href="assets/css/contact_responsive.css">

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
            <div class="top_bar_contact_item"><a href="Client.php"><i class="glyphicon glyphicon-user"></i> User</a></div>
            <div class="top_bar_contact_item"><a href="mailto:diattamfall@gmail.com"><i class="glyphicon glyphicon-envelope"></i> Envoyer un courriel</a></div>
            <div class="top_bar_content ml-auto">
              <div class="top_bar_user">
                <div class="user_icon"></div>
                
                <div><a href="index.php"><i class="glyphicon glyphicon-log-out"></i>Déconnexion</a></div>
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
            <div class="logo_container"  >
              <div class="wishlist_icon">
                <a href="Client.php"><img style="width: 100px;height: 100px;margin-left: 70px;margin-top: 34px" src="assets/images/logo.png"></a>
              </div>
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
                    <div class="cart_text"><a href="messages.php">Messages</a></div>
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
                  <li><a href="#">Hardware<i class="fas fa-chevron-right"></i></a></li>
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
                      <li><a href="achat.php">Acheter un vehicule<i class="fas fa-chevron-down"></i></a></li>
                      <li>
                        <a href="Location.php">Mes locations<i class="fas fa-chevron-down"></i></a>
                      </li>
                      <li><a href="reservation.php">Mes réservations<i class="fas fa-chevron-down"></i></a></li>
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

  
