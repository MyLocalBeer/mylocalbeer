	<div class='row'>
		<div class='col-md-6 col-md-offset-3'>
			{{ Form::open(array('action' => 'UsersController@doLogin')) }}
			  <div class="form-group">
			    {{ $errors->first('username', '<span class="help-block alert alert-danger">:message</span>') }}
			    <input type="text" class="form-control" id="username" placeholder='Username or Email' name='username' value='{{{ Input::old('username') }}}'>
			  </div>
			  <div class="form-group">
			    {{ $errors->first('password', '<span class="help-block alert alert-danger">:message</span>') }}
			    <input type="password" class='form-control' id="password" placeholder='Password' name='password'>
			  </div>
			  <div class='row'>
			  	<div class='col-md-1 col-md-push-8 '>
			  		<button type="submit" class="btn btn-info">Submit</button>
			  	</div>
			  
			{{ Form::close() }}
				<div class='col-md-8 col-md-pull-1'>
				<a href="{{{ action('UsersController@doForgotPassword') }}}">Forgot Password?</a>
				</div>
			</div>
		</div>
	</div>
	 