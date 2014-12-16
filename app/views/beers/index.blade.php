@extends('layouts.master')
@section('content')

<h1>beers hell yeah!</h1>
<h4>list of all available local beers goes here</h4>

@foreach($beers as $beer)
    <div >
        <article>
            <div>
                {{ $beer->beer_name }}
            </div>

            <div>
                {{ $beer->beer_style }}
            </div>
            
            <div>
                {{ $beer->abv }}
            </div>
            
            <div>
                {{ $beer->description }}
            </div>
            
            <div>
                {{ $beer->posted }}
            </div>
            <div>{{ HTML::link('/beers' . "/" . $beer->id . '/edit', 'Edit', array('class' => 'btn btn-success btn-xs')) }}</div>
            <button class="btn btn-danger delete-button" data-post-id="{{{$beer->id}}}">Delete</button>
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

            $("#delete-form").attr('action', '/beers/' + postId);

            if (confirm('You sure you want to delete this post?')) {
                $("#delete-form").submit();
            }

        });
    </script>
@stop
