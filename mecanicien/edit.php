<?php
session_start();
require '../vendor/autoload.php';
$id = isset($_GET['id']) ? $_GET['id'] : null;
if (!$id) {
  warning('Paramètre ID est requis.');
  header("location: /");
  die();
}

require_once '../db/conn.php';
$req = $pdo->prepare("SELECT * FROM mechanics WHERE id = :id");
$req->execute([
  'id' => $id
]);
$driver = $req->fetch();
if (!$driver) {
  warning('Aucun mécanicien avec cet ID: ' . $id);
  header("location: /");
  die();
}

require_once '../vendor/autoload.php';
$errors = [];
if (!empty($_POST)) {
  $v = new \App\Validator($_POST, [
    'address' => 'required',
    'phone_number' => 'required'
  ]);
  $errors = $v->getErrors();
  if (!$v->fails()) {
    require_once '../db/conn.php';
    $req = $pdo->prepare("UPDATE mechanics set first_name = :first_name, last_name=:last_name,  address = :address, city = :city, phone_number = :phone_number, garage = :garage WHERE id = :id");
    $req->execute([
      "first_name" => $_POST['first_name'],
      "last_name" => $_POST['last_name'],
      "address" => $_POST['address'],
      "city" => $_POST['city'],
      "phone_number" => $_POST['phone_number'],
      "garage" => $_POST['garage'],
      "id" => $_GET['id']
    ]);
    success('mécanicien mis à jour');
    header('location: /mecanicien');
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
          <label for="first_name">Nom</label>
          <input type="text" class="form-control" id="first_name" name="first_name" value="<?= $driver->first_name ?>"/>
        </div>
        <div class="form-group">
          <label for="last_name">Prénom(s)</label>
          <input type="text" class="form-control" id="last_name" name="last_name" value="<?= $driver->last_name ?>"/>
        </div>
        <div class="form-group">
          <label for="city">Ville</label>
          <input type="text" class="form-control" id="city" name="city" value="<?= $driver->city ?>"/>
        </div>
        <div class="form-group">
          <label for="garage">Garage</label>
          <input type="text" class="form-control" id="garage" name="garage" value="<?= $driver->garage ?>"/>
        </div>
       <div class="form-group">
          <label for="phone">Téléphone</label>
          <input type="text" class="form-control" id="phone_number" name="phone_number" value="<?= $driver->phone_number ?>"/>
        </div>
        <div class="form-group">
          <label for="address">Address</label>
          <textarea class="form-control" id="address" name="address"><?= $driver->address ?></textarea>
        </div>
           <button class="btn btn-outline-primary" type="submit">Sauvegarder</button>
      </form>
    </div>
  </div>
</div>

<?php require "../includes/footer-site.php"; ?>
