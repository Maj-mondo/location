<?php
  if (!empty($_POST)) {
    if(isset($_POST['lat']) && isset($_POST['lng'] && )){
      $lat = addslashes($_POST['lat']);
      $lng = addslashes($_POST['lng']);
      $adr = addslashes($_POST['adr']);
      $db = mysql_connect(SERVER, USER, PASSWORD);
      $select = mysql_select_db(DATABASE, $db);
      mysql_query('INSERT INTO agencies (lat,lng,adresse) VALUES ("'.$lat.'","'.$lng.'","'.$adr.'")');
      echo 'Vos coordonnées ont bien été insérées en base de données.';
    } else
       echo 'Problème rencontré dans les valeurs passées en paramètres';



}
?>

                <input type="text" id="adresse" placeholder="saisissez votre adresse à géolocaliser" />
                          <input type="button" onclick="geolocalise()" value="géolocaliser" />
                          Latitude : <input type="text" id="lat" value="" />
                          Longitude : <input type="text" id="lng" value="" />
                          <div id="answer">Réponse de l'appel AJAX :</div>