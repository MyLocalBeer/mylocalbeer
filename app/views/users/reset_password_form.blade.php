@extends('layouts.master')
@section('content')

        <div class="row maincontent">
        	<div class='col-md-4 col-md-offset-4'>
        	<h1>Enter New Password</h1>
            {{-- Renders the signup form of Confide --}}
            {{ Confide::makeResetPasswordForm($token)->render(); }} 
        	</div>
        </div> 
@stop