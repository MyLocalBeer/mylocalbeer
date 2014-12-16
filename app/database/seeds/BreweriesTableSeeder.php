<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class BreweriesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Brewery::create([
            'brewery_name'=> $faker->firstNameFemale,
            'location'=> $faker->address,
            'story'=> $faker->text
			]);
		}
	}

}
