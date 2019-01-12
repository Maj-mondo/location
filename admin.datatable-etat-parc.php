<?php include 'includes/header-admin.php'; ?>


        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Etat du parc</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="">
                  <div class="clearfix"></div>

            <div class="row">
              

              
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>L'ensemble des voitures</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                     Ici se trouvent l'ensemble des voitures avec leur états : disponible, en panne, réservé, en location ou en retard.
                    </p>
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Marque</th>
                          <th>Modèle</th>
                          <th>Photo</th>
                          <th>Immatriculation</th>
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
                          <td>
                            <a href="profile.php" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> </a>
                            <a href="modify-agent.php" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> </a>
                            <a href="delete.php" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-bars"></i> Les voitures disponiles <small>Float left</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                     <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Marque</th>
                          <th>Modèle</th>
                          <th>Photo</th>
                          <th>Immatriculation</th>
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
                          <td>
                            <a href="profile.php" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> </a>
                            <a href="modify-agent.php" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> </a>
                            <a href="delete.php" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>


              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-bars"></i> Les voitures en pannes </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Marque</th>
                          <th>Modèle</th>
                          <th>Photo</th>
                          <th>Immatriculation</th>
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
                          <td>
                            <a href="profile.php" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> </a>
                            <a href="modify-agent.php" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> </a>
                            <a href="delete.php" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>

              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-bars"></i> Les voitures réservées</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                     <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Marque</th>
                          <th>Modèle</th>
                          <th>Photo</th>
                          <th>Immatriculation</th>
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
                          <td>
                            <a href="profile.php" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> </a>
                            <a href="modify-agent.php" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> </a>
                            <a href="delete.php" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                      </tbody>
                    </table>


                    <div class="clearfix"></div>

                  </div>
                </div>
              </div>

              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-bars"></i>Les voitures en location</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Marque</th>
                          <th>Modèle</th>
                          <th>Photo</th>
                          <th>Immatriculation</th>
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
                          <td>
                            <a href="profile.php" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> </a>
                            <a href="modify-agent.php" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> </a>
                            <a href="delete.php" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-bars"></i>Les voitures en retard</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Marque</th>
                          <th>Modèle</th>
                          <th>Photo</th>
                          <th>Immatriculation</th>
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
                          <td>
                            <a href="profile.php" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> </a>
                            <a href="modify-agent.php" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> </a>
                            <a href="delete.php" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>



            </div>
            <div class="clearfix"></div>

            <div class="">

            
            </div>

    

         
          </div>
          <div class="clearfix"></div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <?php require 'includes/footer-admin.php'; ?>
