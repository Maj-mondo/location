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
$req = $pdo->prepare("SELECT * FROM drivers WHERE id = :id");
$req->execute([
  'id' => $id
]);
$driver = $req->fetch();
if (!$driver) {
  warning('Aucun chauffeur avec cet ID: ' . $id);
  header("location: /");
  die();
}

require_once '../vendor/autoload.php';
$errors = [];
if (!empty($_POST)) {
  $v = new \App\Validator($_POST, [
    'cni' => 'required',
    'phone_number' => 'required'
  ]);
  $errors = $v->getErrors();
  if (!$v->fails()) {
    require_once '../db/conn.php';
    $req = $pdo->prepare("UPDATE drivers set first_name = :first_name, last_name=:last_name, cni = :cni, address = :address, city = :city, license_number = :license_number, birthdate = :birthdate, gender=:gender, phone_number = :phone_number WHERE id = :id");
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
      "id" => $_GET['id']
    ]);
    success('chauffeur mis à jour');
    header('location: /chauffeur');
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
          <input type="text" class="form-control" id="first_name" name="first_name" value="<?= $driver->first_name ?>"/>
        </div>
        <div class="form-group">
          <label for="postal_code">Prénom(s)</label>
          <input type="text" class="form-control" id="last_name" name="last_name" value="<?= $driver->last_name ?>"/>
        </div>
        <div class="form-group">
          <label for="city">Ville</label>
          <input type="text" class="form-control" id="city" name="city" value="<?= $driver->city ?>"/>
        </div>
        <div class="form-group">
          <label for="cni">CNI</label>
          <input type="text" class="form-control" id="cni" name="cni" value="<?= $driver->cni ?>"/>
        </div>
        <div class="form-group">
          <label for="phone">Téléphone</label>
          <input type="text" class="form-control" id="phone_number" name="phone_number" value="<?= $driver->phone_number ?>"/>
        </div>
        <div class="form-group">
          <label for="address">Address</label>
          <textarea class="form-control" id="address" name="address"><?= $driver->address ?></textarea>
        </div>
        <div class="form-group">
          <label for="license_number">Permis</label>
          <input type="text" class="form-control" id="license_number" name="license_number" value="<?= $driver->license_number ?>"/>
        </div>
        <div class="form-group">
          <label for="birthdate">Date de Naissance</label>
          <input type="Date" class="form-control" id="birthdate" name="birthdate" value="<?= $driver->birthdate ?>"/>
        </div>
        <div class="form-group">
          <label for="gender">Genre</label>
          <br>
          <div class="col-md-4">
            <input type="radio"  name="gender" value="Homme" checked> Homme<br>
            <input type="radio"  name="gender" value="Femme"> Femme<br>
          </div>
        </div>
        <button class="btn btn-outline-primary" type="submit">Sauvegarder</button>
      </form>
    </div>
  </div>
</div>

<?php require "../includes/footer-site.php"; ?>
