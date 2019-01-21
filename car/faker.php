<?php

require '../vendor/autoload.php';
require '../db/conn.php';

$req = $pdo->prepare("SELECT * FROM car_models");
$req->execute();
$models = $req->fetchAll();
$req = $pdo->prepare("SELECT * FROM providers");
$req->execute();
$providers = $req->fetchAll();

$faker = \Faker\Factory::create();
for ($i = 0; $i < 15; $i++) {
  $req = $pdo->prepare("INSERT INTO cars (serial_number, price, currency, model_id, provider_id) VALUES (:serial_number, :price, :currency, :model_id, :provider_id)");
  $req->execute([
    'serial_number' => substr($faker->safeHexColor, 1),
    'price' => $faker->numberBetween(2 * 1000 * 1000 + 500 * 1000, 10 * 1000 * 1000),
    'currency' => $faker->currencyCode,
    'model_id' => $faker->randomElement(array_map(function ($model) {
      return $model->id;
    }, $models)),
    'provider_id' => $faker->randomElement(array_map(function ($provider) {
      return $provider->id;
    }, $providers))
  ]);
}
    header('location: /car');
    die();

