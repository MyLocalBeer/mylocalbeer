@extends('layouts.master')
@section('content')


<div id='body' class='container'>
    <div class='row'>
        <img class='center-block' id='thebeer' src="/pics/thebeer.png">
    </div>

    @foreach($beers as $beer)
        <div id='breweries'>
            <article>
                <div class='name-local'>
                    <div class='row'>
                        <div class='brewery-name col-md-4 col-md-offset-4'>
                            {{ $beer->beer_name }}
                        </div>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-md-4 col-md-offset-4 brewery-info abel-font'>
                        {{ $beer->beer_style }}
                    </div>
                </div>
                <div class='row'>    
                    <div class='col-md-4 col-md-offset-4 brewery-info abel-font'>
                        {{ $beer->abv }}
                    </div>
                </div>
                <div class='row'>   
                    <div class='col-md-4 col-md-offset-4 brewery-info abel-font'>
                        {{ $beer->description }}
                    </div>
                </div> 
                <div class='row'>  
                    <div class='col-md-4 col-md-offset-4 brewery-info abel-font'>
                        {{ $beer->posted }}
                    </div>
                </div> 
                <div class='row'>
                    @if(Auth::check())
                    <div class='col-md-2 col-md-offset-10'>
                        {{ HTML::link('/beers' . "/" . $beer->id . '/edit', 'Edit', array('class' => 'btn btn-success btn-xs')) }}
                    </div>
                    <button class="btn btn-danger delete-button" data-post-id="{{{$beer->id}}}">Delete</button>
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

            $("#delete-form").attr('action', '/beers/' + beerId);

            if (confirm('You sure you want to delete this post?')) {
                $("#delete-form").submit();
            }

        });
    </script>
@stop
