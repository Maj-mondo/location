<?php

require '../vendor/autoload.php';
require '../db/conn.php';
$faker = \Faker\Factory::create();
for ($i = 0; $i < 15; $i++) {
  
  $req = $pdo->prepare("INSERT INTO mechanics (first_name, last_name, address, city, phone_number, garage)
    VALUES (:first_name, :last_name, :address, :city, :phone_number, :garage)");
  $req->execute([
    'first_name' => $faker->firstName,
    'last_name' => $faker->lastName,
    'address' => $faker->address,
    'city' => $faker->city,
    'phone_number' => $faker->phoneNumber,
    'garage' => $faker->company
  ]);
}
