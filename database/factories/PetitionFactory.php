<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Petition;
use Faker\Generator as Faker;

$factory->define(Petition::class, function (Faker $faker) {
    return [
        'title' => $this->faker->word,
        'category' => $this->faker->text(50),
        'description' => $this->faker->text(200),
        'author' => $this->faker->name,
        'signee' => $this->faker->numberBetween(0,100000),
    ];
});
