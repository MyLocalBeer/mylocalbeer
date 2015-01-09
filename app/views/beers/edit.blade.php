@extends('layouts.master')
@section('content')

<h1>Add Beer</h1>

<div>
{{ Form::model($beer, (array('action' => ['BeersController@update', $beer->id], 'method' => 'PUT'))) }}
	<div class="form-group">
		{{ Form::label('beer_name', 'Name') }}
		{{ Form::text('beer_name', Input::old('beer_name')) }}
		{{ $errors->first('beer_name', '<span class="help-block">Name Is Required</span>'); }}
	</div>
		<div class="form-group row">
		<div class='col-md-6 col-lg-offset-2'>
			<select class="form-control" name="beer_style" id="beer_style">
			  <option value="" selected disabled>Beer Style</option>
			<optgroup label="ALES">
			  <option>Abbey Ale</option>
			  <option>Pale Ale</option>
			  <option>India Pale Ale (IPA)</option>
			  <option>Porter</option>
			  <option>Stout</option>
			  <option>Weiss</option>
			  <option>Wit - White</option>
			<optgroup label="LAGERS">
			  <option>Amber Lager</option>
			  <option>Doppelbock</option>
			  <option>Dunkel</option>
			  <option>Pilsner</option>
			  <option>Light</option>
			</select>
			{{ $errors->first('beer_style', '<span class="help-block">Style Is Required</span>'); }}
		</div>
	</div>
	<div class="form-group">
		{{ Form::label('abv', 'ABV') }}
		{{ Form::text('abv', Input::old('abv')) }}
		{{ $errors->first('abv', '<span class="help-block">ABV Is Required</span>'); }}
	</div>
	<div class="form-group row">
		<div class='col-md-6 col-md-offset-2'>
			<select name="beer-locations[]" id="beer-locations" class="selectpicker" multiple>
					<option value="" selected disabled>Location</option>
				@foreach ($all_locations as $location)
					<option  value="{{ $location->id }}">{{ $location->establishment }}</option>
				@endforeach
			</select>
		</div>
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