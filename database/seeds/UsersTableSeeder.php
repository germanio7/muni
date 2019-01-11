<?php

use Illuminate\Database\Seeder;

use App\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
        	'name' => 'admin', 
        	'email' => 'admin@mail.com', 
        	'telefono' => '1234', 
        	'direccion' => 'acanomas', 
        	'cuil' => 123456789, 
        	'nroCliente' => '1', 
        	'password' => bcrypt('123456'), 
        	'photo' => 'img/user.png',
        ]);
    }
}
