<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBreweriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('breweries', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 125)->unique();
			$table->string('streetAddress', 125)->unique();
			$table->string('locality', 25);
			$table->string('region', 55);
			$table->string('postalCode', 15);
			$table->string('yearOpened', 55)->nullable();
			$table->text('story');
			$table->float('latitude');
			$table->float('longitude');
			$table->string('website', 55)->unique();
			$table->string('image', 55);
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('breweries');
	}

}
