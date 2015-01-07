	<div class='row'>
		<div class='col-md-4 col-md-offset-4'>
			{{ Form::open(array('action' => 'UsersController@doLogin')) }}
			  <div class="form-group">
			    <label for="username">Username or Email</label>
			    {{ $errors->first('username', '<span class="help-block alert alert-danger">:message</span>') }}
			    <input type="text" class="form-control" id="username" name='username' value='{{{ Input::old('username') }}}'>
			  </div>
			  <div class="form-group">
			    <label for="password">Password</label>
			    {{ $errors->first('password', '<span class="help-block alert alert-danger">:message</span>') }}
			    <input type="password" class='form-control' id="password" name='password'>
			  </div>
			  <div class='row'>
			  	<div class='col-md-1 col-md-push-9 '>
			  		<button type="submit" class="btn btn-info">Submit</button>
			  	</div>
			  
			{{ Form::close() }}
				<div class='col-md-8 col-md-pull-1'>
				<a href="{{{ action('UsersController@doForgotPassword') }}}">Forgot Password?</a>
				</div>
			</div>
		</div>
	</div>
	 