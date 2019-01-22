<?php
session_start();
require '../vendor/autoload.php';
if (!empty($_POST)) {
  $validator = new \App\Validator($_POST, [
    'name' => 'required',
    'city' => 'required',
    'address' => 'required',
    'phone' => 'required'
  ]);
  
  if (!$validator->fails()) {
    require_once '../db/conn.php';
    $req = $pdo->prepare("INSERT INTO agencies (name, postal_code, address, opening, closing, working_day, city, phone)
    VALUES (:name, :postal_code, :address, :opening, :closing, :working_day, :city, :phone)");
    $req->execute([
      "name" => $_POST['name'],
      "postal_code" => $_POST['postal_code'],
      "address" => $_POST['address'],
      "phone" => $_POST['phone'],
      "opening" => $_POST['opening'],
      "closing" => $_POST['closing'],
      "working_day" => implode(',', $_POST['working_day']),
      "city" => $_POST['city']
    ]);
    success('Agence ajouté.');
    header('location: /agence');
    die();
  } else {
    $errors = $validator->getErrors();
    error($errors[array_keys($errors)[0]][0]);
  }
}
$days = isset($_POST['working_day']) ? explode(',', $_POST['working_day']) : ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];

require "../includes/header-site.php";
?>

<div class="container app-content">
  <h2>Ajout agence</h2>
  <div class="card">
    <div class="card-body app-board">
      <!--  Empty action means the form will be submitted to the same script file -->
      <form action="" method="POST">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="name">Nom</label>
              <input type="text" class="form-control" id="name" name="name" value="<?= get_data('name') ?>"/>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="postal_code">Code postal</label>
              <input type="text" class="form-control" id="postal_code" name="postal_code"
                     value="<?= get_data('postal_code') ?>"/>
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
              <label for="phone">Téléphone</label>
              <input type="text" class="form-control" id="phone" name="phone" value="<?= get_data('phone') ?>"/>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="address">Adresse</label>
              <textarea class="form-control" id="address" name="address"><?= get_data('address') ?></textarea>
            </div>
          </div>
          <div class="col-md-12">
          <div class="form-group">
            <label for="working_day">Jours de travail</label>
            <div class="col-md-6">
              <?php foreach($days as $day):  ?>
              <input type="checkbox"  name="working_day[]" value="<?= $day ?>" <?= in_array($day , $days) ? 'checked' : '' ?>> <?= $day ?>
              <?php endforeach; ?>
            </div>
            </div>
        </div>
          <div class="col-md-6">
             <div class="form-group">
              <label for="opening">Heure Ouverture</label>
              <input type="time" class="form-control" id="opening" name="opening" value="<?= get_data('opening') ?>"/>
            </div>
          </div>
          <div class="col-md-6">
          <div class="form-group">
            <label for="closing">Heure Fermeture</label>
            <input type="time" class="form-control" id="closing" name="closing" value="<?= get_data('closing') ?>"/>
          </div>
        </div>
        <div class="col-md-6">
          <button class="btn btn-outline-primary" type="submit">Ajouter</button>
        </div>
     </div>
      </form>
    </div>
  </div>
</div>

<?php require "../includes/footer-site.php"; ?>
