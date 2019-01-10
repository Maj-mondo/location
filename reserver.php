<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Acceuil | Car-Car</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="assets/images/favicon.ico"/>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>  
    <!-- Font Awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css"/> 
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Animate css -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css"/>  
    <link rel="stylesheet" type="text/css" href="assets/css/v3-homepage.css"/>  
    <link rel="stylesheet" type="text/css" href="assets/css/btn.css"/>  
    <link rel="stylesheet" type="text/css" href="assets/css/reservation-area.css"/>  
     <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/pink-theme.css" rel="stylesheet">
    
    <!-- <link href="preloader.css" rel="stylesheet"> -->
    <!-- Main Style -->
    <link href="style.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Fonts -->
    <!-- Open Sans for body font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- Raleway for Title -->
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <!-- Pacifico for 404 page   -->
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
.myLink {display: none}

  </style>
  <body background-color="#22313f">
    

  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header section -->  

    <section id="blog-banner">
    <img src="assets/images/blog-banner.jpg" alt="img">
    <div class="blog-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="blog-banner-area">
              <h2>Véhicules disponibles</h2>
              <ol class="breadcrumb">
                <li><a href="index.php">Home</a></li>                
                <li class="active">Reserve</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End header section -->

  <!-- Start menu section -->
  <section id="menu-area">
    <nav class="navbar navbar-default main-navbar" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->                                               
           <a class="navbar-brand logo" href="index.php"><img src="assets/images/logo.png" alt="logo"></a>                      
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav main-nav menu-scroll">
            <li class="active"><a href="index.php" class="less-padding">HOME</a></li>
            <li><a href="catalogue.php" class="less-padding">CATALOGUE</a></li> 
            <li><a href="#client" class="less-padding">PARTENAIRES</a></li>             
            <li><a href="blog.php" class="less-padding">BLOG</a></li>
            <li><a href="log-agent.php" class="less-padding">ESPACE AGENCE</a></li>          
            <li><a href="#contact" class="less-padding">CONTACT</a></li>         
          </ul>                            
        </div>
        <!--/.nav-collapse -->
       <div class="search-area">
          <form action="">
            <input id="search" name="search" type="text" placeholder="Je cherche ...">
            <input id="search_submit" value="Rechercher" type="submit">
          </form>
        </div>         
      </div>          
    </nav> 
  </section>
  <!-- End menu section --><br>
  <!-- Start about section -->
  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <!-- Start welcome area -->
          <div class="welcome-area">
            <div class="title-area">
              <h2 class="tittle">Nous avous trouvé<span> X </span>offres !</h2>
              <span class="tittle-line"></span>
              <p>Votre agence de location automobile en ligne.</p>
            </div>
            <br>
            <!-- Start reservation area -->
          </div>
          <br>
          <div class="welcome-content">
            <form class="w3-container" action="" method="post">
              <div class="w3-row w3-container">
                <h3>Reservez votre véhicule</h3>
                  <div class="w3-row" style="color: grey">
                    <div class="w3-col m2 w3-center">
                       <select class="w3-select w3-border" name="option">
                        <option value="">Type de véhicule</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                      </select>
                    </div>
                    <div class="w3-col m2 w3-center">
                       <select class="w3-select w3-border" name="option">
                        <option value="">Transmission</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                      </select>
                    </div>
                    <div class="w3-col m2 w3-center">
                       <select class="w3-select w3-border" name="option">
                          <option value="">Votre âge</option>
                          <option value="1">Option 1</option>
                          <option value="2">Option 2</option>
                          <option value="3">Option 3</option>
                        </select>
                    </div>
                    <div class="w3-col m2 w3-dark-grey w3-center" style="width: 70px;height: 40px">
                      <button class="w3-btn" style="width: 100px;height: 40px">
                        <i class="fa fa-arrow-right"></i>
                      </button>
                    </div>                
                  </div>
              </div>
          </form>
          </div>

          <div class="welcome-content">
            <div class="result-reserve" style="">
              <div class="w3-container">
                <div class="w3-row">
                  <div class="w3-col w3-container" style="width:40%">
                    <img src="assets/images/acc2.jpg">
                  </div>
                  <div class="w3-col w3-container" style="width:40%">
                    <h3>Caracteres</h3>
                  </div>
                  <div class="w3-col w3-container" style="width:20%">
                    <p><a href="login.php"><button class="w3-button w3-border" style="width: 100px">Acher</button></a></p><br>
                    <p><a href="login.php"><button class="w3-button w3-border" style="width: 100px">Reserver</button></a></p>
                  </div>
                </div>
              </div>
            </div>
            <hr>

          </div>

          </div>
          <!-- End welcome area -->
        </div>
      
    </div>
  </section> 
  <!-- End about section -->

 

  <!-- Start Footer -->    
<?php include 'includes/footer-site.php'; ?>
