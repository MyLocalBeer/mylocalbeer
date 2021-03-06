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
	<a name='find'></a>
	<div class='container'>
		
			<div class='row'>
				<img class='center-block' id='thesearch' src="/pics/thesearch.png">
			</div>
		
			<div role="navigation">
			      {{ Form::open(['action' => ['HomeController@index'], 'method' => 'GET', 'name' => 'search',]) }}
			<div class='row searching'>
			    <div class='form-group col-md-3 col-md-offset-4'>
			     	<input type='search' class='form-control' name="search" id='search' placeholder='Search by Beer Name or Style'>
			    </div>
			    	<div class='col-md-2 searchbeer'>
						<button type="submit" class="btn btn-info">Submit</button>
					</div>
			</div>
			    	{{ Form::close() }}
			
		</div>

		<div class='row'>
			<div class="col-md-6 map" id="map-canvas"></div>
				<p  id='results' class='lobster'>What's Near You... </p>
				@if(!empty($var))
					@foreach($locations as $location)
				        <div id='breweries' >
				            <article>
				                <div class='name-local' id='findbeer'>					         
				                    <div class='col-md-4 col-md-offset-1 text-center searchresults'>
				                        {{ $location->establishment }}
				                    </div>
				                </div>
				            </article>
				        </div>
				    @endforeach
				@endif
			</div>
		</div>
	</div>
</div>

<a name='theteam'></a>

<div id='about'>
	<p class='lobster-text'>Meet the Team</p>

	<div class='row'>
		<div class='col-md-4 text-center'>
			<img class='img-circle center-image' src="/pics/liz.png">
		</div>
		<div class='col-md-4 text-center'>
			<img class='img-circle center-image' src="/pics/johnny.png">
		</div>
		<div class='col-md-4 text-center'>
			<img class='img-circle center-image' src="/pics/jason.png">
		</div>
	</div>

	<div class='row'>
		<div class='col-md-4 text-center droid-serif'>
			Liz Cole
		</div>
		<div class='col-md-4 text-center droid-serif'>
			Johnny Staudt
		</div>
		<div class='col-md-4 text-center droid-serif'>
			Jason Birdwell
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
                    map: map,
                });
                var beerInventory = '';
                for (var i = 0; i < loc.beers.length; i++) {
                	var beer_name = loc.beers[i].beer_name;
                	var beer_style = loc.beers[i].beer_style;
                	var brewery = loc.beers[i].brewery.name;
                	// console.log(loc.beers[i].brewery.name);
                	var beerInventory = beerInventory + " " + beer_name + " " + beer_style + " " + brewery + "<br>";
                };
                console.log(beerInventory);

                var contentString = '<div id="content">'+
				    '<div id="siteNotice">'+
				    '</div>'+
				    '<h3 id="firstHeading" class="firstHeading">'+ loc.establishment +'</h3>'+
				    '<p id="beerInventory" class="beerInventory">'+ beerInventory + '</p>'+
				    '</div>';


                bounds.extend(marker.position);

                map.fitBounds(bounds);

	            var infowindow = new google.maps.InfoWindow({
	     			content: contentString
	  			});
	            google.maps.event.addListener(marker, 'click', function() {
	    			infowindow.open(map,marker);
	  			});
            });

        }
        google.maps.event.addDomListener(window, 'load', initialize);
	</script>
@stop

