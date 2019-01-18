<?php include 'includes/header-site.php'; ?>

<header id="header">
  <div class="header-inner">
    <!-- Header image -->
    <img src="/assets/images/icy_aston.jpg" alt="img">
    <div class="header-overlay">
      <div class="header-content">
        <!-- Start header content slider -->
        <h2 class="header-slide">CAR-CAR
          <span>LOCATION</span>
          <span>DE VEHICULE</span>
          <span>A BAS PRIX</span>
          AU SENEGAL</h2>
        <!-- End header content slider -->
        <!-- Header btn area -->
        <div class="header-btn-area">
          <a class="knowmore-btn" href="/user/login.php">CONNEXION</a>
          <a class="download-btn" href="/user/register.php">INSCRIPTION</a>
        </div>
      </div>
    </div>
  </div>
</header>

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
        <a class="navbar-brand logo" href="index.php"><img src="/assets/images/logo.png" alt="logo"></a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul id="top-menu" class="nav navbar-nav main-nav menu-scroll">
          <li class="active"><a href="/" class="less-padding">ACCUEIL</a></li>
          <li><a href="/catalogue.php" class="less-padding">CATALOGUE</a></li>
          <li><a href="/founisseur/index.php" class="less-padding">Founisseurs</a></li>
          <li><a href="/vehicules.php" class="less-padding">Véhicules</a></li>
        <!--  TODO: Only admin can see -->
          <li><a href="#client" class="less-padding">Clients</a></li>
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
<br>

  <?php include 'includes/about.php'; ?>

  <section id="call-to-action">
    <img src="/assets/images/call-to-action-bg.png" alt="img">
    <div class="call-to-overlay">
      <div class="container">
        <div class="call-to-content wow fadeInUp">
          <h2>Nous mettons à votre disposition un <span color="#ff2851">Chauffeur</span>  professionel</h2>
        </div>
      </div>
    </div>
  </section>

  <?php include 'includes/teams.php'; ?>
  <?php include 'includes/services.php'; ?>
  <?php include 'includes/testimonials.php'; ?>
  <?php include 'includes/counter.php'; ?>
  <?php include 'includes/partners.php'; ?>
  <?php include 'includes/contact.php'; ?>
  <?php include 'includes/map.php'; ?>
 <br>
<?php include 'includes/footer-site.php'; ?>
