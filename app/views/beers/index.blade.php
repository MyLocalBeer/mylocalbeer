@extends('layouts.master')
@section('content')


<div id='body' class='container'>
    <div class='row'>
        <img class='center-block' id='thebeer' src="/pics/thebeer.png">
    </div>

    @foreach($beers as $beer)
        <div id='breweries'>
            <article>
                <div class='row'>
                    @if(Entrust::can('can_edit_beer'))
                    <div class='col-md-2 col-md-offset-8 text-center'>
                        <a href="{{ action('BeersController@edit', $beer->id) }}"><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span></a>
                    @endif
                    @if(Entrust::can('can_delete_beer'))
                        <button class='delete_button' data-post-id="{{{$beer->id}}}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
                    </div>
                    @endif
                </div>
                <div class='row'>
                        <div class='beertitle col-md-6 col-md-offset-3 text-center'>
                            {{ $beer->beer_name }}
                        </div>
                    </div>
                    <div class='row'>
                        <div class="brewery-name col-md-4 col-md-offset-4">
                            <div><a href="/breweries/<?echo $beer->brewery_id?>">{{ $beer->brewery->name }} </a></div>
                        </div>
                    </div>
            
                
                <div class='row'>
                    <div class='col-md-6 col-md-offset-3 beerinfo text-center'>
                        {{ $beer->beer_style }}
                    </div>
                </div>
                <div class='row'>    
                    <div class='col-md-6 col-md-offset-3 beerinfo text-center'>
                        ABV: {{ $beer->abv }} %
                    </div>
                </div>
                <div class='row'>   
                    <div class='col-md-6 col-md-offset-3 beerdescription text-center'>
                        {{ $beer->description }}
                    </div>
                </div> 
                <div class='row'>

              </div>
            </article>
        </div>

        <div class='row'>   
            <div class='col-md-6 col-md-offset-3 text-center'>
                     <input name='rating' id="input-id" type="integer" class="rating" min="0" max="5" step="1" data-size="sm" > 
                    <button id='rating' type='submit' class='btn btn-info btn-sm'>Rate</button>
            </div>
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

    // with plugin options
    $("#input-id").rating({'size':'lg'});

    </script>
@stop
