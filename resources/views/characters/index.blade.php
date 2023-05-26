@extends('layouts.app')
@section('content')
    <div class="container text-white">
        <div class="pg-list p-5">
            <div class="card text-dark" style="width: 18rem;">
                <img src="{{ Vite::asset('resources/img/download.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Giampapa</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">More infos</a>
                </div>
              </div>
        </div>
    </div>
@endsection
