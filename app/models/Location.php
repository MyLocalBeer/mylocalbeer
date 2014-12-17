<?php

class Location extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];
    protected $table = 'locations';
	// Don't forget to fill this array
	protected $fillable = [];
    
    public function beers (){
        return $this->belongsToMany('Beer');
    }

}
