<?php
session_start();
require '../vendor/autoload.php';
$errors = [];
if (!empty($_POST)) {
  $validator = new \App\Validator($_POST, [
    'price' => 'required',
    'provider_id' => 'required|exists:id,providers',
    'model_id' => 'required|exists:id,models'
  ]);
  $errors = $validator->getErrors();
  if (!$validator->fails()) {
    require_once '../db/conn.php';
    $req = $pdo->prepare("INSERT INTO transactions (transac_type, start, end,idClient, idAgency, serial_number, idPayment, idTarif) VALUES (:transac_type, :start, :end,:idClient, :idAgency, :serial_number, :idPayment, :idTarif)");
    $req->execute([
      "transac_type" => $_POST['serial_number'],
      "start" => $_POST['price'],
      "end" => $_POST['currency'],
      "serial_number" => $_POST['serial_number'],
      "idClient" => $_POST['idClient'],
      "idAgency" => $_POST['idAgency'],
      "idPayment" => $_POST['idPayment'],
      "idTarif" => $_POST['idTarif'],
    ]);
    success('transaction ajouté.');
    header('location: /transaction');
    die();
  }
  debug($errors);die();
}

require_once '../db/conn.php';
$req = $pdo->prepare("SELECT * FROM transactions");
$req->execute();
$transactions = $req->fetchAll();

$req = $pdo->prepare("SELECT * FROM clients");
$req->execute();
$clients = $req->fetchAll();

$req = $pdo->prepare("SELECT * FROM agencies");
$req->execute();
$agencies = $req->fetchAll();

$req = $pdo->prepare("SELECT * FROM cars");
$req->execute();
$serial_number = $req->fetchAll();

$req = $pdo->prepare("SELECT * FROM payments");
$req->execute();
$payments = $req->fetchAll();

$req = $pdo->prepare("SELECT * FROM tarifs");
$req->execute();
$tarifs = $req->fetchAll();

require "../includes/header-site.php";
?>

<div class="container app-content">
  <h2>Ajout transaction</h2>
  <div class="card">
    <div class="card-body app-board">
      <!--  Empty action means the form will be submitted to the same script file -->
      <form action="" method="POST">
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="fist_name">Prénoms</label>
              <input type="text" class="form-control" id="fist_name" name="fist_name" value="<?= get_data('fist_name') ?>"/>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="price">Nom</label>
              <input type="text" class="form-control" id="price" name="price" value="<?= get_data('price') ?>"/>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="currency">Type</label>
              <select name="currency" id="currency" class="form-control">
                <option <?= get_data('currency') == 'XOF' ? 'selected' : '' ?> value="XOF">Franc CFA</option>
                <option <?= get_data('currency') == 'USD' ? 'selected' : '' ?> value="USD">Dollar</option>
                <option <?= get_data('currency') == 'EUR' ? 'selected' : '' ?> value="EUR">Euro</option>
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="provider_id">Agence</label>
              <select name="provider_id" id="provider_id" class="form-control">
                <?php foreach($providers as $provider): ?>
                <option <?= get_data('provider_id') == $provider->id ? 'selected' : '' ?> value="<?= $provider->id ?>"><?= $provider->name ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="model_id">Immatriculation</label>
              <select name="model_id" id="model_id" class="form-control">
                <?php foreach($car_models as $car_model): ?>
                <option <?= get_data('model_id') == $car_model->id ? 'selected' : '' ?> value="<?= $car_model->id ?>"><?= $car_model->name ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="price">Tarif</label>
              <input type="text" class="form-control" id="price" name="price" value="<?= get_data('price') ?>"/>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="price">Début</label>
              <input type="date" class="form-control" id="price" name="price" value="<?= get_data('price') ?>"/>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="price">Fin</label>
              <input type="date" class="form-control" id="price" name="price" value="<?= get_data('price') ?>"/>
            </div>
          </div>
          
        </div>
        <button class="btn btn-outline-primary" type="submit">Ajouter</button>
      </form>
    </div>
  </div>
</div>

<?php require "../includes/footer-site.php"; ?>
