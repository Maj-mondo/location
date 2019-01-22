<?php

require '../vendor/autoload.php';
require '../db/conn.php';
$faker = \Faker\Factory::create();
for ($i = 0; $i < 15; $i++) {
  /**
   *
   * <th>#</th>
   * <th>Nom</th>
   * <th>Code postal</th>
   * <th>Ville</th>
   * <th>CNI</th>
   * <th>Tel</th>
   */
  $req = $pdo->prepare("INSERT INTO drivers (first_name, last_name, cni, address, city, license_number, birthdate, gender, phone_number)
    VALUES (:first_name, :last_name, :cni, :address, :city, :license_number, :birthdate, :gender, :phone_number)");
  $req->execute([
    'first_name' => $faker->firstName,
    'last_name' => $faker->lastName,
    'cni' => $faker->bankAccountNumber,
    'address' => $faker->address,
    'city' => $faker->city,
    'license_number' => $faker->bankAccountNumber,
    'birthdate' => $faker->date($format = 'Y-m-d', $min = '2000-06-09'),
    'gender' => $faker->title($gender = 'male'|'female'),
    'phone_number' => $faker->phoneNumber
  ]);
}
