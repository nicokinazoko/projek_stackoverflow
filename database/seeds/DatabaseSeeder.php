<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(PertanyaanTableSeeder::class);
        $this->call(JawabanTableSeeder::class);
        $this->call(KomentarPertanyaanTableSeeder::class);
        $this->call(KomentarJawabanTableSeeder::class);
        $this->call(PoinTableSeeder::class);
    }
}
