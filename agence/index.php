<?php
session_start();
require '../db/conn.php';
$req = $pdo->prepare("SELECT * FROM agencies");
$req->execute();
$agencies = $req->fetchAll();
include '../includes/header-site.php';
?>


<div class="container app-board">
  <h2 class="app-header" style="display: inline-block;">Agences</h2>
  <p class="text-right">
    <a href="/agence/create.php">Ajouter <i class="glyphicon glyphicon-plus"></i></a>
  </p>
  <div class="card">
    <div class="card-body">
      <table class="table table-hover table-striped table-responsive">
        <thead>
        <tr>
          <th>#</th>
          <th>Nom</th>
          <th>Adresse</th>
          <th>Ville</th>
          <th>Code postal</th>
          <th>Heure Ouverture</th>
          <th>Heure Fermeture</th>
          <th>Jour de travail</th>
          <th>Téléphone</th>
          <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($agencies as $agency): ?>
          <tr>
            <td><?= $agency->id ?></td>
            <td>
              <span data-toggle="tooltip" data-placement="top"
                    title="<?= $agency->address ?>"><?= $agency->name ?></span>
            </td>
            <td><?= $agency->address ?></td>
            <td><?= $agency->city ?></td>
            <td><?= $agency->postal_code ?></td>
            <td><?= $agency->opening ?></td>
            <td><?= $agency->closing ?></td>
            <td>
              <?php foreach ($_POST['working_day'] as $wd) {
                  echo $agency->$wd; 
              }
              ?> 
            </td>
            <td><?= $agency->phone ?></td>
            <td>
              <a class="app-link app-link-icon" href="/agence/details.php?id=<?= $agency->id?>">
                <i class="glyphicon glyphicon-eye-open"></i>
              </a>
              <a class="app-link app-link-icon" href="/agence/edit.php?id=<?= $agency->id?>">
                <i class="glyphicon glyphicon-pencil"></i>
              </a>
              <a data-confirm="Etes-vous sur de vouloir supprimer cet agence ?" class="app-link app-link-icon" href="/agence/delete.php?id=<?= $agency->id?>">
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
