<?php
session_start();
require '../vendor/autoload.php';
if (!empty($_POST)) {
  $validator = new \App\Validator($_POST, [
    'name' => 'required',
    'city' => 'required',
    'phone' => 'required'
  ]);
  
  if (!$validator->fails()) {
    require_once '../db/conn.php';
    $req = $pdo->prepare("INSERT INTO providers (name, postal_code, address, cni, phone)
    VALUES (:name, :postal_code, :address, :cni, :phone)");
    $req->execute([
      "name" => $_POST['name'],
      "postal_code" => $_POST['postal_code'],
      "address" => $_POST['address'],
      "cni" => $_POST['cni'],
      "phone" => $_POST['phone']
    ]);
    success('founisseur ajouté.');
    header('location: /fournisseur/index.php');
    die();
  } else {
    $errors = $validator->getErrors();
    error($errors[array_keys($errors)[0]][0]);
  }
}

require "../includes/header-site.php";
?>

<div class="container app-content">
  <h2>Ajout fournisseur</h2>
  <div class="card">
    <div class="card-body app-board">
      <!--  Empty action means the form will be submitted to the same script file -->
      <form action="" method="POST">
        <div class="form-group">
          <label for="name">Nom</label>
          <input type="text" class="form-control" id="name" name="name" value="<?= get_data('name') ?>"/>
        </div>
        <div class="form-group">
          <label for="postal_code">Code postal</label>
          <input type="text" class="form-control" id="postal_code" name="postal_code"
                 value="<?= get_data('postal_code') ?>"/>
        </div>
        <div class="form-group">
          <label for="city">Ville</label>
          <input type="text" class="form-control" id="city" name="city" value="<?= get_data('city') ?>"/>
        </div>
        <div class="form-group">
          <label for="cni">CNI</label>
          <input type="text" class="form-control" id="cni" name="cni" value="<?= get_data('cni') ?>"/>
        </div>
        <div class="form-group">
          <label for="phone">Phone</label>
          <input type="text" class="form-control" id="phone" name="phone" value="<?= get_data('phone') ?>"/>
        </div>
        <div class="form-group">
          <label for="address">Address</label>
          <textarea class="form-control" id="address" name="address"><?= get_data('address') ?>"</textarea>
        </div>
        <button class="btn btn-outline-primary" type="submit">Ajouter</button>
      </form>
    </div>
  </div>
</div>

<?php require "../includes/footer-site.php"; ?>
