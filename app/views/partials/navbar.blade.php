<style type="text/css">

.navbar {
   background-color: transparent;
   background: transparent;
}

/*.navbar li { color: #000; } 
*/
.navbar.transparent.navbar-inverse .navbar-inner {
   background: rgba(0,0,0,1);
}

.newuser-button {
  margin-top: 10px;
  outline: none;
}

.no-outline{
  outline: none;
}

</style>

<div class="navbar transparent navbar-inverse navbar-fixed-top">
  <nav class="navbar-inner" role="navigation">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="/">Home <span class="sr-only"></span></a></li>
          <li><a href="/#TheHow">The How <span class="sr-only"></span></a></li>
          <li><a href="/#find">Find <span class="sr-only"></span></a></li>
          <li><a href="/beers/">The Beer <span class="sr-only"></span></a></li>
          <li><a href="/breweries/">The Breweries <span class="sr-only"></span></a></li>

  <!-- ADD IF STATEMENT TO REMOVE CREATE OPTION FOR GUESTS -->
        @if (Auth::check())
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-plus"></span>CREATE</a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#" data-toggle='modal' data-target='#create-beer'><span class="glyphicon glyphicon-plus"></span>Beer</a></li>
              <li class="divider"></li>
              <li><a href="{{{ action('BreweriesController@create') }}}"><span class="glyphicon glyphicon-plus"></span>Brewery</a></li>
            </ul>
          </li>
        @endif

        </ul>
        
        <ul class="nav navbar-nav navbar-right">
          @if (Auth::guest())
          <!-- Button trigger modal -->
            <li><a href='#' data-toggle="modal" data-target="#signUp"><span class="glyphicon glyphicon-plus no-outline"></span> New User</a></li>
            <li><a href="#" data-toggle='modal' data-target='#login'><span class="glyphicon glyphicon-user no-outline"></span> Log In</a></li>
          @else
            <li><a href="/users/logout"><span class="glyphicon glyphicon-user"></span> Log Out</a></li>
          @endif
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  {{--how to comment in blade--}}
</div>


<!-- Modal -->
<div class="modal fade " id="signUp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content modal-background">
      <div class='modal-header'>
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      </div>
        <div class="modal-body">
          <div class='row' id='modal-content'>
            <div class="col-md-4"> 
              <img src="/pics/singup.png">    
            </div>  
        
        @include('partials.create_form') 
             
        </div>
        </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content modal-background">
      <div class='modal-header'>
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      </div>
      <div class="modal-body">
        <div class='row' id='modal-content'>
          <div class="col-md-4"> 
            <img src="/pics/login.png">
          </div>  
      
        @include('partials.login_form') 
           
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="create-beer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content modal-background">
      <div class='modal-header'>
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      </div>
      <div class="modal-body">
        <div class='row' id='modal-content'>
       
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
            <div class="form-group row">
              <div class='col-md-3 col-md-offset-4'>
                <select name="beer-locations" id="beer-locations" class="form-control">
                  @foreach ($locations as $location)
                    <option value="{{ $location->establishment }}">{{ $location->establishment }}</option>
                  @endforeach
                </select>
              </div>
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
        </div>
      </div>
    </div>
  </div>
</div>