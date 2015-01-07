@extends('layouts.master')
@section('topscript')
<style type="text/css">
	#beer-locations {
		color: black;
	}
</style>
@section('content')

<div class='row'>
	<div class='col-md-4 col-md-offset-4'>
		<h1>Add Beer</h1>
	</div>
</div>

<div>
{{ Form::open(array('action' => 'BeersController@store')) }}
	<div class="form-group row">
		<div class='col-md-3 col-md-offset-4'>
			{{ Form::text('beer_name', Input::old('beer_name'), array('placeholder'=>'Beer Name', 'class'=>'form-control')) }}
			{{ $errors->first('beer_name', '<span class="help-block">Name Is Required</span>'); }}
		</div>
	</div>
	<div class="form-group row">
		<div class='col-md-3 col-md-offset-4'>
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
	<div class="form-group row">
		<div class='col-md-2 col-md-offset-4'>
			{{ Form::text('abv', Input::old('abv'), array('placeholder'=>'ABV', 'class'=>'form-control')) }}
			{{ $errors->first('abv', '<span class="help-block">ABV Is Required</span>'); }}
		</div>
	</div>
	<div class="form-group">
		<select name="beer-locations" id="beer-locations" class="form-control">
				<option value="" selected disabled>Location</option>
			@foreach ($locations as $location)
				<option value="{{ $location->establishment }}">{{ $location->establishment }}</option>
			@endforeach
		</select>
	</div>
	<div class="form-group row">
		<div class='col-md-5 col-md-offset-4'>
			{{ Form::textarea('description', Input::old('description'), array('cols'=>'50', 'rows'=>'10', 'placeholder'=>'Description...', 'class'=>'form-control')) }}
			{{ $errors->first('description', '<span class="help-block">Description Is Required</span>'); }}
		</div>
	</div>
	<div class="form-group row">
		<div class="col-md-2 col-md-offset-4">
			{{ Form::text('brewery_id', Input::old('brewery_id'), array('placeholder'=>'Brewery ID', 'class'=>'form-control')) }}
			{{ $errors->first('brewery_id', '<span class="help-block">Description Is Required</span>'); }}
		</div>
	</div>
<div class='row'>
	<div class='col-md-2 col-md-offset-7'>
		<button type="submit" class="btn btn-info">Submit</button>
	</div>
</div>


{{ Form::close() }}
</div>

@stop
