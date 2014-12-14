@extends('layouts.master')
@section('content')

<h1>Add Brewery</h1>

<div>
{{ Form::open(array('action' => 'BreweriesController@store')) }}
	<div class="form-group">
		{{ Form::label('brewery_name', 'Name') }}
		{{ Form::text('brewery_name', Input::old('brewery_name')) }}
		{{ $errors->first('brewery_name', '<span class="help-block">Name Is Required</span>'); }}
	</div>
	<div class="form-group">
		{{ Form::label('location', 'Location') }}
		{{ Form::text('location', Input::old('location')) }}
		{{ $errors->first('location', '<span class="help-block">Location Is Required</span>'); }}
	</div>
	<div class="form-group">
		{{ Form::label('story', 'Story') }}
		{{ Form::textarea('story', Input::old('story'), array('cols'=>'50', 'rows'=>'10')) }}
		{{ $errors->first('story', '<span class="help-block">Story Is Required</span>'); }}
	</div>

{{ Form::submit('submit') }}



{{ Form::close() }}
</div>

@stop