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
  $req = $pdo->prepare("INSERT INTO providers (name, postal_code, city, cni, phone, address) VALUES (:name, :postal_code, :city, :cni, :phone, :address)");
  $req->execute([
    'name' => $faker->company,
    'postal_code' => $faker->postcode,
    'city' => $faker->city,
    'cni' => $faker->bankAccountNumber,
    'phone' => $faker->phoneNumber,
    'address' => substr($faker->address, 0, 30)
  ]);
}
success('fournisseurs ajoutés');
    header('location: /fournisseur');
    die();
