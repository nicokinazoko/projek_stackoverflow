<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Poin;
use App\Models\Pertanyaan;
use App\Models\Jawaban;
use App\User;
use Faker\Generator as Faker;

$factory->define(Poin::class, function (Faker $faker) {
    $sample=[];
    $random = $faker->randomElement([0,1]);
    $downvote = 0;
    $upvote = $faker->randomElement([0,10]);
    ($upvote == 0)?$downvote = 1:$downvote = 0;
    if ($random == 1) {
        $sample =[
            'user_id' => User::pluck('id')->random(),
            'pertanyaan_id' => Pertanyaan::pluck('id')->random(),
            // 'jawaban_id' => null,
            'upvote' => $upvote,
            'downvote' => $downvote
        ];
    }else{
        $sample = [
            'user_id' => User::pluck('id')->random(),
            // 'pertanyaan_id' => null,
            'jawaban_id' => Jawaban::pluck('id')->random(),
            'upvote' => $upvote,
            'downvote' => $downvote 
        ];
    }

    return $sample;
});
