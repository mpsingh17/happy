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
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
    ];
});

$factory->define(App\Post::class, function (Faker\Generator $faker) {
    
    return [
        'title' => $faker->word,
        'body'  => $faker->paragraph(1),
        'image' => $faker->randomElement(['img1.jpg', 'img2.jpg', 'img3.jpg']),
        'user_id'  => $faker->numberBetween(1,10)
    ];
});

$factory->define(App\Comment::class, function (Faker\Generator $faker) {
    
    return [
        'body'    => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'user_id'  => $faker->numberBetween(1,10),
        'post_id'  => $faker->numberBetween(1,20),
    ];
});

