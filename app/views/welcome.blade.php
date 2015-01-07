@extends('layouts.master')
@section('content')

<div class='container welcome'>
	<div class='row'>
		<div class='col-md-6'>
				<img id='welcomelogo' src="pics/mylocallogo.png">
		</div>
		<div class='col-md-6'>
			<h1 class='lobster-text'>Welcome!</h1>

			<p class='abel-font'>You will recieve a confirmation email shortly. Click the link in the email to login and enjoy MyLocal Beer!</p>

			<p class='droid-serif'>Once you login as a user you can:</p>
			<div class='abel-font'>
				<p> - Rate local beer</p>
				<p> - Comment on location accuracy</p>
				<p> - Review different brews</p>
			</div>

			<p class='droid-serif'>Brewery? You can:</p>
			<div class='abel-font'>
				<p> - Add new craft beers to your brewery list</p>
				<p> - Update locations served</p>
				<p> - Update general information about brewery</p>
			</div>

			<a class='droid-serif' href="{{{ action('UsersController@login') }}}">Get Started...</a>
		</div>
	</div>
</div>
@stop