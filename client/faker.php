<?php

require '../vendor/autoload.php';
require '../db/conn.php';
$faker = \Faker\Factory::create();
for ($i = 0; $i < 15; $i++) {

  $req = $pdo->pprepare("INSERT INTO clients (first_name, last_name, cni, address, city, licence_number, role, birthdate, gender, phone_number, email, password)
    VALUES (:first_name, :last_name, :cni, :address, :city, :licence_number, :role, :birthdate, :gender, :phone_number, :email, :password)");
  $req->execute([
    'first_name' => $faker->firstName,
    'last_name' => $faker->lastName,
    'cni' => $faker->bankAccountNumber,
    'address' => $faker->address,
    'city' => $faker->city,
    'licence_number' => $faker->bankAccountNumber,
    'role' => $faker->/* ? */,
    'birthdate' => $faker->date($format = 'Y-m-d', $min = '2000-06-09'),
    'gender' => $faker->/* ? */,
    'phone_number' => $faker->phoneNumber,
    'email' => $faker->mail,
    'password' => $faker->password
  ]);
}
