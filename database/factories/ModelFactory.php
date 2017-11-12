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

$factory->define(App\Restaurant::class, function (Faker\Generator $faker) {


    return [
        'name' => $faker->name,
        'type' => $faker->name,
        'address' => $faker->address,
        'phone' => $faker->e164PhoneNumber,
        'delivery_price' => $faker->randomFloat($nbMaxDecimals=null, $min=10 , $max=100),
        'working_time'=>$faker->name,
        'rate'=>$faker->numberBetween($min=0 , $max=5),
    ];
});


$factory->define(App\Food::class, function (Faker\Generator $faker){

    return [
        'restaurant_id'=>$faker->numberBetween($min=1, $max=10),
        'name'=>$faker->name,
        'description'=>$faker->text,
        'type'=>$faker->name,
        'price' => $faker->randomFloat($nbMaxDecimals=null, $min=10 , $max=100),
        'rate'=>$faker->numberBetween($min=0 , $max=5),


    ];
});
