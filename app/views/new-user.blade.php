@extends('layouts.master')
@section('content')

<h1>H1's are the best way to move things down</h1>
<h1>screw css</h1>

<div>
<h1>User Information</h1>
{{ Form::open(array('action' => 'HomeController@saveUser')) }}
	<div class="form-group">
		{{ Form::label('username', 'UserName') }}
		{{ Form::text('username', Input::old('username')) }}
		{{ $errors->first('username', '<span class="help-block">UserName Is Required</span>'); }}
	</div>
	<div class="form-group">
		{{ Form::label('password', 'Password') }}
		{{ Form::text('password', Input::old('password')) }}
		{{ $errors->first('password', '<span class="help-block">Password Is Required</span>'); }}
	</div>
	<div class="form-group">
		{{ Form::label('email', 'eMail') }}
		{{ Form::text('email', Input::old('email')) }}
		{{ $errors->first('email', '<span class="help-block">eMail Is Required</span>'); }}
	</div>

<h1>Brewery Information</h1>
{{ Form::open(array('action' => 'BreweriesController@store')) }}
	<div class="form-group">
		{{ Form::text('brewery_name', Input::old('brewery_name'), array('placeholder'=>'Brewery Name')) }}
		{{ $errors->first('brewery_name', '<span class="help-block">Name Is Required</span>'); }}
	</div>
	<div class="form-group">
		{{ Form::text('location', Input::old('location'), array('placeholder'=>'Location')) }}
		{{ $errors->first('location', '<span class="help-block">Location Is Required</span>'); }}
	</div>
	<div class="form-group">
		{{ Form::textarea('story', Input::old('story'), array('placeholder'=>'Story', 'cols'=>'50', 'rows'=>'10')) }}
		{{ $errors->first('story', '<span class="help-block">Story Is Required</span>'); }}
	</div>
{{ Form::submit('submit') }}
{{ Form::close() }}
</div>

@stop