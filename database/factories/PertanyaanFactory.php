<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Pertanyaan;
use App\User;
use Faker\Generator as Faker;

$factory->define(Pertanyaan::class, function (Faker $faker) {
    return [
        'judul'=> $faker->sentence(6,true),
        'isi'=> $faker->text(200) ,
        'tag'=> join(',',$faker->words(4,false)),
        'user_id'=> User::all()->random()->id
    ];
});
