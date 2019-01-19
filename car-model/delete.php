<?php
session_start();
require_once '../vendor/autoload.php';
$id = isset($_GET['id']) ? $_GET['id'] : null;
if (!$id) {
  warning('Paramètre ID est requis.');
  header("location: /car-model");
  die();
}

require_once '../db/conn.php';
$req = $pdo->prepare("SELECT * FROM car_models WHERE id = :id");
$req->execute([
  'id' => $id
]);
$car_model = $req->fetch();
if (!$car_model) {
  warning('Aucun car-model avec cet ID: ' . $id);
  header("location: /car-model");
  die();
}
$req = $pdo->prepare("DELETE FROM car_models WHERE id=:id");
$req->execute([
  "id" => $id,
]);
success("Modèle supprimé.");
header('location: /car-model');
die();
