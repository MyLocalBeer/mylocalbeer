@extends('layouts.master')
@section('topscript')
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGji162SkzFzL4YhHP8gRXqWlBLenkk1A"></script>
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
			      {{ Form::open(['action' => ['HomeController@index'], 'method' => 'GET', 'name' => 'search',]) }}

			      <div class='form-group'>
			      	<input type='search' class='form-control' name="search" id='search' placeholder='Search by Beer Name or Style'>
			      </div>

			      {{ Form::submit('Search', array('class' => 'btn btn-primary btn-sm')) }}

			      {{ Form::close() }}
			</div>
			<div class="map col-md-8 col-md-offset-2" id="map-canvas">
			</div>
			@foreach($locations as $location)
		        <div id='breweries'>
		            <article>
		                <div class='name-local'>
		                    <div class='row'>
		                        <div class='beerinfo beertitle col-md-6 col-md-offset-3'>
		                            {{ $location->establishment }}
		                        </div>
		                    </div>
		                </div>
		            </article>
		        </div>
		    @endforeach
		</div>
	</div>
</div>
@stop

@section('bottomscript')
	<script type="text/javascript">

      	function initialize() {
        	var mapOptions = {
	         	center: { lat:29.424122, lng:-98.493629 },
	          	zoom: 8
	        };

  		 	var locations = {{ $locations->toJSON() }};

		 	if (!(locations instanceof Array)) {
		 		locations = [locations];
		 	}

        	var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

            var bounds = new google.maps.LatLngBounds();

            locations.forEach(function(loc) {
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(loc.lat, loc.long),
                    map: map
                  });

                bounds.extend(marker.position);

                map.fitBounds(bounds);
            });
        }
        google.maps.event.addDomListener(window, 'load', initialize);
	</script>
@stop

