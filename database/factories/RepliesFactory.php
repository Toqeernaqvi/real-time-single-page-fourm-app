<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Question;
use App\Model\replies;
use Faker\Generator as Faker;
use App\User;
$factory->define(replies::class, function (Faker $faker) {
    return [
       'body' => $faker->text, 
       'question_id' => function(){
           return Question::all()->random();
       },
       'user_id'=> function(){
        return User::all()->random();
    }
    ];
});
