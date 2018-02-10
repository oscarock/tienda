<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Category;

class CategoryTableSeeder extends Seeder {

	/**
	 * Run the Categories table seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$data = array(
			[
				'name' => 'Chaquetas', 
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, perferendis!'
			],
			[
				'name' => 'Camisas', 
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, perferendis!'
			]
		);

		Category::insert($data);

	}
}