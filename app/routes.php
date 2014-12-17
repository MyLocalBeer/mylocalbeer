<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showWelcome');

Route::get('login', 'HomeController@showLogin');
Route::post('login', 'HomeController@doLogin');
Route::get('logout', 'HomeController@doLogout');

Route::resource('beers', 'BeersController');
Route::resource('breweries', 'BreweriesController');

// Route::get('/testmap', function(){
//     $config = array();
//     $config['center'] = 'auto';
//     $config['onboundschanged'] = 'if (!centreGot) {
//             var mapCentre = map.getCenter();
//             marker_0.setOptions({
//                 position: new google.maps.LatLng(mapCentre.lat(), mapCentre.lng())
//             });
//         }
//         centreGot = true;';

//     Gmaps::initialize($config);

//     // set up the marker ready for positioning
//     // once we know the users location
//     $marker = array();
//     Gmaps::add_marker($marker);

//     $map = Gmaps::create_map();
//     echo "<html><head>".$map['js']."</head><body>".$map['html']."</body></html>";
// });
