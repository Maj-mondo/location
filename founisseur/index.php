<?php include '../includes/header-site.php'; ?>

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
<?php
echo "fournisseur index";
