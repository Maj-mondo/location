<?php include 'includes/header-admin.php'; ?>


        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Table des personnels</h3>
              </div>

              
            </div>

            <div class="clearfix"></div>

            <div class="row">
              

              
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>La liste de toutes les employés avec leurs agences respectifs</h2>
                  
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Nom</th>
                          <th>Prénom(s)</th>
                          <th>Date de naiss</th>
                          <th>Adresse</th>
                          <th>Ville</th>
                          <th>Téléphone</th>
                          <th>Login</th>
                          <th>Mot de passe</th>
                          <th>Agences</th>
                          <th>Genre</th>
                          <th>Permis</th>
                          <th>CNI</th>
                          <th>Opérations</th>
                          <th>Action</th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td>
                            <a href="profile.php" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> </a>
                            <a href="admin.modify-client.php" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> </a>
                            <a href="delete.php" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
             
             

              
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <?php require 'includes/footer-admin.php'; ?>
