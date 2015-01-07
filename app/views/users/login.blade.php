@extends('layouts.master')
@section('content')

    <div class="row maincontent"> 
            <h1 class='col-md-4 col-md-offset-4 lobster-text'>Login</h1> 
            {{-- Renders the signup form of Confide --}}
            @include('partials.login_form')
    	</div>
	 </div> 

@stop