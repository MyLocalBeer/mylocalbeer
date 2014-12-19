@extends('layouts.master')
@section('content')

        <div class="maincontent"> 
        	<h1>AHAHAHAHA MORE H1s</h1>
            <h1>Signup</h1> 
            {{-- Renders the signup form of Confide --}}
            {{ Confide::makeSignupForm()->render(); }} 
        </div> 