@extends('layouts.app')
@section('content')
    <div class="container showChar text-white">
        <div class="row py-5">
            @yield('buttons')
            <div class="col-12 col-lg-6 d-flex justify-content-center">
                <img class="" src="/img/characters/{{$type->name}}.png" alt="barbarian">
            </div>
            <div class="col-12 col-lg-6 pt-5 mt-5">
                <h1>{{ $char->name }}</h1>
                <hr>
                <p>Class: <span class="h3 ms-3 text-capitalize">{{ $type->name }}</span></p>
                <hr>
                <div class="d-flex">
                    <p class="">Desc: </p>
                    <p class="h5 ms-4 text-grey description">{{ $type->description }}</p>



                </div>
            </div>
            <div class="col-12 col-lg-6 ps-5 pt-3 d-flex flex-column">
                <h1 class="text-uppercase fw-semibold" id="char-name">{{ $char->name }}</h1>
                <hr>
                <p><span class="fw-semibold">Type:</span> <span class="ms-3 text-capitalize">{{ $type->name }}</span></p>
                <hr>
                <div class="d-flex box-description">
                    <p class="fw-semibold">Desc:</p>
                    <p class="ms-4 description">{{ $type->description }}</p>
                </div>
                <hr>
                {{-- giusto per usare i dati dell'esercizio --}}
                <div class="stats text-center">
                    <h3>Stats</h3>
                    <p>Attack: {{ $char->attack }}</p>
                    <p>Defence: {{ $char->defence }}</p>
                    <p>Speed: {{ $char->speed }}</p>
                    <p>Life: {{ $char->life }}</p>
                </div>
                <div class="weapons text-center">
                    <h2>Weapons</h2>
                    @foreach ($char->items as $item)
                        <span class="badge rounded-pill text-bg-info">{{$item->name}}</span>
                    @endforeach
                </div>
            </div>
        </div>
    @endsection
    @section('characterlink')
    {{route('characters.index')}}
    @endsection
