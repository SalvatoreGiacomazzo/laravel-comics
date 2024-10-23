@extends('pages.layout')
@vite('resources/js/app.js')

@section('main-content')
<div class="content">
    <div class="container p-5">
        <div class="row">
@foreach ($thirdStage as $thirdStagePokemon)
            <div class="col-4 mb-5">
                <div class="card" style="width: 100%;">
                    <img class="card-img-top" src="{{$thirdStagePokemon['imgUrl']}}" alt="Pokemon">
                    <div class="card-body">
                        <h5 class="card-title">{{$thirdStagePokemon['name']}}</h5>
                        <p class="card-text">{{$thirdStagePokemon['typing']}}</p>
                        <small class="card-text">{{$thirdStagePokemon['region']}}</small>
                        <button type="button" class="btn btn-success"><a href="{{route('show')}}">Show</a></button>
                    </div>
                </div>
            </div>


@endforeach
    </div>
</div>

@endsection
