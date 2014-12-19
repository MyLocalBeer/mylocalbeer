<?php

class BreweriesController extends \BaseController {

	/**
	 * Display a listing of breweries
	 *
	 * @return Response
	 */
	public function request()
	{
		$bdb = new Pintlabs_Service_Brewerydb($_ENV['BREWERYDB_API_KEY']);
		$bdb->setFormat('json'); // if you want to get php back.  'xml' and 'json' are also valid options.
		$params = ['locality' => 'San Antonio'];
	    // The first argument to request() is the endpoint you want to call
	    // 'brewery/BrvKTz', 'beers', etc.
	    // The third parameter is the HTTP method to use (GET, PUT, POST, or DELETE)
    	$results = $bdb->request('locations', $params, 'GET'); // where $params is a keyed array of parameters to send with the API call.
    	dd($results['data']);
	}
	
	public function search ()
	{
		return View::make('breweries.search');
	}
	
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

		$brewery = new Brewery();
		return $this->saveBrewery($brewery);

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

		return View::make('breweries.index', compact('brewery'));
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
		$brewery = Brewery::find($id);
		return $this->saveBrewery($brewery);
	}

	/**
	 * Remove the specified brewery from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$brewery = Brewery::findOrFail($id);
		$brewery->delete();

		return Redirect::action('BreweriesController@index');
	}

	public function saveBrewery(Brewery $brewery)
	{
		
		$brewery->brewery_name = Input::get('brewery_name');
		$brewery->location  = Input::get('location');
		$brewery->story  = Input::get('story');
		$brewery->save();

		Session::flash('successMessage', "Brewery saved successfully");
		return Redirect::action('BreweriesController@index');
	}

}
