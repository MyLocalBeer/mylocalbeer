<?php

class Brewery extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'brewery_name'=> 'required|max:255',
		'location'=> 'required|max:255',
	];

	// Don't forget to fill this array
	protected $table = 'breweries';

	public function beers()
	{
	    return $this->hasMany('Beer');
	}
	
	public function users ()
	{
		return $this->belongsTo('User');
	}

}
