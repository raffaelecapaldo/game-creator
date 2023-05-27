@extends('layouts.app')
@section('content')
    <div class="container text-white" id="characters-index">
        <div class="pg-list p-5 d-flex justify-content-center flex-wrap gap-4" id="box-index">
            @foreach ($chars as $char)
                @php
                    /* $pgtype = array_filter($types, function($type, $char) {
                        return $type->id == $char->type_id;
                    }) */
                    foreach ($types as $type) {
                        if ($type->id == $char->type_id) {
                            $pgtype = $type->name;
                        }
                    }
                @endphp
                <a href="{{ route('characters.show', ['id' => $char->id, str_replace(' ', '-', $char->name)]) }}" class="text-white text-decoration-none">
                    <div class="card" style="width: 16rem;">
                        <div class="card img">
                            <img src="/img/characters-profile/{{$pgtype}}.jpg" class="card-img-top" alt="barbarian">
                        </div>
                        <div class="card-body">
                            <h6 class="card-title fw-bold">{{ $char->name }}</h6>
                            <p>Class: <span class="mb-1 fw-semibold">{{$pgtype}}</span></p>
                            <div class="stats d-flex gap-3">
                                <i class="fa-solid fa-dumbbell atk"><span>{{ $char->attack }}</span></i>
                                <i class="fa-solid fa-shield-halved def"><span>{{ $char->defence }}</span></i>
                                <i class="fa-solid fa-person-running vel"><span>{{ $char->speed }}</span></i>
                                <i class="fa-solid fa-heart health"><span>{{ $char->life }}</span></i>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection
