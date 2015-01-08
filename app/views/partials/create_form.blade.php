	<div class='row'>
		<div class='col-md-6 col-md-offset-3'>
			{{ Form::open(array('action' => 'UsersController@store')) }}
			  <div class="form-group">
			    {{ $errors->first('username', '<span class="help-block alert alert-danger">:message</span>') }}
			    <input type="text" class="form-control" id="username" name='username' placeholder='Username' value='{{{ Input::old('username') }}}'>
			  </div>
			  <div class="form-group">
			    {{ $errors->first('email', '<span class="help-block alert alert-danger">:message</span>') }}
			    <input type="email" class="form-control" id="email" name='email' placeholder='Email' value='{{{ Input::old('email') }}}'>
			  </div>
			  <div class="form-group">
			    {{ $errors->first('password', '<span class="help-block alert alert-danger">:message</span>') }}
			    <input type="password" class='form-control' id="password" placeholder='Password' name='password'>
			  </div>
			   <div class="form-group">
			    {{ $errors->first('username', '<span class="help-block alert alert-danger">:message</span>') }}
			    <input type="password" class='form-control' placeholder='Password Confirmation'id="password_confirmation" name='password_confirmation'>
			  </div>
			  <div class='row'>
			  	<div class='col-md-1 col-md-offset-8'>
			  		<button type="submit" class="btn btn-info">Submit</button>
			  	</div>
			  </div>
			{{ Form::close() }}
		</div>
	</div>