<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Product;

class ProductTableSeeder extends Seeder {

	/**
	 * Run the Products table seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$data = array(
			[
				'name' 			=> 'Chaqueta Militar',
				'description' 	=> 'Chaqueta militar para hombre para los dias de frio',
				'price' 		=> 275.00,
				'image' 		=> 'http://pepeganga.vteximg.com.br/arquivos/ids/298320-600-600/243G669-801101-1.jpg?v=636524206877030000',
				'state' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 2
			],
			[
				'name' 			=> 'Chaqueta Negra',
				'description' 	=> 'Chaqueta liviana',
				'price' 		=> 289.00,
				'image' 		=> 'https://thermos.com.co/wp-content/uploads/sites/18/2017/08/chaqueta-Quilt-mujer-negro-1.jpg',
				'state' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
			[
				'name' 			=> 'Camiseta gris',
				'description' 	=> 'Camiseta para los dias de calor',
				'price' 		=> 475.00,
				'image' 		=> 'http://rlv.zcache.com/funny_computer_geek_t_shirt_tshirt-r537052a6a7b94b028e47b274c099fe24_804g5_324.jpg',
				'state' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 2
			],
			[
				'name' 			=> 'Chaqueta Militar',
				'description' 	=> 'Chaqueta militar para hombre para los dias de frio',
				'price' 		=> 275.00,
				'image' 		=> 'http://pepeganga.vteximg.com.br/arquivos/ids/298320-600-600/243G669-801101-1.jpg?v=636524206877030000',
				'state' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 2
			],
			[
				'name' 			=> 'Chaqueta Negra',
				'description' 	=> 'Chaqueta liviana',
				'price' 		=> 289.00,
				'image' 		=> 'https://thermos.com.co/wp-content/uploads/sites/18/2017/08/chaqueta-Quilt-mujer-negro-1.jpg',
				'state' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
			[
				'name' 			=> 'Camiseta gris',
				'description' 	=> 'Camiseta para los dias de calor',
				'price' 		=> 475.00,
				'image' 		=> 'http://rlv.zcache.com/funny_computer_geek_t_shirt_tshirt-r537052a6a7b94b028e47b274c099fe24_804g5_324.jpg',
				'state' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 2
			],
		);

		Product::insert($data);

	}

}