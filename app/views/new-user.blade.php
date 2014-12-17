@extends('layouts.master')
@section('content')

<h1>H1's are the best way to move things down</h1>
<h1>screw css</h1>
<h1>New User</h1>

<div>
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


{{ Form::submit('submit') }}



{{ Form::close() }}
</div>

@stop