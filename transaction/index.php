<?php
session_start();
require '../db/conn.php';
$req = $pdo->prepare("SELECT * FROM transactions");
$req->execute();
$transactions = $req->fetchAll();

$req = $pdo->prepare("SELECT * FROM clients");
$req->execute();
$clients = $req->fetchAll();
$clients_by_id = [];
foreach($clients as $client) {
  $clients_by_id[$client->id] = $client;
}

$req = $pdo->prepare("SELECT * FROM agencies");
$req->execute();
$agencies = $req->fetchAll();
$agencies_by_id = [];
foreach($agencies as $agency) {
  $agencies_by_id[$agency->id] = $agency;
}

$req = $pdo->prepare("SELECT * FROM cars");
$req->execute();
$cars = $req->fetchAll();
$cars_by_id = [];
foreach($cars as $car) {
  $cars_by_id[$car->id] = $car;
}

$req = $pdo->prepare("SELECT * FROM payments");
$req->execute();
$payments = $req->fetchAll();
$payments_by_id = [];
foreach($payments as $payment) {
  $payments_by_id[$payment->id] = $payment;
}
$req = $pdo->prepare("SELECT * FROM clients");
$req->execute();
$providers = $req->fetchAll();
$providers_by_id = [];
foreach($providers as $provider) {
  $providers_by_id[$provider->id] = $provider;
}
$req = $pdo->prepare("SELECT * FROM tarifs");
$req->execute();
$tarifs = $req->fetchAll();
$tarifs_by_id = [];
foreach($tarifs as $tarif) {
  $tarifs_by_id[$tarif->id] = $tarif;
}

include '../includes/header-site.php';
?>


<div class="container app-board">
  <h2 class="app-header" style="display: inline-block;">Véhicule</h2>
  <p class="text-right">
    <a href="/transaction/create.php">Ajouter <i class="glyphicon glyphicon-plus"></i></a>
  </p>
  <div class="card">
    <div class="card-body">
      <table class="table table-hover table-striped table-responsive">
        <thead>
        <tr>
          <th>#</th>
          <th>Prénom Client</th>
          <th>Nom Client</th>
          <th>Type</th>
          <th>Agence</th>
          <th>Véhicule Imm</th>
          <th>Tarif</th>
          <th>Début</th>
          <th>Fin</th>
          <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($transactions as $transaction): ?>
          <tr>
            <td><?= $transaction->id ?></td>
            <td><?= $transaction->type ?></td>
            <td><?= $transaction->start ?></td>
            <td><?= $transaction->end ?></td>
            <td><?= $clients_by_id[$client->id]->fist_name ?></td>
            <td><?= $clients_by_id[$client->id]->last_name ?></td>
            <td><?= $agencies_by_id[$agency->id]->name ?></td>
            <td><?= $cars_by_id[$car->serial_number]->serial_number ?></td>
            <td><?= $tarifs_by_id[$tarif->id]->price ?></td>
            <td>
              <a class="app-link app-link-icon" href="/transaction/details.php?serial_number=<?= $car->serial_number?>">
                <i class="glyphicon glyphicon-eye-open"></i>
              </a>
              <a class="app-link app-link-icon" href="/transaction/edit.php?serial_number=<?= $car->serial_number?>">
                <i class="glyphicon glyphicon-pencil"></i>
              </a>
              <a data-confirm="Etes-vous sur de vouloir supprimer ce véhicule ?" class="app-link app-link-icon" href="/transaction/delete.php?serial_number=<?= $car->serial_number?>">
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
