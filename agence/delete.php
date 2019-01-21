<?php
session_start();
require_once '../vendor/autoload.php';
$id = isset($_GET['id']) ? $_GET['id'] : null;
if (!$id) {
  warning('Paramètre ID est requis.');
  header("location: /agence");
  die();
}

require_once '../db/conn.php';
$req = $pdo->prepare("SELECT * FROM agencies WHERE id = :id");
$req->execute([
  'id' => $id
]);
$provider = $req->fetch();
if (!$provider) {
  warning('Aucun agence avec cet ID: ' . $id);
  header("location: /");
  die();
}
$req = $pdo->prepare("DELETE FROM agencies WHERE id=:id");
$req->execute([
  "id" => $id,
]);
success("agence supprimé");
header('location: /agence');
die();
