<?php

require '../vendor/autoload.php';
require '../db/conn.php';
$faker = \Faker\Factory::create();
for ($i = 0; $i < 15; $i++) {

  $req = $pdo->prepare("INSERT INTO agencies (name, postal_code, address, opening, closing, working_day, city, phone)
    VALUES (:name, :postal_code, :address, :opening, :closing, :working_day, :city, :phone)");

  $days = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];
  $open = $faker->dateTime()->format('H:i');
  $req->execute([
    'name' => $faker->company,
    'postal_code' => $faker->postcode,
    'city' => $faker->city,
    'phone' => $faker->phoneNumber,
    'address' => $faker->address,
    'closing' => $open,
    'opening' => $faker->dateTime($open)->format('H:i'),
    'working_days' => implode(",", $faker->randomElements($days))
  ]);
}
