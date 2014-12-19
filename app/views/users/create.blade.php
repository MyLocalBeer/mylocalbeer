@extends('layouts.master')
@section('content')

<form role="form">
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
    <input type="password" id="password" name='password'>
  </div>
   <div class="form-group">
    <label for="password_confirmation">Confirm Password</label>
    <input type="password" id="password_confirmation" name='password_confirmation'>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
@stop