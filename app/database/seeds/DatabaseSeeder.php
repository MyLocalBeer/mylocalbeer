<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
		
		DB::table('breweries')->delete();
		DB::table('users')->delete();
		DB::table('beers')->delete();
		
		$this->call('BreweriesTableSeeder');
		$this->call('UsersTableSeeder');
		$this->call('BeersTableSeeder');
		$this->call('LocationsTableSeeder');
		$this->call('RolesTableSeeder');
	}

}
