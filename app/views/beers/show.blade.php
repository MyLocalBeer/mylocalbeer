@extends('layouts.master')
@section('content')

<h3> {{ $beer->beer_name }} </h3>
<h3> {{ $beer->beer_style }} </h3>
<h3> {{ $beer->abv }} </h3>
<p> {{ $post->description }} </p>
	{{ HTML::link('/beers', 'View All Beers', array('class' => 'btn btn-primary btn-xs')) }}
	@if (Auth::check())
		{{ HTML::link('/beers' . $beer->id . '/edit', 'Edit', array('class' => 'btn btn-success btn-xs')) }}
		{{ Form::open(array('action' => array('BeersController@destroy', $beer->id), 'method' => 'DELETE', 'id'=>'delete-form')) }}
	    {{ Form::submit('Delete', ['class'=>'btn btn-danger btn-xs']) }}
    @endif
    {{ Form::close() }}
@stop

@section('bottomscript')
	<script type="text/javascript">
		$('.delete-form').submit(function(e)) {
			if(!confirm('Are you sure you want to delete this post?')) {
				e.preventDefault();
			}
		});
	</script>
@stop