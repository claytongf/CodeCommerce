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

$factory->define(CodeCommerce\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'phone' => $faker->phoneNumber,
        'address' => $faker->streetAddress,
        'city' => $faker->city,
        'state' => $faker->state,
        'zipcode' => $faker->postcode,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
        'is_admin' => 0
    ];
});

$factory->define(CodeCommerce\Category::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->sentence
    ];
});

$factory->define(CodeCommerce\Product::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->sentence,
        'price' => $faker->randomFloat(2, 0, 100),
        'category_id' => $faker->numberBetween(1, 15),
        'featured' => $faker->randomElement(array('yes', 'no')),
        'recommend' => $faker->randomElement(array('yes', 'no'))
    ];
});

$factory->define(CodeCommerce\OrderStatus::class, function (Faker\Generator $faker){
    return [
        'name' => $faker->word
    ];
});