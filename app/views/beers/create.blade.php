@extends('layouts.master')
@section('content')

<h1>Add Beer</h1>

<div>
{{ Form::open(array('action' => 'BeersController@store')) }}
	<div class="form-group">
		{{ Form::label('beer_name', 'Name') }}
		{{ Form::text('beer_name', Input::old('beer_name')) }}
		{{ $errors->first('beer_name', '<span class="help-block">Name Is Required</span>'); }}
	</div>
	<div class="form-group">
		{{ Form::label('beer_style', 'Style') }}
		{{ Form::text('beer_style', Input::old('beer_style')) }}
		{{ $errors->first('beer_style', '<span class="help-block">Style Is Required</span>'); }}
	</div>
	<div class="form-group">
		{{ Form::label('abv', 'ABV') }}
		{{ Form::text('abv', Input::old('abv')) }}
		{{ $errors->first('abv', '<span class="help-block">ABV Is Required</span>'); }}
	</div>
	<div class="form-group">
		{{ Form::label('description', 'Description') }}
		{{ Form::textarea('description', Input::old('description'), array('cols'=>'50', 'rows'=>'10')) }}
		{{ $errors->first('description', '<span class="help-block">Description Is Required</span>'); }}
	</div>

{{ Form::submit('submit') }}



{{ Form::close() }}
</div>

@stop