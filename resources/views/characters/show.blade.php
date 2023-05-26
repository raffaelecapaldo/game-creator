@extends('layouts.app')
@section('content')
    <div class="container text-white">
        <div class="row py-5">
            <div class="col-12 col-lg-6 d-flex justify-content-center">
                <img class="" src="/img/characters/barbarian.png" alt="barbarian">
            </div>
            <div class="col-12 col-lg-6 pt-5 mt-5">
                <h1>{{$char->name}}</h1>
                <hr>
                <p>Class: <span class="h3 ms-3">Barbarian</span></p>
                <hr>
                <div class="d-flex">
                    <p class="">Desc: </p><p class="h5 ms-4">{{$char->description}}</p>

                </div>
            </div>
        </div>

@endsection
