<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Jawaban;
use App\Models\Pertanyaan;
use App\User;
use Faker\Generator as Faker;

$factory->define(Jawaban::class, function (Faker $faker) {
    return [
        'isi'=> $faker->text(300),
        'tepat'=> false,
        'user_id'=> User::all()->random()->id,
        'pertanyaan_id' => Pertanyaan::pluck('id')->random() 
    ];
});
