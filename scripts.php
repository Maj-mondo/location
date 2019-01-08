<?php
  require_once 'includes/conn.php';
  require_once 'credential.php';
  require_once 'PHPMailerAutoload.php';

  if (!empty($_POST)) {
    $errors = array();

    if (empty($_POST['prenom']) || !preg_match('/^[a-zA-Z0-9_]+$/', $_POST['prenom'])) {
      $errors['prenom'] = "Votre prénom n'est pas valide";
    }

    if (empty($_POST['nom']) || !preg_match('/^[a-zA-Z0-9_]+$/', $_POST['nom'])) {
      $errors['nom'] = "Vous nom n'est pas valide";
    }

    if (empty($_POST['login']) || !preg_match('/^[a-zA-Z0-9_]+$/', $_POST['login'])) {
      $errors['login'] = "Vous pseudo n'est pas valide";
    }  else {
      $req = $pdo->prepare('SELECT id FROM users WHERE login=?');
      $req->execute([$_POST['login']]);
      $user = $req->fetch();
      if ($user) {
        $errors['login'] = 'Ce pseudo est déjà pris';
      }
    }
    
    if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $errors['email'] = "Votre email n'est pas valide";
    } else {
      $req = $pdo->prepare('SELECT id FROM users WHERE email=?');
      $req->execute([$_POST['email']]);
      $user = $req->fetch();
      if ($user) {
        $errors['email'] = 'Cet email est déjà utilisé';
      }
    }

    if (empty($_POST['password']) || $_POST['password'] != $_POST['password_confirm']) {
      $errors['password'] = "Vous devez entrer un mot de passe valide";
    }

    if (empty($errors)) {
      $header="MIME-Version: 1.0\r\n";
      $header.='From:"Car-Car"<EMAIL>'."\n";
      $header.='Content-Type:text/html; charset="uft-8"'."\n";
      $header.='Content-Transfer-Encoding: 8bit';

      $req = $pdo->prepare("INSERT INTO users SET login = ?, email = ?, password =?, confirmation_token=?");
      $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
      $token=str_random(60);
      //debug($token);
      //die();
      $req->execute([$_POST['login'],$_POST['email'],$password,$token]);
      

      /* Sending mail*/

        $user_id = $pdo->lastInsertId();

        
        
        $mail = new PHPMailer;

        $mail->SMTPDebug = 4;                               // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = EMAIL;                 // SMTP username
        $mail->Password = PASS;                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        $mail->setFrom(EMAIL, 'Car-Car Location de vehicules');
        $mail->addAddress($_POST['email'], $_POST['login']);     // Add a recipient

        $mail->addReplyTo(EMAIL);

        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = 'Confirmation de compte';
        $mail->Body    = "<p><b>Bonjour!</b><br>Afin de valider votre compte veuillez cliquer sur le lien ci-dessous\n\n<br><br><br>http://localhost:3000/confirm-account.php?id=$user_id&token=$token</p>";
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

      if(!$mail->send()) {
          echo 'Message could not be sent.';
          echo 'Mailer Error: ' . $mail->ErrorInfo;
      } 
      else {?>
          <?php echo 'Message has been sent';exit();?>
          <script type="text/javascript">
            window.location.href = "login.php";
          </script>
          <?php ;}
      }

  }

?>


<?php if (!empty($errors)) : ?>
  <div class="alert alert-danger">
    <p>Vous n'avez pas rempli le formulaire correctement</p>
    <ul>
      <?php foreach($errors as $error): ?>
        <li><?= $error; ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
<?php endif; ?>
