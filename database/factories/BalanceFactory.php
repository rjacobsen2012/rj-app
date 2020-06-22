<?php

use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(App\Models\Balance::class, function (Faker $faker) {
    return [
        'user_id' => function () {
            return factory(\App\Models\User::class)->create()->id;
        },
        'amount' => $faker->randomFloat(2, 1, 5000),
        'label_id' => function () {
            return factory(\App\Models\Label::class)->create()->id;
        },
        'date' => $faker->dateTime(),
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ];
});
