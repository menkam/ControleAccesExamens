<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Models\User::class, function (Faker $faker) {
    static $password;
    return [
        'name' => $faker->firstName,
        'prenom' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'telephone' => $faker->numberBetween(65000000,67777777),
        'date_nais' => $faker->date('Y-m-d','2000-01-01'),
        'photo' => 'user.png',
        'password' => $password ?: $password = bcrypt('000000'),
        'remember_token' => str_random(10),
    ];
});
