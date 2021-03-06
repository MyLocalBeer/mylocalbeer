<?php

class BeersController extends \BaseController {
	
	public function __construct()
	{
		parent::__construct();
	    // require csrf token for all post, delete, and put actions
	    $this->beforeFilter('adminAuth', array('except'=>array('show', 'index')));
	    $this->beforeFilter
	    (
            function()
            {
                if(Entrust::hasRole('admin') || Entrust::hasRole('provider')) {
                   return Redirect::to('/');
                }
            }, array('except' =>array('index', 'show'))
        );
	}

	/**
	 * Display a listing of beers
	 *
	 * @return Response
	 */
	public function index()
	{
		if (Auth::guest())
		{
			$brewery_id = null;
		}		
		elseif(Auth::check())
		{
			$brewery_id = Auth::user()->brewery_id;
		}
		
		$query = Beer::with('brewery');
		// $search = Input::get('search');
		
		// if(Input::has('search'))
		// {
		// 	$query->orwhere('beer_name', 'like', "%{$search}%");
		// 		  // ->orWhere('beer_style', 'like', "%{$search}%");
		// }
		
		if($brewery_id != null)
		{
			$query->where('brewery_id', 'like', "$brewery_id");
		} else {
			$query = Beer::with('brewery');
		}

		$beers = $query->orderBy('beer_name', 'ASC')->paginate(100);

		// $brewery_query = Brewery::all();
		// $brewery_query->where ('brewery_id', 'like', "$brewery_id");
		// $brewery = $brewery_query;
		return View::make('beers.index')->with('beers', $beers);
		
	}

	/**
	 * Show the form for creating a new beer
	 *
	 * @return Response
	 */
	public function create()
	{
		$locations = Location::all();
		
		return View::make('partials.create_beer')->with('locations', $locations);
	}

	/**
	 * Store a newly created beer in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$beer = new Beer();
		return $this->saveBeer($beer);
	}

	/**
	 * Display the specified beer.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$beer = Beer::findOrFail($id);

		return View::make('beers.show', compact('beer'));
	}

	/**
	 * Show the form for editing the specified beer.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$beer = Beer::find($id);
		$locations = Location::all();

		return View::make('beers.edit')->with('beer', $beer)->with('locations', $locations);
	}

	/**
	 * Update the specified beer in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$beer = Beer::find($id);
		return $this->saveBeer($beer);
	}

	/**
	 * Remove the specified beer from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$beer = Beer::findOrFail($id);
		$beer->delete();

		return Redirect::action('BeersController@index');
	}

	public function saveBeer(Beer $beer)
	{
		// $location= Location::where('establishment', Input::get('beer-locations'))->first();
		// $location= Location::findOrFail($location->id);
		// dd(Input::get('beer-locations'));
		$beer->beer_name = Input::get('beer_name');
		$beer->beer_style  = Input::get('beer_style');
		$beer->abv  = Input::get('abv');
		$beer->description  = Input::get('description');
		// $beer->location = Input::get('location');
		$beer->brewery_id = Auth::user()->brewery_id;
		$beer->save();
		$locations = Input::get('beer-locations');
		$beer->locations()->sync($locations);
		Session::flash('successMessage', "Beer saved successfully");
		return Redirect::action('BeersController@index');
	}

	// public function saveRating(){

				

	// }

}

 //29.425021, -98.491779 --- long and lat for the esquire
