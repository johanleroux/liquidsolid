<?php

$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
  static $password;

  return [
    'name' => $faker->name,
    'email' => $faker->unique()->safeEmail,
    'password' => $password ?: $password = bcrypt('secret'),
    'remember_token' => str_random(10),
    'company' => $faker->company,
    'street' => $faker->streetAddress,
  ];
});

$factory->define(App\Models\Breed::class, function (Faker\Generator $faker) {
  return [
    'name' => $faker->unique()->word,
  ];
});

$factory->define(App\Models\Ad::class, function (Faker\Generator $faker) {
  return [
    'user_id' => $faker->numberBetween(1, 2),
    'breed_id' => $faker->numberBetween(1, 50),

    'title' => $faker->sentence(3),
    'location' => $faker->address,
    'description' => $faker->paragraph,

    'price' => $faker->randomFloat(2, 1500, 25000)
  ];
});
