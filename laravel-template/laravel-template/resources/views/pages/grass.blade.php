@extends('pages.layout')
@vite('resources/js/app.js')


@section('main-content')
<div class="content">
    <div class="container p-5">
        <div class="row">
@foreach ($allPokemon as $index => $singlePokemon)
            <div class="col-4 mb-5">
                <div class="card" style="width: 100%;">
                    <img class="card-img-top" src="{{$singlePokemon['imgUrl']}}" alt="Pokemon">
                    <div class="card-body">
                        <h5 class="card-title">{{$singlePokemon['name']}}</h5>
                        <p class="card-text">{{$singlePokemon['typing']}}</p>
                        <small class="card-text">{{$singlePokemon['region']}}</small>
                       <div>
                        <button type="button" class="btn btn-success ml-5"><a href="{{ route('show', ['index' => $index]) }}">Show</a></button>
                       </div>
                    </div>
                </div>
            </div>


@endforeach
    </div>
</div>

@endsection
