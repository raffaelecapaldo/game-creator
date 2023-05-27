@extends('layouts.app')
@section('content')
    <div class="container text-white">
        <div class="row py-5">
            <div class="col-12 col-lg-6 d-flex flex-column justify-content-center align-items-center">
                <div class="box-char">
                    <img class="char" src="/img/characters/{{$type->name}}.png" alt="barbarian">
                    <div class="light-on"></div>
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
            </div>
            <div class="attributes d-flex flex-column align-items-center mt-4">
                <div class="attributes-name d-flex justify-content-center gap-5 mt-3 w-100">
                    <div class="row">
                        <div class="col-3"><span>ATTACK</span></div>
                        <div class="col-3"><span>DEFENSE</span></div>
                        <div class="col-3"><span>SPEED</span></div>
                        <div class="col-3"><span>LP</span></div>
                    </div>
                </div>
                <div class="attributes-value d-flex justify-content-center gap-5 mt-1 w-100">
                    <div class="row">
                        <div class="col-3"><i class="fa-solid fa-dumbbell atk"><span>{{ $char->attack }}</span></i></div>
                        <div class="col-3"><i class="fa-solid fa-shield-halved def"><span>{{ $char->defence }}</span></i></div>
                        <div class="col-3"><i class="fa-solid fa-person-running vel"><span>{{ $char->speed }}</span></i></div>
                        <div class="col-3"><i class="fa-solid fa-heart health"><span>{{ $char->life }}</span></i></div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
