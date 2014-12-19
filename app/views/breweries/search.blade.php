@extends('layouts.master')

@section('content')

<h1>WAT</h1>
<a href="{{{ action('BreweriesController@request') }}}">query the API</a>

@stop
