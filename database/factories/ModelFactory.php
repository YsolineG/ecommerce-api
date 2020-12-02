<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

// use App\User;
// use Faker\Generator as Faker;

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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
    ];
});

$factory->define(App\Product::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'price' => $faker->randomDigit,
        'description'=>$faker->text,
        'stock'=>$faker->randomDigit
    ];
});

$factory->define(App\Category::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
    ];
});

$factory->define(App\Customer::class, function (Faker\Generator $faker) {
    return [
        'name'=> $faker->name,
        'firstname'=> $faker->firstName,
        'adress'=> $faker->address,
    ];
});

$factory->define(App\Order::class, function (Faker\Generator $faker) {
    return [
        'ordered_date' => $faker->dateTime,
    ];
});
