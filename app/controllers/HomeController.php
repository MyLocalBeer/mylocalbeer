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
        $data['map'] = $this->mapData();
		return View::make('hello')->with($data);
	}
    
    private function mapData()
    {
        // $this->load->library('googlemaps');

        $config = array();
        $config['center'] = 'auto';
        $config['onboundschanged'] = 'if (!centreGot) {
            var mapCentre = map.getCenter();
            marker_0.setOptions({
                position: new google.maps.LatLng(mapCentre.lat(), mapCentre.lng())
            });
        }
        centreGot = true;';
        Gmaps::initialize($config);
        
        $marker = array();
        Gmaps::add_marker($marker);
        return Gmaps::create_map();

    }
    
    // public function index()
    // {

    //     $var = Input::get('search');
    //     $queries = Location::with('beer');

    //     if (Input::has('search')){
    //         $queries->where('beer_name', 'like', "%$var%")
    //                 ->where('abv'), 'like', "%$var%")
    //                 ->orWhere('beer_style', 'like', "%$var%");
    //     }

    //     $locations = $queries->orderBy('establishment', 'asc')->paginate(5);
    //     return View::make('hello')->with('locations', $locations)->with('var', $var);

    // }

    public function welcome()
    {
        return View::make('welcome');
    }

}
