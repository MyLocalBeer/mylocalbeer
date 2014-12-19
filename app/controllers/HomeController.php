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
        
        // return $data;

        // return View::make('hello')->with($data);

        // $this->load->view('view_file', $data);
    }

    public function welcome()
    {
        return View::make('welcome');
    }

}
