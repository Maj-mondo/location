<?php
session_start();
require '../vendor/autoload.php';
if (!empty($_POST)) {
  $validator = new \App\Validator($_POST, [
    'phone_number' => 'required',
    'address' => 'required'
  ]);
  
  if (!$validator->fails()) {
    require_once '../db/conn.php';
    $req = $pdo->prepare("INSERT INTO mechanics (first_name, last_name, address, city, phone_number, garage)
    VALUES (:first_name, :last_name, :address, :city, :phone_number, :garage)");
    $req->execute([
      "first_name" => $_POST['first_name'],
      "last_name" => $_POST['last_name'],
      "address" => $_POST['address'],
      "city" => $_POST['city'],
      "phone_number" => $_POST['phone_number'],
      "garage" => $_POST['garage'],
    ]);

    success('mécanicien ajouté.');
    header('location: /mecanicien/index.php');
    die();
  } else {
    $errors = $validator->getErrors();
    error($errors[array_keys($errors)[0]][0]);
  }
}

require "../includes/header-site.php";
?>

<div class="container app-content">
  <h2>Ajout mécanicien</h2>
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
              <label for="garage">Garage</label>
              <input type="text" class="form-control" id="garage" name="garage" value="<?= get_data('garage') ?>"/>
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
          
          <div class="col-md-12">
            <button class="btn btn-outline-primary" type="submit">Ajouter</button>
          </div>
        </div>
      </form>

    </div>
  </div>
</div>

<?php require "../includes/footer-site.php"; ?>
