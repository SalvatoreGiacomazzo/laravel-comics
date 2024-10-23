@extends('pages.layout')
@vite('resources/js/app.js')


@section('main-content')
<div class="content">
    <div class="container p-5">
        <div class="row justify-content-center">

            <div class="col-6 mb-5">
                <div class="card">
                    <img class="card-img-top" src="..." alt="Pokemon">
                    <div class="card-body">
                        <h5 class="card-title">aaa</h5>
                        <p class="card-text">aaa</p>
                        <small class="card-text">aa</small>
                        <button type="button" class="btn btn-success"><a href="{{route('/')}}">Go Back</a></button>
                    </div>
                </div>
            </div>


    </div>
</div>

@endsection
