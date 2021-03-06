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
// User Factory
$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});
// Post Factory
$factory->define(App\Post::class, function (Faker\Generator $faker) {
    return [
    	'title' => $faker->sentence(),
    	'short_story' => $faker->text(500),
    	'full_story' => $faker->text(2000),
    	'image' => $faker->imageUrl($width = 640, $height = 480),
    	'user_id' => App\User::all()->random(1)->id,
    ];
});
// Comment Factory
$factory->define(App\Comment::class, function (Faker\Generator $faker) {
    return [
        'comment' => $faker->text(rand(100, 1000)),
        'post_id' => App\Post::all()->random(1)->id,
        'user_id' => App\User::all()->random(1)->id,
    ];
});
