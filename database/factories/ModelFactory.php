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

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'activation_code' => $faker->sha256(),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10)
    ];
});

$factory->define(App\Company::class, function (Faker $faker) {
    return [
        'user_id' => function(){
            return factory('App\User')->create();
        },
        'industry_id' => random_int(1, 21),
        'country_id' => random_int(1, 246),
        'type' => $faker->randomElement($array = array("business", "financier")),
        'name' => $faker->company,
        'avatar' => 'default.jpg',
        'address' => $faker->address,
        'city' => $faker->city
    ];
});
