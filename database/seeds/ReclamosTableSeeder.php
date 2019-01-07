<?php

use Illuminate\Database\Seeder;

use App\Reclamo;

class ReclamosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Reclamo::class, 10)->create();
    }
}
