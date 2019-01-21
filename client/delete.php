<?php
session_start();
require_once '../vendor/autoload.php';
$id = isset($_GET['id']) ? $_GET['id'] : null;
if (!$id) {
  warning('Paramètre ID est requis.');
  header("location: /client");
  die();
}

require_once '../db/conn.php';
$req = $pdo->prepare("SELECT * FROM clients WHERE id = :id");
$req->execute([
  'id' => $id
]);
$provider = $req->fetch();
if (!$provider) {
  warning('Aucun client avec cet ID: ' . $id);
  header("location: /");
  die();
}
$req = $pdo->prepare("DELETE FROM clients WHERE id=:id");
$req->execute([
  "id" => $id,
]);
success("client supprimé");
header('location: /client');
die();
