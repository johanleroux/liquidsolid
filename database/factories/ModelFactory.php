<?php

$factory->define(App\User::class, function (Faker\Generator $faker)
{
  static $password;

  return [
    'name' => $faker->name,
    'email' => $faker->unique()->safeEmail,
    'password' => $password ?: $password = bcrypt('secret'),
    'remember_token' => str_random(10),
  ];
});

$factory->define(App\Models\DogRequest::class, function (Faker\Generator $faker)
{
  return [
    'user_id' => 1,
    'gender' => $faker->boolean,
    'breed' => $faker->word,
    'location' => $faker->sentence,
    'price_range_low' => $faker->randomFloat(2, 0, 2500),
    'price_range_high' => $faker->randomFloat(2, 2500, 10000),
    'notes' => $faker->sentence,
  ];
});
