	<div class='row'>
		<div class='col-md-6 col-md-offset-3'>
			{{ Form::open(array('action' => 'UsersController@store')) }}
			  <div class="form-group">
			    <label for="username">Username</label>
			    {{ $errors->first('username', '<span class="help-block alert alert-danger">:message</span>') }}
			    <input type="text" class="form-control" id="username" name='username' value='{{{ Input::old('username') }}}'>
			  </div>
			  <div class="form-group">
			    <label for="email">Email</label>
			    {{ $errors->first('email', '<span class="help-block alert alert-danger">:message</span>') }}
			    <input type="email" class="form-control" id="email" name='email' value='{{{ Input::old('email') }}}'>
			  </div>
			  <div class="form-group">
			    <label for="password">Password</label>
			    {{ $errors->first('password', '<span class="help-block alert alert-danger">:message</span>') }}
			    <input type="password" class='form-control' id="password" name='password'>
			  </div>
			   <div class="form-group">
			    <label for="password_confirmation">Confirm Password</label>
			    {{ $errors->first('username', '<span class="help-block alert alert-danger">:message</span>') }}
			    <input type="password" class='form-control' id="password_confirmation" name='password_confirmation'>
			  </div>
			  <div class='row'>
			  	<div class='col-md-1 col-md-offset-8'>
			  		<button type="submit" class="btn btn-info">Submit</button>
			  	</div>
			  </div>
			{{ Form::close() }}
		</div>
	</div>