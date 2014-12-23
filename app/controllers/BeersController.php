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
                if(!Entrust::hasRole('admin') && !Entrust::hasRole('provider')) {
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
		$query = Beer::with('breweries');
		$search = Input::get('search');
		
		if(Input::has('search')){
			$searchTerms = explode(' ', $search);
			foreach($searchTerms as $term)
			{
				$query->where('beer_name', 'like', "%$term%");
			}
		}
		$beers = $query->orderBy('beer_name', 'ASC')->paginate(10);
		return View::make('beers.index')->with('beers', $beers)->with('search', $search);
		
		// $beers = Beer::all();

		// return View::make('beers.index', compact('beers'));
	}

	/**
	 * Show the form for creating a new beer
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('beers.create');
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

		return View::make('beers.edit', compact('beer'));
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
		
		$beer->beer_name = Input::get('beer_name');
		$beer->beer_style  = Input::get('beer_style');
		$beer->abv  = Input::get('abv');
		$beer->description  = Input::get('description');
		$beer->brewery_id  = Input::get('brewery_id');
		$beer->save();

		Session::flash('successMessage', "Beer saved successfully");
		return Redirect::action('BeersController@index');
	}

}
