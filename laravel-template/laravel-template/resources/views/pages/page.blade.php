@extends('pages.layout')
@vite('resources/js/app.js')


@section('main-content')
<div class="content">
    <div class="container p-5">
        <div class="row">
@foreach ($firstStage as $firstStagePokemon)
            <div class="col-4 mb-5">
                <div class="card" style="width: 100%;">
                    <img class="card-img-top" src="{{$firstStagePokemon['imgUrl']}}" alt="Pokemon">
                    <div class="card-body">
                        <h5 class="card-title">{{$firstStagePokemon['name']}}</h5>
                        <p class="card-text">{{$firstStagePokemon['typing']}}</p>
                        <small class="card-text">{{$firstStagePokemon['region']}}</small>
                        <button type="button" class="btn btn-success">Show</button>
                    </div>
                </div>
            </div>


@endforeach
    </div>
</div>

@endsection


