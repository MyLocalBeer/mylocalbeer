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
		$validator = Validator::make($data = Input::all(), Beer::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Beer::create($data);

		return Redirect::route('beers.index');
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
		$beer = Beer::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Beer::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$beer->update($data);

		return Redirect::route('beers.index');
	}

	/**
	 * Remove the specified beer from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Beer::destroy($id);

		return Redirect::route('beers.index');
	}

}
