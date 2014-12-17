<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBeerLocationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('beer_location', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('beer_id')->unsigned()->index();
			$table->foreign('beer_id')->references('id')->on('beers')->onDelete('cascade');
			$table->integer('location_id')->unsigned()->index();
			$table->foreign('location_id')->references('id')->on('locations')->onDelete('cascade');
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
		Schema::drop('beer_location');
	}

}
