@extends('layouts.master')
@section('content')

<div>
	{{ Form::model($beer, (array('action' => ['BeersController@update', $beer->id], 'method' => 'PUT'))) }}
		<div class="form-group row">
			<div class='col-md-3 col-md-offset-4'>
				{{ Form::label('beer_name', 'Name') }}
				{{ Form::text('beer_name', Input::old('beer_name'), array('class'=>'form-control')) }}
				{{ $errors->first('beer_name', '<span class="help-block">Name Is Required</span>'); }}
			</div>
		</div>
		<div class="form-group row">
			<div class='col-md-2 col-md-offset-4'>
				{{ Form::label('beer_style', 'Style') }}
				{{ Form::text('beer_style', Input::old('beer_style'), array('class'=>'form-control')) }}
				{{ $errors->first('beer_style', '<span class="help-block">Style Is Required</span>'); }}
			</div>
		</div>
		<div class="form-group row">
			<div class='col-md-1 col-md-offset-4'>
				{{ Form::label('abv', 'ABV') }}
				{{ Form::text('abv', Input::old('abv'), array('class'=>'form-control')) }}
				{{ $errors->first('abv', '<span class="help-block">ABV Is Required</span>'); }}
			</div>
		</div>
		<div class="form-group row">
			<div class='col-md-8 col-md-offset-4'>
				<select name="beer-locations[]" id="beer-locations" class="selectpicker" multiple>
						<option value="" selected disabled>Location</option>
					@foreach ($all_locations as $location)
						<option value="{{ $location->id }}">{{ $location->establishment }}</option>
					@endforeach
				</select>
			</div>
		</div>
		<div class="form-group row">
			<div class='col-md-4 col-md-offset-4'>
				{{ Form::label('description', 'Description') }}
				{{ Form::textarea('description', Input::old('description'), array('cols'=>'50', 'rows'=>'10', 'class'=>'form-control')) }}
				{{ $errors->first('description', '<span class="help-block">Description Is Required</span>'); }}
			</div>
		</div>
		<div class="form-group row">
			<div class='col-md-1 col-md-offset-4'>
				{{ Form::label('brewery_id', 'Brewery_id') }}
				{{ Form::text('brewery_id', Input::old('brewery_id'), array('class'=>'form-control')) }}
				{{ $errors->first('brewery_id', '<span class="help-block">Description Is Required</span>'); }}
			</div>
		</div>

		<div class='row'>
			<div class='col-md-2 col-md-offset-8'>
				<button type="submit" class="btn btn-info">Submit</button>
			</div>
		</div>


	{{ Form::close() }}
</div>

@stop