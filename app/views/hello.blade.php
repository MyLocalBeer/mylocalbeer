@extends('layouts.master')
@section('content')
<div id='body'>
	
	<div id='main' class='row'>
		<div >
			<img id='logo' class='center-block'src="pics/mylocallogo.png">
		</div>
	</div>

<!-- <div class='line'></div>
 -->
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
<!-- 		<div class='line'></div>
 -->
		<h1>Map</h1>
</div>
@stop

@section('bottomscript')
	<script type="text/javascript">
		var start_position = $('#thehow').position().top,
		end_position = null;

		// console.log(start_position);

		$(window).scroll(function() {
			end_position = $(window).scrollTop();
			if(end_position > 650) {
				$('#thehow').fadeIn();
			}
		});


	</script>
@stop

