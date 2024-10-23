@extends('pages.layout')
@vite('resources/js/app.js')


@section('main-content')
<div class="content">
    <div class="container p-5">
        <div class="row justify-content-center">

            <div class="col-6 mb-5">
                <div class="card">
                    <img class="card-img-top" src="{{$singlePokemon['imgUrl']}}" alt="Pokemon">
                    <div class="card-body">
                        <h5 class="card-title">{{$singlePokemon['name']}}</h5>
                        <p class="card-text">{{$singlePokemon['typing']}}</p>
                        <small class="card-text">{{$singlePokemon['region']}}</small>
                        <div>
                        <button type="button" class="btn btn-success ml-5"><a href="{{route('/')}}">Go Back</a></button>
                        </div>
                    </div>
                </div>

            </div>
    </div>
</div>

@endsection
