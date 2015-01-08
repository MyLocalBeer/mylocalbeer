<p class='lobster'>Add Brewery</p>

<div>
	{{ Form::open(array('action' => 'BreweriesController@store')) }}
		<div class="form-group row">
			<div class='col-md-6 col-md-offset-3'>
				{{ Form::text('brewery_name', Input::old('brewery_name'), array('placeholder'=>'Brewery Name', 'class'=>'form-control')) }}
				{{ $errors->first('brewery_name', '<span class="help-block">Name Is Required</span>'); }}
			</div>
		</div>
		<div class="form-group row">
			<div class='col-md-6 col-md-offset-3'>
				{{ Form::text('location', Input::old('location'), array('placeholder'=>'Location', 'class'=>'form-control')) }}
				{{ $errors->first('location', '<span class="help-block">Location Is Required</span>'); }}
			</div>
		</div>
		<div class="form-group row">
			<div class='col-md-6 col-md-offset-3'>
				{{ Form::textarea('story', Input::old('story'), array('placeholder'=>'Story', 'cols'=>'50', 'rows'=>'10', 'class'=>'form-control')) }}
				{{ $errors->first('story', '<span class="help-block">Story Is Required</span>'); }}
			</div>
		</div>

	<div class='row'>
		<div class='col-md-2 col-md-offset-7'>
			<button type="submit" class="btn btn-info">Submit</button>
		</div>
	</div>
</div>


{{ Form::close() }}