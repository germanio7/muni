<?php

use Illuminate\Database\Seeder;

use App\Estado;

class EstadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Estado::create([
        	'estado' => 'activo',
        ]);

        Estado::create([
        	'estado' => 'resuelto',
        ]);

        Estado::create([
        	'estado' => 'pendiente',
        ]);
    }
}
