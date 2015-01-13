@extends('layouts.master')
@section('content')

<div id='body' class='container'>

  
        <div id='breweries'>
            <article>
                <div class=''>
                    <div class='row'>
                        <div class="beertitle text-center col-md-6 col-md-offset-3">
                            {{ $brewery->name }}
                        </div>
                    </div>
                </div>
                <div class='row'>    
                    <div class='col-md-4 col-md-offset-4 brewery-info abel-font'>
                        <img class='brewery-pic' src="{{ $brewery->image }}">
                    </div>
                </div>   
                <div class='row'>    
                    <div class='col-md-4 col-md-offset-4 brewery-info brewery-location abel-font'>
                        <a id='link' class='droid' href="{{ $brewery->website }}">visit {{ $brewery->name }}</a>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-md-4 col-md-offset-4 brewery-location brewery-info droid'>
                        {{ $brewery->streetAddress}}

                        {{ $brewery->locality }}

                        {{ $brewery->region }}
                    
                        {{ $brewery->postalCode }}

                        <p>Established {{ $brewery->yearOpened }}</p>
                    </div>
                </div>
                  
                <div class='row'>    
                    <div class='col-md-10 col-md-offset-1 text-center brewery-info brewery-story'>
                        {{ $brewery->story }}
                    </div>
                </div>

                <div class='row'>
                    <div class='row'>
                        @if(Entrust::can('can_edit_brewery'))
                        <div class='col-md-2 col-md-offset-10'>
                            <a href="{{ action('BreweriesController@edit', $brewery->id) }}"><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span></a>
                        @endif
                        @if(Entrust::can('can_delete_brewery'))
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

    @foreach($beers as $beer)
        <div id='breweries'>
            <article>
                <div class='row'>
                        <div class='beertitle col-md-6 col-md-offset-3 text-center'>
                            {{ $beer->beer_name }}
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
