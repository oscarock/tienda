<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
        	[
	        	'name' => 'Oscar',
	        	'last_name' => 'Diaz',
	        	'email' => 'prueba1@prueba1.com',
	        	'password' => \Hash::make('123456'),
	        	'profile' => 'admin',
	        	'active' => 1,
	        	'address' => 'Cra 100',
	        	'created_at' => new DateTime,
	        	'updated_at' => new DateTime
        	],

        	[
				'name' => 'Felipe',
	        	'last_name' => 'Diaz',
	        	'email' => 'prueba2@prueba2.com',
	        	'password' => \Hash::make('123456'),
	        	'profile' => 'user',
	        	'active' => 1,
	        	'address' => 'Cra 170',
	        	'created_at' => new DateTime,
	        	'updated_at' => new DateTime        	
        	],
        );

        User::insert($data);
    }
}