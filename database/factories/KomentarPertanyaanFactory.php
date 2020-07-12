<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use App\Models\Pertanyaan;
use App\Models\KomentarPertanyaan;
use Faker\Generator as Faker;

$factory->define(KomentarPertanyaan::class, function (Faker $faker) {
    return [
        'isi'=>$faker->text(200),
        'user_id' => User::pluck('id')->random(),
        'pertanyaan_id' => Pertanyaan::pluck('id')->random()
    ];
});
