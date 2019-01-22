<?php
session_start();
require '../db/conn.php';
$req = $pdo->prepare("SELECT * FROM drivers");
$req->execute();
$drivers = $req->fetchAll();

include '../includes/header-site.php';
?>


<div class="container app-board">
  <h2 class="app-header" style="display: inline-block;">Chauffeurs</h2>
  <p class="text-right">
    <a href="/chauffeur/create.php">Ajouter <i class="glyphicon glyphicon-plus"></i></a>
  </p>
  <div class="card">
    <div class="card-body">
      <table class="table table-hover table-striped table-responsive">
        <thead>
        <tr>
          <th>#</th>
          <th>Nom</th>
          <th>Prénom(s)</th>
          <th>CNI</th>
          <th>Ville</th>
          <th>Adresse</th>
          <th>Numéro Permis</th>
          <th>Date de naissance</th>
          <th>Téléphone</th>
          <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($drivers as $driver): ?>
          <tr>
            <td><?= $driver->id ?></td>
            
            <td>
              <span data-toggle="tooltip" data-placement="top"
                    title="<?= $driver->address ?>"><?= $driver->last_name ?></span>
            </td>
            <td>
              <span data-toggle="tooltip" data-placement="top"
                    title="<?= $driver->address ?>"><?= $driver->first_name ?></span>
            </td>
            <td><?= $driver->cni ?></td>
            <td><?= $driver->city ?></td>
            <td><?= $driver->address ?></td>
            <td><?= $driver->license_number ?></td>
            <td><?= $driver->birthdate ?></td>
            <td><?= $driver->phone_number ?></td>
            <td>
              <a class="app-link app-link-icon" href="/chauffeur/details.php?id=<?= $driver->id?>">
                <i class="glyphicon glyphicon-eye-open"></i>
              </a>
              <a class="app-link app-link-icon" href="/chauffeur/edit.php?id=<?= $driver->id?>">
                <i class="glyphicon glyphicon-pencil"></i>
              </a>
              <a data-confirm="Etes-vous sur de vouloir supprimer ce chauffeur ?" class="app-link app-link-icon" href="/chauffeur/delete.php?id=<?= $driver->id?>">
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
