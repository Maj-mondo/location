<?php
session_start();
require '../db/conn.php';
$req = $pdo->prepare("SELECT * FROM mechanics");
$req->execute();
$mechanics = $req->fetchAll();

include '../includes/header-site.php';
?>


<div class="container app-board">
  <h2 class="app-header" style="display: inline-block;">Mécaniciens</h2>
  <p class="text-right">
    <a href="/mecanicien/create.php">Ajouter <i class="glyphicon glyphicon-plus"></i></a>
  </p>
  <div class="card">
    <div class="card-body">
      <table class="table table-hover table-striped table-responsive">
        <thead>
        <tr>
          <th>#</th>
          <th>Nom</th>
          <th>Prénom(s)</th>
          <th>Adresse</th>
          <th>Ville</th>
          <th>Garage</th>
          <th>Téléphone</th>
          <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($mechanics as $mechanic): ?>
          <tr>
            <td><?= $mechanic->id ?></td>
            
            <td>
              <span data-toggle="tooltip" data-placement="top"
                    title="<?= $mechanic->address ?>"><?= $mechanic->last_name ?></span>
            </td>
            <td>
              <span data-toggle="tooltip" data-placement="top"
                    title="<?= $mechanic->address ?>"><?= $mechanic->first_name ?></span>
            </td>
            <td><?= $mechanic->address ?></td>
            <td><?= $mechanic->city ?></td>
            <td><?= $mechanic->garage ?></td>
            <td><?= $mechanic->phone_number ?></td>
            <td>
              <a class="app-link app-link-icon" href="/mecanicien/details.php?id=<?= $mechanic->id?>">
                <i class="glyphicon glyphicon-eye-open"></i>
              </a>
              <a class="app-link app-link-icon" href="/mecanicien/edit.php?id=<?= $mechanic->id?>">
                <i class="glyphicon glyphicon-pencil"></i>
              </a>
              <a data-confirm="Etes-vous sur de vouloir supprimer ce mecanicien ?" class="app-link app-link-icon" href="/mecanicien/delete.php?id=<?= $mechanic->id?>">
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
