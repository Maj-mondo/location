<?php
session_start();
require '../vendor/autoload.php';
$id = isset($_GET['id']) ? $_GET['id'] : null;
if (!$id) {
  warning('Paramètre ID est requis.');
  header("location: /car-model");
  die();
}

require_once '../db/conn.php';
$req = $pdo->prepare("SELECT * FROM car_models WHERE id = :id");
$req->execute([
  'id' => $id
]);
$car_model = $req->fetch();
if (!$car_model) {
  warning('Aucun modèle de véhicule avec cet ID: ' . $id);
  header("location: /");
  die();
}

require_once '../vendor/autoload.php';
$errors = [];
if (!empty($_POST)) {
  $v = new \App\Validator($_POST, [
    'name' => 'required'
  ]);
  $errors = $v->getErrors();
  if (!$v->fails()) {
    require_once '../db/conn.php';
    $req = $pdo->prepare("UPDATE car_models SET name = :name WHERE id=:id");
    $req->execute([
      "name" => $_POST['name'],
      "id" => $_GET['id'],
    ]);
    success('Modèle modifié.');
    header('location: /car-model');
    die();
  }
}

require "../includes/header-site.php";
?>

<div class="container app-content">
  <div class="card">
    <div class="card-body app-board">
      <!--  Empty action means the form will be submitted to the same script file -->
      <form action="" method="POST">
        <div class="form-group">
          <label for="name">Nom</label>
          <input type="text" class="form-control" id="name" name="name" value="<?= $car_model->name ?>" autofocus/>
        </div>
        <button class="btn btn-outline-primary" type="submit">Sauvegarder</button>
      </form>
    </div>
  </div>
</div>

<?php require "../includes/footer-site.php"; ?>
