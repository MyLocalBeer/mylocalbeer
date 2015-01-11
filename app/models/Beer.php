<?php

class Beer extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
        'beer_name'=> 'required|max:100',
        'beer_style'=> 'required|max:55',
        'abv'=> 'required|max:10',
        'description'=>'required',
        'posted'=> 'required|max:11',
        'brewery_id'=> 'required'
	];

	// Don't forget to fill this array
	protected $table = 'beers';

	public function brewery()
	{
		return $this->belongsTo('Brewery');
	}	
    
    public function locations()
    {
        return $this->belongsToMany('Location');
    }

}
