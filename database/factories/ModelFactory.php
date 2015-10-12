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
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

	$factory->define(App\Emploee::class, function ($faker) {
		return [
		'name' => $faker->sentence(mt_rand(3, 10)),
		 'phone' =>(int)9600000000 + (int)mt_rand(100,999),
		 'address'=>$faker->sentence(mt_rand(3,10)),
		 'salary'=>mt_rand(1000,15000),
		 'company'=>$faker->sentence(mt_rand(3, 10)),
		'bio' => join("\n\n", $faker->paragraphs(mt_rand(3, 6))),
		'created_at' => $faker->dateTimeBetween('-1 month', '+3 days'),
		'updated_at' => $faker->dateTimeBetween('-1 month', '+3 days'),
		];
	});