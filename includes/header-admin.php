<?php require_once 'db/conn.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	  <link rel="icon" href="assets/images/favicon.ico" type="image/ico" />

    <title>Admin | Car-Car</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">

    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false">
    </script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/
    jquery.min.js"></script>
  </head>

  <body class="nav-md">
      <div class="container body">
        <div class="main_container">
          <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
              <!-- menu profile quick info -->
              <div class="profile clearfix">
                <div class="profile_pic">
                  <img src="assets/images/img.png" alt="..." class="img-circle profile_img">
                </div>
                <div class="profile_info">
                  <span>Bienvenue,</span>
                  <h2>Maj</h2>
                </div>
              </div>
              <!-- /menu profile quick info -->

              <br/>

              <!-- sidebar menu -->
              <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <div class="menu_section">
                  <h3>General</h3>
                  <ul class="nav side-menu">
                    <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="index-admin.php">Dashboard</a></li>
                      </ul>
                    </li>
                    <li><a><i class="fa fa-sitemap"></i> Agences <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="admin.add-agence.php"> Ajouter agence</a></li>
                        <li><a href="admin.datatable-agences.php">Liste des Agences</a></li>
                        <li><a href="admin.personnels-agences.php">Personnels des agences</a></li>
                        <li><a href="admin.modify-agence.php">Modifier agence</a></li>
                      </ul>
                    </li>
                    <li><a><i class="fa fa-desktop"></i> Clients <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="admin.datatable-clients.php">Liste des clients</a></li>
                        <li><a href="admin.add-client.php">Ajouter un client</a></li>
                        <li><a href="admin.modify-client.php">Modifier un client</a></li>
                      </ul>
                    </li>
                    <li><a><i class="fa fa-car"></i> Véhicules <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="admin.add-car.php">Ajouter un véhicule</a></li>
                        <li><a href="admin.datatable-cars.php">Liste des vehicules</a></li>
                        <li><a href="admin.gallery-cars.php">Galerie de vehicules</a></li>
                        <li><a href="admin.datatable-etat-parc.php">Etat du parc</a></li>
                      </ul>
                    </li>
                    <li><a><i class="fa fa-briefcase"></i> Personnels <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="admin.datatable-agents.php">Liste des agents</a></li>
                        <li><a href="admin.add-agent.php">Ajouter un agent</a></li>
                        <li><a href="admin.modify-agent.php">Modifier agent</a></li>
                      </ul>
                    </li>
                    <li><a><i class="fa fa-bar-chart-o"></i> Transactions <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a>Réservations<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li><a href="admin.reservation-requests.php">Demandes de reservation</a></li>
                            <li class="sub_menu"><a href="admin.add-reservation.php">Ajouter une réservation</a>
                            </li>
                            <li><a href="admin.datatable-reservations.php">Liste des réservations</a>
                            </li>
                          </ul>
                        </li>
                        <li><a>Locations<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="admin.add-location.php">Ajouter une location</a>
                            </li>
                            <li><a href="admin.datatable-locations.php">Liste des locations</a>
                            </li>
                          </ul>
                        </li>                      
                        <li><a href="admin.datatable-achats.php">Achats</a></li>
                        <li><a href="admin.datatable-ventes.php">Ventes</a></li>
                      </ul>
                    </li>
                    <li>
                      <a><i class="fa fa-clone"></i>Contrats<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="admin.datatable-contrats.php">Voir les contrats</a></li>
                          <li><a href="admin.modify-contrats.php">Modifier contrats</a></li>
                      </ul>                  
                    </li>
                    <li><a><i class="fa fa-edit"></i>Factures et Paiements <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="admin.datatable-factures.php">Factures</a></li>
                        <li><a href="admin.datatable-paiements.php">Paiements</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
                <div class="menu_section">
                  <h3>Live On</h3>
                  <ul class="nav side-menu">
                    <li><a><i class="fa fa-bug"></i> Maintenance <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="admin.datatable-garages.php">Garage</a></li>
                        <li><a href="admin.datatable-mecaniciens.php">Mecaniciens</a></li>
                      </ul>
                    </li>
                    <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="page_404.php">404 Error</a></li>
                      </ul>
                    </li>                 
                    <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
                  </ul>
                </div>

              </div>
              <!-- /sidebar menu -->

              <!-- /menu footer buttons -->
              <div class="sidebar-footer hidden-small">
                <a data-toggle="tooltip" data-placement="top" title="Settings">
                  <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                </a>
                <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                  <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                </a>
                <a data-toggle="tooltip" data-placement="top" title="Lock">
                  <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                </a>
                <a data-toggle="tooltip" data-placement="top" title="Logout" href="log-agent.php">
                  <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                </a>
              </div>
              <!-- /menu footer buttons -->
            </div>
          </div>

          <!-- top navigation -->
          <div class="top_nav">
            <div class="nav_menu">
              <nav>
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>

                <ul class="nav navbar-nav navbar-right">
                  <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                      <img src="assets/images/img.png" alt="">Maj Fall
                      <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                      <li><a href="log-agent.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                    </ul>
                  </li>
                  <li role="presentation" class="dropdown">
                    <a href="admin.inbox.php" class="dropdown-toggle info-number">
                      <i class="fa fa-envelope-o"></i>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
          <!-- /top navigation -->

          