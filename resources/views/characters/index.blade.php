@extends('layouts.app')
@section('content')
    <div class="container text-white">
        <div class="pg-list p-5">
            <div class="card text-dark" style="width: 18rem;">
                <img src="{{ Vite::asset('resources/img/download.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h4 class="card-title">Giampapa</h4>
                  <div class="type">
                    <p>Class: <span class="mb-1 fw-bold">Warrior</span></p>

                  </div>
                  <a href="#" class="btn btn-primary">More infos</a>
                </div>
              </div>
        </div>
    </div>
@endsection
