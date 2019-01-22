<?php
session_start();
require '../vendor/autoload.php';
if (!empty($_POST)) {
  $validator = new \App\Validator($_POST, [
    'cni' => 'required',
    'address' => 'required'
  ]);
  
  if (!$validator->fails()) {
    require_once '../db/conn.php';
    $req = $pdo->prepare("INSERT INTO drivers (first_name, last_name, cni, address, city, license_number, birthdate, gender, phone_number)
    VALUES (:first_name, :last_name, :cni, :address, :city, :license_number, :birthdate, :gender, :phone_number)");
    $req->execute([
      "first_name" => $_POST['first_name'],
      "last_name" => $_POST['last_name'],
      "cni" => $_POST['cni'],
      "address" => $_POST['address'],
      "city" => $_POST['city'],
      "license_number" => $_POST['license_number'],
      "birthdate" => $_POST['birthdate'],
      "gender" => $_POST['gender'],
      "phone_number" => $_POST['phone_number'],
    ]);

    success('chauffeur ajouté.');
    header('location: /chauffeur/index.php');
    die();
  } else {
    $errors = $validator->getErrors();
    error($errors[array_keys($errors)[0]][0]);
  }
}

require "../includes/header-site.php";
?>

<div class="container app-content">
  <h2>Ajout chauffeur</h2>
  <div class="card">
    <div class="card-body app-board">
      <!--  Empty action means the form will be submitted to the same script file -->
           <form action="" method="POST">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="name">Nom</label>
              <input type="text" class="form-control" id="last_name" name="last_name" value="<?= get_data('last_name') ?>" autofocus/>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="postal_code">Prénom(s)</label>
              <input type="text" class="form-control" id="first_name" name="first_name" value="<?= get_data('first_name') ?>"/>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="city">Ville</label>
              <input type="text" class="form-control" id="city" name="city" value="<?= get_data('city') ?>"/>
            </div>
          </div>
          <div class="col-md-6"> 
            <div class="form-group">
              <label for="cni">CNI</label>
              <input type="text" class="form-control" id="cni" name="cni" value="<?= get_data('cni') ?>"/>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="phone_number">Téléphone</label>
              <input type="text" class="form-control" id="phone_number" name="phone_number" value="<?= get_data('phone_number') ?>"/>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="address">Adresse</label>
              <textarea class="form-control" id="address" name="address"><?= get_data('address') ?>"</textarea>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="license_number">Permis</label>
              <input type="text" class="form-control" id="license_number" name="license_number" value="<?= get_data('license_number') ?>"/>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="birthdate">Date de Naissance</label>
              <input type="Date" class="form-control" id="birthdate" name="birthdate" value="<?= get_data('birthdate') ?>"/>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="gender">Genre</label>
              <br>
              <div class="col-md-4">
                <input type="radio"  name="gender" value="Homme" checked> Homme<br>
                <input type="radio"  name="gender" value="Femme"> Femme<br>
              </div>
            </div>
          </div>
         <div class="col-md-12">
            <button class="btn btn-outline-primary" type="submit">Ajouter</button>
          </div>
        </div>
      </form>

    </div>
  </div>
</div>

<?php require "../includes/footer-site.php"; ?>
