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
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Goods::class, function (Faker\Generator $faker) {
        return [
            'user_id'=>$faker->randomDigitNotNull,
            'name'=>$faker->name,
            'pic'=>$faker->image($dir = '/tmp', $width = 640, $height = 480),
            'price'=>$faker->buildingNumber,
            'time'=>$faker->randomDigitNotNull,
            'unit'=>$faker->randomDigitNotNull,
            'created_at'=>$faker->dateTime,
            'updated_at'=>$faker->dateTime
        ];
});
