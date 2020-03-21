<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\likes;
use App\User;
use Faker\Generator as Faker;

$factory->define(likes::class, function (Faker $faker) {
    return [
        'user_id'=> function(){
            return User::all()->random();
        }
    ];
});
