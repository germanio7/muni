<?php

use Illuminate\Database\Seeder;

use App\Reclamo;

class ReclamosTableSeeder extends Seeder
{
    public function run()
    {
        factory(Reclamo::class, 10)->create();
    }
}
