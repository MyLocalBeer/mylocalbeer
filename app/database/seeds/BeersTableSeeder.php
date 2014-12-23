<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class BeersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		$styles = ['lager', 'porter', 'stout', 'ale'];

		foreach(range(1, 50) as $index)
		{
			$selection = mt_rand(0,3);

			Beer::create([
            'beer_name'=> $faker->firstNameFemale . ' ' . $faker->colorName,
            'beer_style'=> $styles[$selection],
            'abv'=> $faker->randomDigit,
            'description'=> $faker->text,
            'brewery_id'=> $faker->randomDigit,
            'posted'=> $faker->randomDigit

			]);
		}
	}

}
