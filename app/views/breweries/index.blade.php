@extends('layouts.master')
@section('content')

<h1>Breweries! Hell Yeah!</h1>
<h4>list of all available local breweries goes here</h4>

@foreach($breweries as $brewery)
    <div >
        <article>
            <div>
                {{ $brewery->brewery_name }}
            </div>

            <div>
                {{ $brewery->location }}
            </div>
            
            <div>
                {{ $brewery->story }}
            </div>
            
            <button class="btn btn-danger delete-button" data-post-id="{{{$brewery->id}}}">Delete</button>
        </article>
    </div>
@endforeach
    {{Form::open(['method'=>'delete', 'id'=>'delete-form'])}}
    {{Form::close()}}
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
