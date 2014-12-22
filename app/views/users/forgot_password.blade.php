@extends('layouts.master')
@section('content')

    <div class="row maincontent"> 
    	<div class='col-md-4 col-md-offset-4'>
       		<h1>Enter Email</h1>
       		<p>We will send you an email shortly so you can reset your password.</p>
        	{{-- Renders the signup form of Confide --}}
        	{{ Confide::makeForgotPasswordForm()->render(); }} 
   		</div>
	</div> 