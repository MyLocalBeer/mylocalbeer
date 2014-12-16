<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class BeersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Beer::create([
            'beer_name'=> $faker->colorName,
            'beer_style'=> $faker->safeColorName,
            'abv'=> $faker->randomDigit,
            'description'=> $faker->text,
            'brewery_id'=> $faker->randomDigit,
            'posted'=> $faker->randomDigit

			]);
		}
	}

}
