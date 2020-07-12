<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use App\Models\Jawaban;
use App\Models\KomentarJawaban;
use Faker\Generator as Faker;

$factory->define(KomentarJawaban::class, function (Faker $faker) {
    return [
        'isi'=>$faker->text(200),
        'user_id' => User::pluck('id')->random(),
        'jawaban_id' => Jawaban::pluck('id')->random()
    ];
});
