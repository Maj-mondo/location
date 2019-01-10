<?php include 'includes/header-admin.php'; ?>
<?php

if (isset($_POST['submit'])) {
  # declarations
  $nom=$_POST['nom'];
  $adresse=$_POST['adresse'];
  $ville=$_POST['ville'];
  $codepostal=$_POST['codepostal'];
  $tel=$_POST['tel'];
  $h_ouverture=$_POST['h_ouverture'];
  $h_fermeture=$_POST['h_fermeture'];

  $j=$_POST['jours'];
  $jours=implode(',', $j);

  $logo=$FILES['logo']['name'];
  $file_tmp_name=$FILES['logo']['tmp_name'];
  move_uploaded_file($file_tmp_name, "./assets/images/$logo");

  if (!empty($_POST)) {
    echo "<script>alert('Une erreur est survenue :( ')</script>";
    $errors = array();
  }  else {

      $req = $pdo->prepare("INSERT INTO agencies SET nom = ?, adresse = ?, codepostal =?, h_ouverture=?,h_fermeture = ?,joursdetravail = ?,ville = ?,tel = ?, logo =?");

      $req->execute([$_POST['nom'],$_POST['adresse'],$_POST['codepostal'],$_POST['h_ouverture'],$_POST['h_fermeture'],$_POST['jours'],$_POST['ville'],$_POST['tel'],$_POST['logo']]);
       
      if ($req) {
        echo "<script>alert('Nouvelle agence enregistrée !')</script>";
      } else {
        mysql_query($req) or (die(mysql_error()));
        echo "<script>alert('Une erreur est survenue :( ')</script>";
      } 

  } 

}

?>


       

       <!-- page content -->

<form class="form-horizontal form-label-left input_mask" action="admin.add-agence.php" method="post" enctype="multipart/form-data">

        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Ajouter une agence</h3>
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

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nom de l'agence</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" name="nom" class="form-control" placeholder="Nom de l'agence">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Adresse</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" name="adresse" class="form-control" placeholder="Adresse">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Ville</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" name="ville" class="form-control" placeholder="Ville">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Code postal</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" name="codepostal" class="form-control" placeholder="Code postal">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Téléphone</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" name="tel" class="form-control" placeholder="Ex : +221 77 000 00 00">
                        </div>
                      </div>
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <button type="reset" class="btn btn-primary">Annuler</button>
                          <button type="submit" class="btn btn-success">Ajouter</button>
                        </div>
                      </div>
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
                      <div class="form-group">
                        <div class="col-md-4">
                          <input type="file" name="logo" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
                          <input type = "hidden" name="MAX_FILE_SIZE" value="20000">
                        </div>
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4">
                          <div style="width: 150px;height: 150px;border: 1px solid">
                        </div>
                        </div>
                      </div>
                  </div>
                </div> 
              </div>
              <div class="col-md-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Jours de travail</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="form-group" style="display: inline;">
                        <div class="col-md-6 col-sm-9 col-xs-12">       
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" class="flat"  name="jours[]" value="Lundi"> Lundi
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" class="flat"  name="jours[]" value="Mardi"> Mardi
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" class="flat"  name="jours[]" value="Mercredi"> Mercredi
                            </label>
                          </div>
                           <div class="checkbox">
                            <label>
                              <input type="checkbox" class="flat"  name="jours[]" value="Jeudi"> Jeudi
                            </label>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" class="flat"  name="jours[]" value="Vendredi"> Vendredi
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" class="flat"  name="jours[]" value="Samedi"> Samedi
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" class="flat"  name="jours[]" value="Dimanche"> Dimanche
                            </label>
                          </div>
                      </div>
                      </div>
                  </div>
                  <div class="x_title">
                    <h2>Horaires de l'agence</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                      <div class="form-group" style="display: inline;">
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-3">
                          De :<input type="time" name="h_ouverture" class="form-control" name="open">
                        </div>  
                        <div class="col-md-3">
                          A :<input type="time" name="h_fermeture" class="form-control" name="close">
                        </div>
                        <div class="col-md-3">
                        </div>
                      </div>
                </div> 
              </div>


     </form>
        
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
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                          <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Adresse" name="map">
                          <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true"></span>
                        </div>
                          
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
