<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class LocationsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 20) as $index)
		{
			Location::create([
            'establishment'=> $faker->firstNameMale . "'s",
            'address'=> $faker->address
			]);
		}
	}

}
