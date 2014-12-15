<?php

class Brewery extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'brewery_name'=> 'required|max:55',
		'location'=> 'required|max:255',
		'story'=> 'required|max:100'
	];

	// Don't forget to fill this array
	protected $table = 'breweries';

}