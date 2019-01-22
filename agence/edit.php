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
    'cni' => 'required',
    'phone_number' => 'required'
  ]);
  $errors = $v->getErrors();
  if (!$v->fails()) {
    require_once '../db/conn.php';
    $req = $pdo->prepare("UPDATE agencies set name = :name, address = :address, city = :city, postal_code = :postal_code, opening = :opening, closing = :closing, working_day = :working_day, phone = :phone WHERE id = :id");
    $req->execute([
      "name" => $_POST['name'],
      "address" => $_POST['address'],
      "postal_code" => $_POST['postal_code'],
      "opening" => $_POST['opening'],
      "closing" => $_POST['closing'],
      "city" => $_POST['city'],
      "phone" => $_POST['phone'],
      "working_day" => $_POST['working_day'],
      "id" => $_GET['id']
    ]);
    success('agence mise à jour');
    header('location: /agence');
    die();
  }
}

require_once '../db/conn.php';
$req = $pdo->prepare("SELECT * FROM agencies WHERE id = :id");
$req->execute([
  'id' => $id
]);
$agency = $req->fetch();
if (!$agency) {
  warning('Aucune agence avec cet ID: ' . $id);
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
          <input type="text" class="form-control" id="name" name="name" value="<?= $agency->name ?>"/>
        </div>
        <div class="form-group">
          <label for="postal_code">Code postal</label>
          <input type="text" class="form-control" id="postal_code" name="postal_code" value="<?= $agency->postal_code ?>"/>
        </div>
        <div class="form-group">
          <label for="city">Ville</label>
          <input type="text" class="form-control" id="city" name="city" value="<?= $agency->city ?>"/>
        </div>
        <div class="form-group">
          <label for="phone">Phone</label>
          <input type="text" class="form-control" id="phone" name="phone" value="<?= $agency->phone ?>"/>
        </div>
        <div class="form-group">
          <label for="address">Adresse</label>
          <textarea class="form-control" id="address" name="address"><?= $agency->address ?>"</textarea>
        </div>
        <div class="form-group">
          <label for="opening">Heure d'ouverture</label>
          <input type="time" class="form-control" id="opening" name="opening" value="<?= $agency->opening ?>"/>
        </div>
        <div class="form-group">
          <label for="closing">Heure de fermeture</label>
          <input type="time" class="form-control" id="closing" name="closing" value="<?= $agency->closing ?>"/>
        </div>
        <div class="form-group">
            <label for="working_day">Jours de travail</label><br>
              <input type="checkbox"  name="working_day[]" value="<?= $agency->working_day ?>" checked> Lundi
              <input type="checkbox"  name="working_day[]" value="<?= $agency->working_day ?>" checked> Mardi
              <input type="checkbox"  name="working_day[]" value="<?= $agency->working_day ?>" checked> Mercredi
              <input type="checkbox"  name="working_day[]" value="<?= $agency->working_day ?>" checked> Jeudi
              <input type="checkbox"  name="working_day[]" value="<?= $agency->working_day ?>" checked> Vendredi
              <input type="checkbox"  name="working_day[]" value="<?= $agency->working_day ?>"> Samedi
              <input type="checkbox"  name="working_day[]" value="<?= $agency->working_day ?>"> Dimanche
        </div>
         <button class="btn btn-outline-primary" type="submit">Sauvegarder</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php require "../includes/footer-site.php"; ?>
