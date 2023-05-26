@extends('layouts.app')
@section('content')
    <div class="container text-white">
        <div class="row py-5">
            <div class="col-12 col-lg-6 d-flex justify-content-center">
                <img class="" src="/img/characters/{{$type->name}}.png" alt="barbarian">
            </div>
            <div class="col-12 col-lg-6 pt-5 mt-5">
                <h1>{{$char->name}}</h1>
                <hr>
                <p>Class: <span class="h3 ms-3 text-capitalize">{{$type->name}}</span></p>
                <hr>
                <div class="d-flex">
                    <p class="">Desc: </p><p class="h5 ms-4 text-grey">{{$char->description}}</p>

                </div>
            </div>
        </div>

@endsection
