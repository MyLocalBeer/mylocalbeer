<?php

class BeersController extends \BaseController {

	/**
	 * Display a listing of beers
	 *
	 * @return Response
	 */
	public function index()
	{
		$beers = Beer::all();

		return View::make('beers.index', compact('beers'));
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

		return View::make('beers.index', compact('beer'));
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
