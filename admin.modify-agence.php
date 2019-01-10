<?php include 'includes/header-admin.php'; ?>



        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Modifier une agence</h3>
              </div>

            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Informations générales <small>de l'agence</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left input_mask">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nom de l'agence</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Nom de l'agence">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Adresse</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Adresse">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Ville</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Ville">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Code postal</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Code postal">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tel</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Ex : +221 77 000 00 00">
                        </div>
                      </div>
                     
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <button type="button" class="btn btn-primary">Annuler</button>
                          <button class="btn btn-primary" type="reset">Supprimer</button>
                          <button type="submit" class="btn btn-success">Ajouter</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>

            
              </div>
              <div class="col-md-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Logo de l'agence</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left">
                      <div class="form-group">
                        <div class="col-md-4">
                          <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
                        </div>
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4">
                          <div style="width: 150px;height: 150px;border: 1px solid">
                        </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div> 
              </div>
              <div class="col-md-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Horaires de l'agence</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left">
                      <div class="form-group" style="display: inline;">
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-3">
                          De :<input type="time" class="form-control" name="open">
                        </div>  
                        <div class="col-md-3">
                          A :<input type="time" class="form-control" name="close">
                        </div>
                        <div class="col-md-3">
                        </div>
                      </div>
                    </form>
                  </div>
                </div> 
              </div>


             
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Géolocalisation</h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div id="alerts"></div>
                    <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor-one">
                      <form class="form-horizontal form-label-left input_mask">
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                          <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Adresse">
                          <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true"></span>
                        </div>
                        <div class="container" style="width: 100%;height: 400px; vertical-align: center">
                           <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d494187.56441498117!2d-17.53610498287854!3d14.608169041501057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sagence+de+location+de+voiture+au+senegal!5e0!3m2!1sfr!2ssn!4v1544441319159"  width="100%" height="400px" frameborder="0" style="border:0;" allowfullscreen>
                          </iframe>                  
                        </div>
                      </form>
                    </div>
                  <br />

                  <div class="ln_solid"></div>


                </div>
              </div>
            </div>

           

           
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <?php require 'includes/footer-admin.php'; ?>
