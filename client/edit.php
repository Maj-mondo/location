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
$req = $pdo->prepare("SELECT * FROM clients WHERE id = :id");
$req->execute([
  'id' => $id
]);
$client = $req->fetch();
if (!$client) {
  warning('Aucun client avec cet ID: ' . $id);
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
    $req = $pdo->prepare("UPDATE clients set first_name = :first_name, last_name=:last_name, cni = :cni, address = :address, city = :city, license_number = :license_number, role = :role, birthdate = :birthdate, gender=:gender, phone_number = :phone_number, email = :email WHERE id = :id");
    $req->execute([
      "first_name" => $_POST['first_name'],
      "last_name" => $_POST['last_name'],
      "cni" => $_POST['cni'],
      "address" => $_POST['address'],
      "city" => $_POST['city'],
      "license_number" => $_POST['license_number'],
      "role" => $_POST['role'],
      "birthdate" => $_POST['birthdate'],
      "gender" => $_POST['gender'],
      "phone_number" => $_POST['phone_number'],
      "email" => $_POST['email'],
      "id" => $_GET['id']
    ]);
    success('client mis à jour');
    header('location: /client');
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
          <input type="text" class="form-control" id="first_name" name="first_name" value="<?= $client->first_name ?>"/>
        </div>
        <div class="form-group">
          <label for="postal_code">Prénom(s)</label>
          <input type="text" class="form-control" id="last_name" name="last_name" value="<?= $client->last_name ?>"/>
        </div>
        <div class="form-group">
          <label for="city">Ville</label>
          <input type="text" class="form-control" id="city" name="city" value="<?= $client->city ?>"/>
        </div>
        <div class="form-group">
          <label for="cni">CNI</label>
          <input type="text" class="form-control" id="cni" name="cni" value="<?= $client->cni ?>"/>
        </div>
        <div class="form-group">
          <label for="phone">Téléphone</label>
          <input type="text" class="form-control" id="phone_number" name="phone_number" value="<?= $client->phone_number ?>"/>
        </div>
        <div class="form-group">
          <label for="address">Address</label>
          <textarea class="form-control" id="address" name="address"><?= $client->address ?></textarea>
        </div>
        <div class="form-group">
          <label for="license_number">Permis</label>
          <input type="text" class="form-control" id="license_number" name="license_number" value="<?= $client->license_number ?>"/>
        </div>
        <div class="form-group">
          <label for="role">Type de client</label>
          <select name="role" id="role" class="form-control">
            <option <?= $client->role == 'Particulier' ? 'selected' : '' ?> value="Particulier">Particulier</option>
            <option <?= $client->role == 'Entreprise' ? 'selected' : '' ?> value="Entreprise">Entreprise</option>
            <option <?= $client->role == 'Agence de voyage' ? 'selected' : '' ?> value="Agence de voyage">Agence de voyage</option>
            <option <?= $client->role == 'Compagnie aérienne' ? 'selected' : '' ?> value="Compagnie aérienne">Compagnie aérienne</option>
          </select>
        </div>
        <div class="form-group">
          <label for="birthdate">Date de Naissance</label>
          <input type="Date" class="form-control" id="birthdate" name="birthdate" value="<?= $client->birthdate ?>"/>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" name="email" value="<?= $client->email ?>"/>
        </div>
        <div class="form-group">
          <label for="password">Mot de passe</label>
          <input type="password" class="form-control" id="password" name="password" value="<?= $client->password ?>"/>
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
