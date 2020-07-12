<?php

use Illuminate\Database\Seeder;
use App\Models\Jawaban;

class JawabanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Jawaban::class,10)->create();
    }
}
