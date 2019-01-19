<?php
session_start();
require '../vendor/autoload.php';
$id = isset($_GET['id']) ? $_GET['id'] : null;
if (!$id) {
  warning('Paramètre ID est requis.');
  header("location: /");
  die();
}
$errors = [];
if (!empty($_POST)) {
  $v = new \App\Validator($_POST, [
      'name' => 'required',
      'phone' => 'required'
  ]);
  $errors = $v->getErrors();
  if (!$v->fails()) {
    require_once '../db/conn.php';
    $req = $pdo->prepare("UPDATE * FROM clients WHERE email=:email");
    $req->execute([
      "email" => $_POST['email']
    ]);
    $user = $req->fetch();
    if (!$user || !password_verify($_POST['password'], password_hash($_POST['password'], PASSWORD_BCRYPT))) {
      $errors['password'] = "Mot de passe incorrect";
    } else {
      header('location: client.php');
      die();
    }
  }
}
require '../db/conn.php';
$req = $pdo->prepare("SELECT * FROM providers WHERE id = :id");
$req->execute([
  'id' => $id
]);
$provider = $req->fetch();

if (!$provider) {
  warning('Aucun fournisseur avec cet ID: ' . $id);
  header("location: /");
  die();
}

require "../includes/header-site.php";
?>

<div class="container app-content">
  <div class="card">
    <div class="card-body app-board">
      <!--  Empty action means the form will be submitted to the same script file -->
      <form action="" method="POST">
        <div class="form-group">
          <label for="name">Nom</label>
          <input type="text" class="form-control" id="name" name="name" value="<?= $provider->name ?>"/>
        </div>
        <div class="form-group">
          <label for="postal_code">Code postal</label>
          <input type="text" class="form-control" id="postal_code" name="postal_code" value="<?= $provider->postal_code ?>"/>
        </div>
        <div class="form-group">
          <label for="city">Ville</label>
          <input type="text" class="form-control" id="city" name="city" value="<?= $provider->city ?>"/>
        </div>
        <div class="form-group">
          <label for="cni">CNI</label>
          <input type="text" class="form-control" id="cni" name="cni" value="<?= $provider->cni ?>"/>
        </div>
        <div class="form-group">
          <label for="phone">Phone</label>
          <input type="text" class="form-control" id="phone" name="phone" value="<?= $provider->phone ?>"/>
        </div>
        <div class="form-group">
          <label for="address">Address</label>
          <textarea class="form-control" id="address" name="address"><?= $provider->address ?>"</textarea>
        </div>
        <button class="btn btn-outline-primary" type="submit">Sauvegarder</button>
      </form>
    </div>
  </div>
</div>

<?php require "../includes/footer-site.php"; ?>
