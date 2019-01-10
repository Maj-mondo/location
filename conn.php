<?php

try {
  $db_config = [
    'SGBD' => 'mysql',
    'HOST' => 'localhost',
    'DB_NAME' => 'db_location',
    'USER' => 'location',
    'PASSWORD' => 'location',
  ];
  $pdo = new PDO($db_config['SGBD'] . ':host=' . $db_config['HOST'] . ';dbname=' . $db_config['DB_NAME'],
    $db_config['USER'],
    $db_config['PASSWORD']);
  unset($db_config);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_BOTH);
} catch (Exception $e) {
  trigger_error($e->getMessage(), E_USER_ERROR);
  die("Unable to connect to database" . $e->getMessage());
}
