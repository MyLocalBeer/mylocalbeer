<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class LocationsTableSeeder extends Seeder {

	public function run()
	{
		$location = new Location;
		$location->establishment="Blue Star Brewery";
		$location->address="1414 South Alamo Street, San Antonio, TX 78210";
		$location->lat="29.409739";
		$location->long="-98.495307";
		$location->save();

		$location = new Location;
		$location->establishment="Esquire Tavern";
		$location->address="155 East Commerce Street, San Antonio, TX 78205";
		$location->lat="29.425072";
		$location->long="-98.491806";
		$location->save();

		$location = new Location;
		$location->establishment="The Friendly Spot";
		$location->address="943 South Alamo Street, San Antonio, TX 78205";
		$location->lat="29.414855";
		$location->long="-98.490805";
		$location->save();

		$location = new Location;
		$location->establishment="Alamo Street Eat Bar";
		$location->address="609 South Alamo Street, San Antonio, TX 78205";
		$location->lat="29.417894";
		$location->long="-98.488453";
		$location->save();

		$location = new Location;
		$location->establishment="Ticket Sports Pub";
		$location->address="420 East Houston Street, San Antonio, TX 78205";
		$location->lat="29.426542";
		$location->long="-98.488123";
		$location->save();

		$location = new Location;
		$location->establishment="Bonham Exchange";
		$location->address="411 Bonham, San Antonio, TX 78205";
		$location->lat="29.426862";
		$location->long="-98.484267";
		$location->save();

		$location = new Location;
		$location->establishment="Pat O'Briens";
		$location->address="121 Alamo Plaza, San Antonio, TX 78205";
		$location->lat="29.424665";
		$location->long="-98.487311";
		$location->save();

		$location = new Location;
		$location->establishment="Liberty Bar";
		$location->address="1111 South Alamo Street, San Antonio, TX 78210";
		$location->lat="29.412540";
		$location->long="-98.492202";
		$location->save();

		$location = new Location;
		$location->establishment="The Brooklynite";
		$location->address="516 Brooklyn Avenue, San Antonio, TX 78215";
		$location->lat="29.433208";
		$location->long="-98.484512";
		$location->save();

		$location = new Location;
		$location->establishment="Bar America";
		$location->address="723 South Alamo Street, San Antonio, TX 78205";
		$location->lat="29.417008";
		$location->long="-98.488738";
		$location->save();

		$location = new Location;
		$location->establishment="Bar 1919";
		$location->address="1420 South Alamo Street, San Antonio, TX 78204";
		$location->lat="29.409890";
		$location->long="-98.495747";
		$location->save();

		$location = new Location;
		$location->establishment="Tucker's Kozy Korner";
		$location->address="1338 East Houston Street, San Antonio, TX 78205";
		$location->lat="29.425009";
		$location->long="-98.476576";
		$location->save();

		$location = new Location;
		$location->establishment="Beethoven Maennerchor Halle";
		$location->address="422 Pereida Street, San Antonio, TX 78210";
		$location->lat="29.412040";
		$location->long="-98.491732";
		$location->save();

		$location = new Location;
		$location->establishment="The Saint";
		$location->address="800 Lexington Avenue, San Antonio, TX 78212";
		$location->lat="29.438230";
		$location->long="-98.493507";
		$location->save();

		$location = new Location;
		$location->establishment="Ocho";
		$location->address="1015 Navarro Street, San Antonio, TX 78205";
		$location->lat="29.431072";
		$location->long="-98.489871";
		$location->save();

		$location = new Location;
		$location->establishment="Luke";
		$location->address="125 East Houston Street, San Antonio, TX 78205";
		$location->lat="29.427016";
		$location->long="-98.492875";
		$location->save();

		$location = new Location;
		$location->establishment="";
		$location->address="";
		$location->lat="";
		$location->long="";
		$location->save();

		$location = new Location;
		$location->establishment="";
		$location->address="";
		$location->lat="";
		$location->long="";
		$location->save();
	}

}
