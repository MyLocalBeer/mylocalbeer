	<div class='row'>
		<div class='col-md-4 col-md-offset-4'>
			{{ Form::open(array('action' => 'UsersController@store')) }}
			  <div class="form-group">
			    <label for="username">Username</label>
			    <input type="text" class="form-control" id="username" name='username'>
			  </div>
			  <div class="form-group">
			    <label for="email">Email</label>
			    <input type="email" class="form-control" id="email" name='email'>
			  </div>
			  <div class="form-group">
			    <label for="password">Password</label>
			    <input type="password" class='form-control' id="password" name='password'>
			  </div>
			   <div class="form-group">
			    <label for="password_confirmation">Confirm Password</label>
			    <input type="password" class='form-control' id="password_confirmation" name='password_confirmation'>
			  </div>
			  <button type="submit" class="btn btn-default">Submit</button>
			{{ Form::close() }}
		</div>
	</div>