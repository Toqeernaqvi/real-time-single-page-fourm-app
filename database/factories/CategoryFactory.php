<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\category;
use Faker\Generator as Faker;

$factory->define(category::class, function (Faker $faker) {
    $word = $faker->word;
    return [
       'name' => $word,
       'slug' => str_slug($word)
    ];
});
