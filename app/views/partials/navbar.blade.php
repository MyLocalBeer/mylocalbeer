<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/beers/"><span class="glyphicon glyphicon-home"></span></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#">Description <span class="sr-only"></span></a></li>
        <li><a href="#">Search/Map <span class="sr-only"></span></a></li>

<!-- ADD IF STATEMENT TO REMOVE CREATE OPTION FOR GUESTS -->
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-plus"></span>CREATE</a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="{{{ action('BeersController@create') }}}"><span class="glyphicon glyphicon-plus"></span>Beer</a></li>
              <li class="divider"></li>
              <li><a href="#"><span class="glyphicon glyphicon-plus"></span>Brewery</a></li>
              <li class="divider"></li>
              <li><a href="#"><span class="glyphicon glyphicon-plus"></span>Bar/Restaurant/Store</a></li>
            </ul>
          </li>

      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        @if (Auth::guest())
          <li><a href="/login"><span class="glyphicon glyphicon-user"></span>Log In</a></li>
        @else
          <li><a href="/logout"><span class="glyphicon glyphicon-user"></span>Log Out</a></li>
        @endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
{{--how to comment in blade--}}
