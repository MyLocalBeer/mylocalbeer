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

.margin{
  margin-bottom: 20px;
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

        @if (Entrust::can('can_create_beer'))
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-plus"></span>CREATE</a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#" data-toggle='modal' data-target='#create-beer'><span class="glyphicon glyphicon-plus"></span>Beer</a></li>
          @if (Entrust::hasRole('Admin'))   
              <li class="divider"></li>
              <li><a href="#" data-toggle='modal' data-target='#create-brewery'><span class="glyphicon glyphicon-plus"></span>Brewery</a></li>
          @endif
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
              <img class='margin' src="/pics/singup.png">    
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
            <img class='margin' src="/pics/login.png">
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
        <div id='modal-content'>
          @include('partials.create_beer')
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="create-brewery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content modal-background">
      <div class='modal-header'>
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      </div>
      <div class="modal-body">
        <div id='modal-content'>
          @include('partials.create_brewery')
        </div>
      </div>
    </div>
  </div>
</div>