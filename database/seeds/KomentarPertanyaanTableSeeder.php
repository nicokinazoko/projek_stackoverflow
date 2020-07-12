<?php

use Illuminate\Database\Seeder;
use App\Models\KomentarPertanyaan;

class KomentarPertanyaanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(KomentarPertanyaan::class, 8)->create();
    }
}
