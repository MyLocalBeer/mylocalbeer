<?php

class BreweriesController extends \BaseController {

	/**
	 * Display a listing of breweries
	 *
	 * @return Response
	 */
	public function index()
	{
		$breweries = Brewery::all();

		return View::make('breweries.index', compact('breweries'));
	}

	/**
	 * Show the form for creating a new brewery
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('breweries.create');
	}

	/**
	 * Store a newly created brewery in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Brewery::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Brewery::create($data);

		return Redirect::route('breweries.index');
	}

	/**
	 * Display the specified brewery.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$brewery = Brewery::findOrFail($id);

		return View::make('breweries.show', compact('brewery'));
	}

	/**
	 * Show the form for editing the specified brewery.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$brewery = Brewery::find($id);

		return View::make('breweries.edit', compact('brewery'));
	}

	/**
	 * Update the specified brewery in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$brewery = Brewery::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Brewery::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$brewery->update($data);

		return Redirect::route('breweries.index');
	}

	/**
	 * Remove the specified brewery from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Brewery::destroy($id);

		return Redirect::route('breweries.index');
	}

}
