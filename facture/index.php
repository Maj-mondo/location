<?php
session_start();
require '../db/conn.php';
$req = $pdo->prepare("SELECT * FROM providers");
$req->execute();
$providers = $req->fetchAll();

include '../includes/header-site.php';
?>


<div class="container app-board">
  <h2 class="app-header" style="display: inline-block;">Fournisseurs</h2>
  <p class="text-right">
    <a href="/fournisseur/create.php">Ajouter <i class="glyphicon glyphicon-plus"></i></a>
  </p>
  <div class="card">
    <div class="card-body">
      <table class="table table-hover table-striped table-responsive">
        <thead>
        <tr>
          <th>#</th>
          <th>Nom</th>
          <th>Code postal</th>
          <th>Ville</th>
          <th>CNI</th>
          <th>Tel</th>
          <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($providers as $provider): ?>
          <tr>
            <td><?= $provider->id ?></td>
            <td>
              <span data-toggle="tooltip" data-placement="top"
                    title="<?= $provider->address ?>"><?= $provider->name ?></span>
            </td>
            <td><?= $provider->postal_code ?></td>
            <td><?= $provider->city ?></td>
            <td><?= $provider->cni ?></td>
            <td><?= $provider->phone ?></td>
            <td>
              <a class="app-link app-link-icon" href="/fournisseur/details.php?id=<?= $provider->id?>">
                <i class="glyphicon glyphicon-eye-open"></i>
              </a>
              <a class="app-link app-link-icon" href="/fournisseur/edit.php?id=<?= $provider->id?>">
                <i class="glyphicon glyphicon-pencil"></i>
              </a>
              <a data-confirm="Etes-vous sur de vouloir supprimer ce fournisseur ?" class="app-link app-link-icon" href="/fournisseur/delete.php?id=<?= $provider->id?>">
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
