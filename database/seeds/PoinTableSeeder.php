<?php
use App\Models\Poin;
use Illuminate\Database\Seeder;

class PoinTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Poin::class, 15)->create();
    }
}
