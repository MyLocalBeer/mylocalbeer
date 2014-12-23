@extends('layouts.master')
@section('content')

<div id='body' class='container'>
    <div class='row'>
        <img id='thebreweries' class='center-block' src="/pics/thebreweries.png">
    </div>
    @foreach($breweries as $brewery)
        <div id='breweries'>
            <article>
                <div class='name-local'>
                    <div class='row'>
                        <div class="brewery-name col-md-4">
                            {{ $brewery->brewery_name }}
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-md-3 brewery-info abel-font'>
                            {{ $brewery->location }}
                        </div>
                    </div>  
                </div>
                <div class='row'>    
                    <div class='col-md-9 brewery-info abel-font'>
                        {{ $brewery->story }}
                    </div>
                </div>
                <div class='row'>
                    @if(Auth::check())
                    <div class='col-md-2 col-md-offset-10'>
                        <a href="{{ action('BreweriesController@edit', $brewery->id) }}"><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span></a>
                       
                        <button class='delete_button' data-post-id="{{{$brewery->id}}}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
                    </div>
                    @endif
                </div>
            </article>
        </div>
        <div class='row'>
            <div class='col-md-6 col-md-offset-3'>
                <div class='line'></div>
            </div>
        </div>

    @endforeach
        {{Form::open(['method'=>'delete', 'id'=>'delete-form'])}}
        {{Form::close()}}

</div>
@stop

@section('bottomscript')

    <script type="text/javascript">
        $(".delete-button").click(function() {
            var postId = $(this).data('post-id');

            $("#delete-form").attr('action', '/breweries/' + postId);

            if (confirm('You sure you want to delete this post?')) {
                $("#delete-form").submit();
            }

        });
    </script>
@stop
