<?php
session_start();
require '../db/conn.php';
$req = $pdo->prepare("SELECT * FROM car_models");
$req->execute();
$car_models = $req->fetchAll();
include '../includes/header-site.php';
?>


<div class="container app-board">
  <h2 class="app-header" style="display: inline-block;">Modèle</h2>
  <p class="text-right">
    <a href="/car-model/create.php">Ajouter <i class="glyphicon glyphicon-plus"></i></a>
  </p>
  <div class="card">
    <div class="card-body">
      <table class="table table-hover table-striped table-responsive">
        <thead>
        <tr>
          <th>#</th>
          <th>Nom</th>
          <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($car_models as $car_model): ?>
          <tr>
            <td><?= $car_model->id ?></td>
            <td><?= $car_model->name ?></td>
            <td>
              <a class="app-link app-link-icon" href="/car-model/details.php?id=<?= $car_model->id?>">
                <i class="glyphicon glyphicon-eye-open"></i>
              </a>
              <a class="app-link app-link-icon" href="/car-model/edit.php?id=<?= $car_model->id?>">
                <i class="glyphicon glyphicon-pencil"></i>
              </a>
              <a data-confirm="Etes-vous sur de vouloir supprimer ce car-model ?" class="app-link app-link-icon" href="/car-model/delete.php?id=<?= $car_model->id?>">
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
