
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login | Car-Car</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="assets/images/favicon.ico"/>
    <!-- Font Awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css"/> 
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Animate css -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css"/>  
     <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/pink-theme.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/stylelogin.css">
    <!-- Main Style -->
    <!-- Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <!-- Open Sans for body font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- Raleway for Title -->
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <!-- Pacifico for 404 page   -->
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <style>
      .full_form_page {
      font-family: Graphik, sans-serif;
      background: #b30047;
      background-image: radial-gradient(circle farthest-corner at right bottom, #e6005c 0%, #b30047 28%, #660029 79%, #1a000a 100%);
      height: 100%;
      background-attachment: fixed; }
      .full_form_page .title {
      margin-bottom: 1.5rem; }
      .full_form_page .title a {
      color: #fff;
      text-decoration: none; }
      .full_form_page .title a:hover {
      color: #f2f1f8; }
      .full_form_page .sub_title {
      font-size: 1.2rem;
      margin: .5em auto 1.5em auto; }
      .full_form_page .form_wrapper {
      width: 450px; }
      .full_form_page .form_wrapper a {
      text-decoration: none;
      color: #777; }
      .full_form_page .form_wrapper a:hover {
      text-decoration: underline; }
      .full_form_page .form_wrapper .button {
      width: 100%;
      max-width: 100%;
      border-radius: 4px; }
      .full_form_page footer {
      margin-top: 2rem;
      color: #666; }
</style>
  <body class="login full_form_page ">  
 <h3>Car-Car</h3>
<div class="bg-text" style="border-radius: .35em;background-color: #fff">
  <h2>Connexion</h2>
  <h1><i class="glyphicon glyphicon-user"></i></h1>
  <p style="color: black">Veuillez vous connecter à votre compte pour effectuer des transactions.</p>  
           
  <form class="comment-form" action="client.php">
    <div class="form-group">                
      <input type="text" placeholder="Login" class="form-control">
    </div>
     <div class="form-group">                
      <input type="password" placeholder="Password" class="form-control">
    </div>              
    <div class="row">
      <div class="col-md-4">
        <a href="index.php"><button type="button" class="btn btn-outline-danger">Annuler</button>
        </a>      
      </div>
      <div class="col-md-4">
        
      </div>
      <div class="col-md-4">
        <a href="client.php"><button type="button" class="btn btn-outline-success">Connexion</button></a>    
      </div>
    </div>                   
  </form>
  <br>
    <div>
      <span style="color: #333333">Vous n'êtes pas encore inscrit <a href="register.php" style="font-style: italic;font-size: 15px;color: red">Cliquer ici !</a></span>
    </div> 
</div>

  
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <!-- Bootstrap -->
  <script src="assets/js/bootstrap.js"></script>
  <!-- Slick Slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="assets/js/waypoints.js"></script>
  <script type="text/javascript" src="assets/js/jquery.counterup.js"></script>
  <!-- mixit slider -->
  <script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>
  <!-- Wow animation -->
  <script type="text/javascript" src="assets/js/wow.js"></script> 

  <!-- Custom js -->
  <script type="text/javascript" src="assets/js/custom.js"></script>
  </body>
</html>