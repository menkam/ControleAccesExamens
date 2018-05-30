<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Etudiant::class, function (Faker $faker) {
    return [
        'matricule_etudiant'=> 'CM-UDS-16IUT'+$faker->numberBetween(0001,9999),
        'diplome_entre'=> 'BAC-',
        'id_user'=> $faker->numberBetween(5,104),
    ];
});

$factory->define(App\Models\Role_user::class, function (Faker $faker) {
    return [
        'role_id'=> 3,
        'user_id'=> $faker->numberBetween(5,104),
    ];
});