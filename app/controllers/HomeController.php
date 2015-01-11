<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

    public function index()
    {
        $var = Input::get('search');
        $queries = Location::with(['beers', 'beers.breweries']);
        $locations = Location::whereHas('beers', function($q){
            $q->with('breweries');
        })->first();
        if (Input::has('search')){
            $queries->whereHas('beers', function($q) use ($var) {
                $q->where('beer_name', 'like', "%$var%");
            });
            $queries->orWhereHas('beers', function($q) use ($var) {
                $q->where('beer_style', 'like', "%$var%");
            });
        }

        $locations = $queries->orderBy('establishment', 'asc')->get();
        return View::make('hello')->with('locations', $locations)->with('var', $var);

    }

    public function welcome()
    {
        return View::make('welcome');
    }

}

