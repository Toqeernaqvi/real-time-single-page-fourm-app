<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\category;
use App\Model\Question;
use Faker\Generator as Faker;
use App\User;
$factory->define(Question::class, function (Faker $faker) {
    $title  = $faker->sentence();
    return [
         'title'=> $title, 
         'slug'=> str_slug($title),
         'body'=> $faker->text,
         'category_id' => function(){
             return category::all()->random();
         },
         'user_id'=> function(){
             return User::all()->random();
         }
    ];
});
