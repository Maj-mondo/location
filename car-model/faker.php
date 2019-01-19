<?php

require '../vendor/autoload.php';
require '../db/conn.php';
$faker = \Faker\Factory::create();
for ($i = 0; $i < 15; $i++) {
  $req = $pdo->prepare("INSERT INTO car_models (name) VALUES (:name)");
  $req->execute([
    'name' => $faker->company
  ]);
}
