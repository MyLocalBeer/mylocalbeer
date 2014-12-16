@extends('layouts.master')
@section('content')

<h1>Edit Brewery</h1>

<div>
{{ Form::model($brewery, (array('action' => ['BreweriesController@update', $brewery->id], 'method' => 'PUT'))) }}
	<div class="form-group">
		{{ Form::label('brewery_name', 'Name') }}
		{{ Form::text('brewery_name', $brewery->brewery_name) }}
		{{ $errors->first('brewery_name', '<span class="help-block">Name Is Required</span>'); }}
	</div>
	<div class="form-group">
		{{ Form::label('location', 'Location') }}
		{{ Form::text('location', $brewery->location) }}
		{{ $errors->first('location', '<span class="help-block">Location Is Required</span>'); }}
	</div>
	<div class="form-group">
		{{ Form::label('story', 'Story') }}
		{{ Form::textarea('story', $brewery->story, array('cols'=>'50', 'rows'=>'10')) }}
		{{ $errors->first('story', '<span class="help-block">Story Is Required</span>'); }}
	</div>

{{ Form::submit('submit') }}

{{ Form::close() }}
</div>

@stop