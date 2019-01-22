<?php
session_start();
require_once '../vendor/autoload.php';
$serial_number = isset($_GET['serial_number']) ? $_GET['serial_number'] : null;
if (!$serial_number) {
  warning('Paramètre matricule est requis.');
  header("location: /car");
  die();
}

require_once '../db/conn.php';
$req = $pdo->prepare("SELECT * FROM cars WHERE serial_number = :serial_number");
$req->execute([
  'serial_number' => $serial_number
]);
$car = $req->fetch();
if (!$car) {
  warning('Aucun véhicule avec cette immatriculation: ' . $serial_number);
  header("location: /car");
  die();
}
$req = $pdo->prepare("DELETE FROM cars WHERE serial_number=:serial_number");
$req->execute([
  "serial_number" => $serial_number,
]);
success("Véhicule supprimé.");
header('location: /car');
die();
