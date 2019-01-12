<?php include 'includes/header-admin.php';?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Ajouter un client</h3>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Ajout d'un nouveau client</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">


                    <div id="wizard" class="form_wizard wizard_horizontal">
                      <ul class="wizard_steps">
                        <li>
                          <a href="#step-1">
                            <span class="step_no">1</span>
                            <span class="step_descr">
                                              Etape 1<br />
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-2">
                            <span class="step_no">2</span>
                            <span class="step_descr">
                                              Etape 2<br />
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-3">
                            <span class="step_no">3</span>
                            <span class="step_descr">
                                              Etape 3<br />
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-4">
                            <span class="step_no">3</span>
                            <span class="step_descr">
                                              Etape 4<br />
                                          </span>
                          </a>
                        </li>
                      </ul>
                <form class="form-horizontal form-label-left">
                      <div id="step-1">
                          <div class="form-group">
                            <h2 class="StepTitle">1ère étapte</h2>
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Prénom(s)<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="first_name" name="first_name" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nom <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="last_name" name="last_name" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Genre</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div id="gender" class="btn-group" data-toggle="buttons">
                                <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                  <input type="radio" name="gender" value="male"> &nbsp; Homme &nbsp;
                                </label>
                                <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                  <input type="radio" name="gender" value="female"> Femme
                                </label>
                              </div>
                            </div>
                          </div><br>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Année de naissance <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="birthdate" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text" name="birthdate">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Adresse</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="address" class="form-control col-md-7 col-xs-12" type="text" name="address">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Ville</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="city" class="form-control col-md-7 col-xs-12" type="text" name="city">
                            </div>
                          </div>
                      </div>
                      <div id="step-2">
                        <h2 class="StepTitle">2e étape</h2>
                        <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Numéro CNI</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="cni" class="form-control col-md-7 col-xs-12" type="text" name="cni">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Numéro de téléphone</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="phone_number" class="form-control col-md-7 col-xs-12" type="text" name="phone_number">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Numéro de permis</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="license_number" class="form-control col-md-7 col-xs-12" type="text" name="license_number">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Rôle</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="role" class="form-control col-md-7 col-xs-12" type="text" name="role">
                            </div>
                          </div>
                          
                      </div>
                      <div id="step-3">
                        <h2 class="StepTitle">3e étapte</h2>
                         <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="role" class="form-control col-md-7 col-xs-12" type="text" name="role">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Mot de passe</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="role" class="form-control col-md-7 col-xs-12" type="text" name="role">
                            </div>
                          </div>
                        </div>
                        <div id="step-4">
                        <h2 class="StepTitle">4e étapte</h2>
                         <h3>Utilisateur créé</h3>
                        </div>
                      
                        </form>

                    </div>
                    <!-- End SmartWizard Content -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <?php include 'includes/footer-admin.php'; ?>