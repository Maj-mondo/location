<?php
session_start();
require '../db/conn.php';
$req = $pdo->prepare("SELECT * FROM clients");
$req->execute();
$clients = $req->fetchAll();

include '../includes/header-site.php';
?>


<div class="container app-board">
  <h2 class="app-header" style="display: inline-block;">Clients</h2>
  <p class="text-right">
    <a href="/client/create.php">Ajouter <i class="glyphicon glyphicon-plus"></i></a>
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
          <th>Adresse</th>     
          <th>Ville</th>
          <th>Numéro Permis</th>
          <th>Type</th>
          <th>Date de naissance</th>
          <th>Genre</th>
          <th>Téléphone</th> 
          <th>Email</th>
          <th>Mot de passe</th>
          <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($clients as $client): ?>
          <tr>
            <td><?= $client->id ?></td>
            <td>
              <span data-toggle="tooltip" data-placement="top"
                    title="<?= $client->address ?>"><?= $client->first_name ?>
              </span>
            </td>
            <td><?= $client->last_name ?></td>
            <td><?= $client->cni ?></td>
            <td><?= $client->address ?></td>
            <td><?= $client->city ?></td>
            <td><?= $client->license_number ?></td>
            <td><?= $client->role ?></td>
            <td><?= $client->birthdate ?></td>
            <td><?= $client->gender ?></td>
            <td><?= $client->phone_number ?></td>
            <td><?= $client->email ?></td>
            <td><?= $client->password ?></td>
            <td>
              <a class="app-link app-link-icon" href="/client/details.php?id=<?= $client->id?>">
                <i class="glyphicon glyphicon-eye-open"></i>
              </a>
              <a class="app-link app-link-icon" href="/client/edit.php?id=<?= $client->id?>">
                <i class="glyphicon glyphicon-pencil"></i>
              </a>
              <a data-confirm="Etes-vous sur de vouloir supprimer ce client ?" class="app-link app-link-icon" href="/client/delete.php?id=<?= $client->id?>">
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
