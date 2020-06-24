<?php

use App\Model;
use Faker\Generator as Faker;

$factory->define(Todo::class, function (Faker $faker) {
    return [
      'title' => $faker->sentence(3),
      'description' => $faker->paragraph(4),
      'completed'=> false
    ];
});
