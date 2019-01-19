<?php
session_start();
require '../vendor/autoload.php';
$errors = [];
if (!empty($_POST)) {
  $validator = new \App\Validator($_POST, [
    'price' => 'required',
    'currency' => 'required',
    'provider_id' => 'required|exists:id,providers',
    'model_id' => 'required|exists:id,models'
  ]);
  $errors = $validator->getErrors();
  if (!$validator->fails()) {
    require_once '../db/conn.php';
    $req = $pdo->prepare("INSERT INTO cars (serial_number, price, currency, provider_id, model_id) VALUES (:serial_number, :price, :currency, :provider_id, :model_id)");
    $req->execute([
      "serial_number" => $_POST['serial_number'],
      "price" => $_POST['price'],
      "currency" => $_POST['currency'],
      "provider_id" => $_POST['provider_id'],
      "model_id" => $_POST['model_id'],
    ]);
    success('Car ajouté.');
    header('location: /car');
    die();
  }
  debug($errors);die();
}

require_once '../db/conn.php';
$req = $pdo->prepare("SELECT * FROM providers");
$req->execute();
$providers = $req->fetchAll();
$req = $pdo->prepare("SELECT * FROM car_models");
$req->execute();
$car_models = $req->fetchAll();
require "../includes/header-site.php";
?>

<div class="container app-content">
  <h2>Ajout car</h2>
  <div class="card">
    <div class="card-body app-board">
      <!--  Empty action means the form will be submitted to the same script file -->
      <form action="" method="POST">
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="serial_number">Matricule</label>
              <input type="text" class="form-control" id="serial_number" name="serial_number" value="<?= get_data('serial_number') ?>"/>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="price">Prix</label>
              <input type="text" class="form-control" id="price" name="price" value="<?= get_data('price') ?>"/>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="currency">Currency</label>
              <select name="currency" id="currency" class="form-control">
                <option <?= get_data('currency') == 'XOF' ? 'selected' : '' ?> value="XOF">Franc CFA</option>
                <option <?= get_data('currency') == 'USD' ? 'selected' : '' ?> value="USD">Dollar</option>
                <option <?= get_data('currency') == 'EUR' ? 'selected' : '' ?> value="EUR">Euro</option>
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="provider_id">Fournisseur</label>
              <select name="provider_id" id="provider_id" class="form-control">
                <?php foreach($providers as $provider): ?>
                <option <?= get_data('provider_id') == $provider->id ? 'selected' : '' ?> value="<?= $provider->id ?>"><?= $provider->name ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="model_id">Modèle</label>
              <select name="model_id" id="model_id" class="form-control">
                <?php foreach($car_models as $car_model): ?>
                <option <?= get_data('model_id') == $car_model->id ? 'selected' : '' ?> value="<?= $car_model->id ?>"><?= $car_model->name ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
        </div>
        <button class="btn btn-outline-primary" type="submit">Ajouter</button>
      </form>
    </div>
  </div>
</div>

<?php require "../includes/footer-site.php"; ?>
