<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
//use Laracasts\TestDummy\Factory;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		// $this->call('UserTableSeeder');
		//$this->call('UsersTableSeeder');
		$this->call('ArticlesTableSeeder');
		$this->call('TagsTableSeeder');
		/*for ($i=0; $i < 100; $i++) { 
			Factory::create('\App\Article');
		}*/
	}

}
