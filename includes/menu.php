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
        <a class="navbar-brand logo" href="/"><img src="/assets/images/logo.png" alt="logo"></a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul id="top-menu" class="nav navbar-nav main-nav menu-scroll">
          <li><a href="/" class="less-padding">Accueil</a></li>
          <li><a href="/catalogue.php" class="less-padding">Catalogue</a></li>
          <li><a href="/fournisseur" class="less-padding">Founisseurs</a></li>
          <li><a href="/car-model" class="less-padding">Modèles</a></li>
          <li><a href="/car" class="less-padding">Véhicules</a></li>
          <li><a href="/client" class="less-padding">Clients</a></li>
          <li><a href="/agence" class="less-padding">Agences</a></li>
          <li><a href="/chauffeur" class="less-padding">Chauffeurs</a></li>
          <li><a href="/mecanicien" class="less-padding">Mecanicien</a></li>
          <li><a href="/transaction" class="less-padding">Transactions</a></li>
          <li><a href="/paiement" class="less-padding">Paiement</a></li>
          <li><a href="/facture" class="less-padding">facture</a></li>
<!--          <li><a href="/vehicules.php" class="less-padding">Véhicules</a></li>-->
          <!--  TODO: Only admin can see -->
<!--
          <li><a href="#client" class="less-padding">Clients</a></li>
          <li><a href="log-agent.php" class="less-padding">ESPACE AGENCE</a></li>
          <li><a href="#contact" class="less-padding">CONTACT</a></li>
          -->
        </ul>
      </div>
      <!--/.nav-collapse
      <div class="search-area">
        <form action="">
          <input id="search" name="search" type="text" placeholder="Je cherche ...">
          <input id="search_submit" value="Rechercher" type="submit">
        </form>
      </div>
      -->
    </div>
  </nav>
</section>


<div class="container">
  <div id="flash-container">
    <?php if (isset($_SESSION['flash'])): ?>
      <?php foreach ($_SESSION['flash'] as $type => $messages): ?>
        <?php foreach ($messages as $message): ?>
          <div class="alert alert-<?= $type ?>"><?= $message ?></div>
        <?php endforeach; ?>
      <?php endforeach; ?>
    <?php unset($_SESSION['flash']); ?>
    <?php endif; ?>
  </div>
</div>
