<?php

require '../vendor/autoload.php';
require '../db/conn.php';
$faker = \Faker\Factory::create();
for ($i = 0; $i < 15; $i++) {

  $req = $pdo->prepare("INSERT INTO agencies (name, postal_code, address, opening, closing, working_day, city, phone)
    VALUES (:name, :postal_code, :address, :opening, :closing, :working_day, :city, :phone)");

  $req->execute([
    'name' => $faker->company,
    'postal_code' => $faker->postcode,
    'city' => $faker->city,
    'phone' => $faker->phoneNumber,
    'address' => $faker->address,
    'opening' => $faker->/*?*/,
    'closing' => $faker->/*?*/,
    'working_day' => $faker->/*?*/
  ]);
}
