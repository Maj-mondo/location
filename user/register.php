<?php require_once '../includes/functions.php'; ?>
<?php require_once '../PHPMailerAutoload.php'; ?>
<?php
// do processing only if data sent
if (!empty($_POST)) {
  
  // validation error
  $errors = [];
  if (empty($_POST['phone_number']) || !preg_match("/[0-9]{9,13}/", $_POST['phone_number'])) {
    $errors['phone_number'] = "Numéro téléphone " . $_POST['phone_number'] . " invalide";
  }
  if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = "Email " . $_POST['email'] . " invalide";
  } else {
    require_once "conn.php";
    $req = $pdo->prepare('SELECT id FROM clients WHERE email = ?');
    $req->execute([$_POST['email']]);
    $user = $req->fetch();
    if ($user) {
      $errors['login'] = 'Cet email '.$_POST['email'].' est déjà pris';
    }
  }
  
  // persist data if correct
  if (empty($errors)) {
    require_once '../db/conn.php';
    $req = $pdo->prepare("INSERT INTO clients (phone_number, email, password) VALUES (:phone_number, :email, :password)");
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $req->execute([
        "phone_number" => $_POST['phone_number'],
        "email" => $_POST['email'],
        "password" => $password
    ]);
    
    // send confirmation email
    $to      = $_POST['email'];
    $subject = "Confirmation de compte";
    $user_id = $pdo->lastInsertId();
    $message = "<p><b>Bonjour!</b><br>Afin de valider votre compte veuillez cliquer sur le lien ci-dessous\n\n<br><br><br>http://localhost:3000/confirm-account.php?id=$user_id&token=$token</p>";
    $headers = array(
      'From' => 'Car-Car Location de vehicules <contact@car-renting.com>',
      'Reply-To' => 'contact@car-renting.com',
      'X-Mailer' => 'PHP/' . phpversion()
    );
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';
    // Additional headers
    $headers[] = 'To:<'.$_POST['email'].'>';
    if (!mail($to, $subject, $message, implode('\r\n', $headers))) {
      die("Erreur lors de l'envoi du mail");
    } else {
      $message = "Vous allez recevoir un email de confirmation de compte.";
      header('location: /user/login.php');
    }
    die();
  }
}
?>


<?php include '../includes/header-register.php'; ?>

<div class="w3-display-container">
  <?php if (!empty($errors)) : ?>
    <div class="alert alert-danger">
      <p>Vous n'avez pas rempli le formulaire correctement</p>
      <ul>
        <?php foreach ($errors as $error): ?>
          <li><?= $error; ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
  <?php endif; ?>


  <!-- Start banner section -->
  <section id="blog-banner">
    <img src="assets/images/blog-banner.jpg" alt="img">
    <div class="blog-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="blog-banner-area">
              <h2>Créer un compte client!</h2>
              <ol class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="active">Création de compte</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End banner section -->

  <section id="blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="blog-area">
            <div class="row">
              <div class="col-lg-8 col-md-7 col-sm-12">
                <div class="blog-left blog-details">
                  <!-- Start single blog post -->
                  <article class="single-from-blog">
                    <div class="blog-title">
                      <h2>Remplir le formulaire</h2>
                      <p>Notre plateforme répond à une politique de confidentialité <a href="login.php" class="blog-admin">Connecter</a> on <span class="blog-date">vous ensuite pour accéder à voter compte</span></p>
                    </div>
                    <div style="width: 100px; margin: 0 auto;">
                      <img src="assets/images/logo.png" alt="logo" width="85px" height="100px">
                    </div>
                  </article>
                  <div class="blog-comment">
                    <form class="comment-form" method="post" action="">
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="form-group <?= isset($errors['phone_number']) ? 'has-error' : ''?>">
                            <label for="phone_number">Téléphone</label>
                            <input type="text" name="phone_number" id="phone_number" class="form-control" value="<?= isset($_POST['phone_number']) ? $_POST['phone_number'] : ''?>"/>
                            <small class="help-block"><?= isset($errors['phone_number']) ? $errors['phone_number'] : ''?></small>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group <?= isset($errors['email']) ? 'has-error' : ''?>">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" value="<?= isset($_POST['email']) ? $_POST['email'] : ''?>"/>
                            <small class="help-block"><?= isset($errors['email']) ? $errors['email'] : ''?></small>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group <?= isset($errors['password']) ? 'has-error' : ''?>">
                            <label for="password">Mot de passe</label>
                            <input type="password" name="password" id="password" class="form-control" value="<?= isset($_POST['password']) ? $_POST['password'] : ''?>"/>
                            <small class="help-block"><?= isset($errors['password']) ? $errors['password'] : ''?></small>
                          </div>
                        </div>
                      </div>
                      <button class="w3-button w3-block w3-padding-larg w3-xlarge w3-white w3-border w3-border-red w3-round-large"
                              data-text="S'inscrire" type="submit">S'inscrire
                      </button>
                    </form>
                  </div>
                </div>

              </div>
              <div class="col-lg-4 col-md-5 col-sm-12">
                    <aside class="blog-right">
                      <div class="single-widget">
                        <h2>Suivez-nous sur</h2>
                        <div class="follow-us">
                          <a class="facebook" href="#"><span class="fa fa-facebook"></span></a>
                          <a class="twitter" href="#"><span class="fa fa-twitter"></span></a>
                          <a class="google-plus" href="#"><span class="fa fa-google-plus"></span></a>
                          <a class="youtube" href="#"><span class="fa fa-youtube"></span></a>
                          <a class="linkedin" href="#"><span class="fa fa-linkedin"></span></a>
                          <a class="dribbble" href="#"><span class="fa fa-dribbble"></span></a>
                        </div>
                      </div>
                      <!-- End Sidebar Single widget -->
                    </aside>
                  </div>
            </div>
          </div>
        </div>
      </section>

<!-- Start Footer -->
<?php include '../includes/footer-site.php'; ?>
