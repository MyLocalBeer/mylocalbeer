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

	public function showLogin()
    {
        return View::make('login');
    }

	public function doLogin()
    {
        $email = Input::get('email');
        $password = Input::get('password');

        if (Auth::attempt(array('email' => $email, 'password' => $password))) {
            return Redirect::action('BeersController@index');
        } else {
            Session::flash('errorMessage', 'Failed to authenticate.');

            return Redirect::back();
        }
    }

	public function doLogout()
	{
		Auth::logout();
		return Redirect::action('BeersController@index');
	}
    
    private function mapData()
    {
        // $this->load->library('googlemaps');

        $config['center'] = '37.4419, -122.1419';
        $config['zoom'] = 'auto';
        Gmaps::initialize($config);

        $marker = array();
        $marker['position'] = '37.429, -122.1419';
        Gmaps::add_marker($marker);
        // $data = array();
        return Gmaps::create_map();
        
        // return $data;

        // return View::make('hello')->with($data);

        // $this->load->view('view_file', $data);
    }


	public function setUsernameAttribute($value)
	{
	    $this->attributes['username'] = strtolower($value);
	}

	public function newUser()
	{
		return View::make('new-user');
	}

	// public funtion saveUser()
	// {

	// }

}
