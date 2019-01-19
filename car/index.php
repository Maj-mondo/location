<?php
session_start();
require '../db/conn.php';
$req = $pdo->prepare("SELECT * FROM cars");
$req->execute();
$cars = $req->fetchAll();

$req = $pdo->prepare("SELECT * FROM providers");
$req->execute();
$providers = $req->fetchAll();
$providers_by_id = [];
foreach($providers as $provider) {
  $providers_by_id[$provider->id] = $provider;
}

$req = $pdo->prepare("SELECT * FROM car_models");
$req->execute();
$models = $req->fetchAll();
$models_by_id = [];
foreach($models as $model) {
  $models_by_id[$model->id] = $model;
}

include '../includes/header-site.php';
?>


<div class="container app-board">
  <h2 class="app-header" style="display: inline-block;">Véhicule</h2>
  <p class="text-right">
    <a href="/car/create.php">Ajouter <i class="glyphicon glyphicon-plus"></i></a>
  </p>
  <div class="card">
    <div class="card-body">
      <table class="table table-hover table-striped table-responsive">
        <thead>
        <tr>
          <th>Modèle</th>
          <th>Matricule</th>
          <th>Prix</th>
          <th>Fournisseur</th>
          <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($cars as $car): ?>
          <tr>
            <td><?= $models_by_id[$car->model_id]->name ?></td>
            <td>#<?= $car->serial_number ?></td>
            <td><?= $car->price ?> <?= $car->currency ?></td>
            <td><?= $providers_by_id[$car->provider_id]->name ?></td>
            <td>
              <a class="app-link app-link-icon" href="/car/details.php?serial_number=<?= $car->serial_number?>">
                <i class="glyphicon glyphicon-eye-open"></i>
              </a>
              <a class="app-link app-link-icon" href="/car/edit.php?serial_number=<?= $car->serial_number?>">
                <i class="glyphicon glyphicon-pencil"></i>
              </a>
              <a data-confirm="Etes-vous sur de vouloir supprimer ce véhicule ?" class="app-link app-link-icon" href="/car/delete.php?serial_number=<?= $car->serial_number?>">
                <i class="glyphicon glyphicon-trash"></i>
              </a>
            </td>
          </tr>
        <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php include '../includes/footer-site.php'; ?>
