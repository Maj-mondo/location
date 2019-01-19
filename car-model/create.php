<?php
session_start();
require '../vendor/autoload.php';
if (!empty($_POST)) {
  $validator = new \App\Validator($_POST, [
    'name' => 'required'
  ]);
  
  if (!$validator->fails()) {
    require_once '../db/conn.php';
    $req = $pdo->prepare("INSERT INTO car_models (name) VALUES (:name)");
    $req->execute([
      "name" => $_POST['name'],
    ]);
    success('Modèle ajouté.');
    header('location: /car-model');
    die();
  }
}

require "../includes/header-site.php";
?>

<div class="container app-content">
  <h2>Ajout modèle</h2>
  <div class="card">
    <div class="card-body app-board">
      <!--  Empty action means the form will be submitted to the same script file -->
      <form action="" method="POST">
        <div class="form-group">
          <label for="name">Nom</label>
          <input type="text" class="form-control" id="name" name="name" value="<?= get_data('name') ?>"/>
        </div>
        <button class="btn btn-outline-primary" type="submit">Ajouter</button>
      </form>
    </div>
  </div>
</div>

<?php require "../includes/footer-site.php"; ?>
