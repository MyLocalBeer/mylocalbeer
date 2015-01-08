@extends('layouts.master')
@section('topscript')
<?php echo $map['js']; ?>
@section('content')
<div>
	
	<div id='main' class='row'>
		<div >
			<img id='logo' class='center-block'src="pics/mylocallogo.png">
		</div>
	</div>

	<a name='TheHow'></a>
	<div id='thehow'>
		<div class="row">
			<div>
				<img id="how" class='center-block'  src="/pics/how.png">
			</div>
		</div>

		<div id='how-section'>

			<div class='container row center-block text-color text-center'>
				<div class='col-md-4 col-md-offset-4'>
					<h3>Search by Brewery</h3>
					<p> 
						Choose from any local brewery listed. From there you can see what specific beers are being served.
					</p>
				</div>
			</div>
			<div class='container row center-block text-color text-center'>
				<div class='col-md-4 col-md-offset-4'>
					<h3>Find Whats Close</h3>
					<p> 
						We will show you the bars or restuarants that are close and who have the local beer you are looking for.
					</p>
				</div>
			</div>
			<div class='container row center-block text-color text-center'>
				<div class='col-md-4 col-md-offset-4'>
					<h3>Drink Up</h3>
					<p> 
						We know you don't need any explanation for this part, so drink responsibly and cheers to local beer!
					</p>
				</div>
			</div>
		</div>
	</div>

<div id='search'>
	<div class='container'>
		<a name='find'></a>
			<div class='row'>
				<img class='center-block' id='thesearch' src="/pics/thesearch.png">
			</div>
		<div class='row'>
			<div class="col-md-3 form-group" role="navigation">
			      {{ Form::open(['action' => ['BeersController@index'], 'method' => 'GET', 'name' => 'search',]) }}

			      <div class='form-group'>
			      	<input type='search' class='form-control' name="search" id='search' placeholder='Search by Beer Name or Style'>
			      </div>

			      {{ Form::submit('Search', array('class' => 'btn btn-primary btn-sm')) }}

			      {{ Form::close() }}
			</div>
			<div class="map col-md-8 col-md-offset-2">
			<?php echo $map['html']; ?>
			</div>
		</div>
	</div>
</div>

<div id='about'>
	<p class='lobster-text'>Meet the Team</p>

	<div class='row'>
		<div class='col-md-4 text-center'>
			<img class='img-circle center-image' src="/pics/johnny.png">
		</div>
		<div class='col-md-4 text-center'>
			<img class='img-circle center-image' src="/pics/headshot3.png">
		</div>
		<div class='col-md-4 text-center'>
			<img class='img-circle center-image' src="/pics/jason.png">
		</div>
	</div>

	<div class='row'>
		<div class='col-md-4 text-center droid-serif'>
			Johnny Staudt
		</div>
		<div class='col-md-4 text-center droid-serif'>
			Liz Cole
		</div>
		<div class='col-md-4 text-center droid-serif'>
			Jason Birdwell
		</div>
	</div>
</div>


@stop

@section('bottomscript')
	 <script type="text/javascript">
	// 	var start_position = $('#thehow').position().top,
	// 	end_position = null;

	// 	// console.log(start_position);

	// 	$(window).scroll(function() {
	// 		end_position = $(window).scrollTop();
	// 		console.log(end_position);
	// 		if(end_position > 160) {
	// 			$('#thehow').fadeIn();
	// 		}
	// 	});

//this function is not working correctly. Will scroll the how text but removes the hidden css element and the position fixed hides the photo. Need to find a new css for the "how" photo. 
		// $(window).scroll(function() {
		// 	end_position = $(window).scrollTop();
		// 	if(end_position > 620) {
		// 		$('#how').css('position', 'fixed');
		// 		$('#thehow').css('overflow-y', 'scroll');
		// 	}
		// });

// hits mark on y in query attach 2 styles overflow-y: scroll and postion: fixed for the banner

	</script>
@stop

