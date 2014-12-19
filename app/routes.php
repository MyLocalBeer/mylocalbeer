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
//

// Confide routes
Route::get('users/create', 'UsersController@create');
Route::post('users', 'UsersController@store');
Route::get('users/login', 'UsersController@login');
Route::post('users/login', 'UsersController@doLogin');
Route::get('users/confirm/{code}', 'UsersController@confirm');
Route::get('users/forgot_password', 'UsersController@forgotPassword');
Route::post('users/forgot_password', 'UsersController@doForgotPassword');
Route::get('users/reset_password/{token}', 'UsersController@resetPassword');
Route::post('users/reset_password', 'UsersController@doResetPassword');
Route::get('users/logout', 'UsersController@logout');


