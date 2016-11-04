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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'username' => $faker->username,
        'email' => $faker->safeEmail,
        'role_level' => 1,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->defineAs(App\User::class, 'admin', function () use ($factory) {
    $user = $factory->raw(App\User::class);

    return array_merge($user, ['role_level' => 2, 'password' => bcrypt('123pass')]);
});

$factory->define(App\Role::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word,
        'level' => 1,
    ];
});