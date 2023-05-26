@extends('layouts.app')
@section('content')
    <div class="container text-white">
        <div class="pg-list p-5 d-flex flex-wrap gap-3">
            @foreach ($characters as $char)
            <div class="card text-dark" style="width: 18rem;">
                <img src="/img/characters-profile/barbarian.jpg" class="card-img-top" alt="barbarian">
                <div class="card-body">
                    <h4 class="card-title">{{$char->name}}</h4>
                    <p>Class: <span class="mb-1 fw-bold">Barbarian</span></p>

                    <a href="{{route('characters.show', ['id' => $char->id, str_replace(' ', '-', $char->name)])}}" class="btn btn-primary">More infos</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
