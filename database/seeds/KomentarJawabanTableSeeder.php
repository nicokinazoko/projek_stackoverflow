<?php

use Illuminate\Database\Seeder;
use App\Models\KomentarJawaban;

class KomentarJawabanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(KomentarJawaban::class,8)->create();
    }
}
