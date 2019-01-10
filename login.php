<?php
if (!empty($_POST)) {
  
  // validation error
  $errors = [];
  if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = "Email " . $_POST['email'] . " invalide";
  }
  if (empty($_POST['email'])) {
    $errors['password'] = "Mot de passe est requis";
  }
  
  // login if correct data
  if (empty($errors)) {
    require_once 'conn.php';
    $req = $pdo->prepare("SELECT * FROM clients WHERE email=:email");
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
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login | Car-Car</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="assets/images/favicon.ico" type="image/ico" />
  <link href='https://fonts.googleapis.com/css?family=Roboto:300,400' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="assets/css/login-client.css">
</head>
<body>
<div id="back">
  <div class="backRight"></div>
  <div class="backLeft"></div>
div>
<div id="slideBox">
  <div class="topLayer">
    <div class="right">
       <div class="content">
        <h2>Se connecter</h2>
        <form method="post" action="" class="login-form">
            <div class="form-group">
              <label for="email">Login</label>
              <input type="email" name="email" id="email" class="form-control" placeholder="login" autofocus="autofocus" required>
            </div>
            <div class="form-group">
              <label for="password">Mot de passe</label>
              <input type="password" name="password" id="password" class="form-control" placeholder="Password..." required>
            </div>
            <div class="form-group">
                    <div class="peer">
                        <a href="reset-password.php">Mot de passe oublié ?</a>
                    </div>
                <button type="submit" class="btn btn-primary">Connexion</button>
            </div>
        </form>
        <div class="peer">
          <a href="register.php">Pas encore membre ? Inscrivez-vous ici</a>
        </div>
    </div>
  </div>
</div>
<!--Inspiration from: http://ertekinn.com/loginsignup/-->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script  src="assets/js/login-client.js"></script>
</body>
</html>
