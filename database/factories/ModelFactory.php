<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Article::class, function (Faker\Generator $faker) {

/*
$factory->define(App\User::class, function (Faker\Generator $faker) {

    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
   

    return [
    	'name' => $faker->name,
    	'email' => $faker->safeEmail,
    	'password' => bcrypt('password'),
    	'remember_token' => str_random(10),
    ];
     */

    $date = $faker->dateTimeThisMonth;

    return[
    	'title' => $faker->sentence(),
    	'content' => $faker->paragraph(),
    	'created_at' => $date,
    	'updated_at' => $date,
    ];

});
