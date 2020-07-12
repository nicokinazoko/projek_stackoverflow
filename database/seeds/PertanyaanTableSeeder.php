<?php

use Illuminate\Database\Seeder;
use App\Models\Pertanyaan;

class PertanyaanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Pertanyaan::class, 4)->create();
    }
}
