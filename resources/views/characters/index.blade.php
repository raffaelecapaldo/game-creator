@extends('layouts.app')


@section('content')
    <div class="container pgIndex text-white">
        <div class="pg-list p-5 d-flex flex-wrap gap-3">
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
                <div class="card text-dark flip-card overflow-hidden bg-dark" style="width: 18rem;">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <div class="imgwrapper overflow-hidden">
                                <img class="front" src="/img/characters-profile/{{$pgtype}}.jpg" class="card-img-top" alt="barbarian">
                            </div>
                            <div class="card-body bg-white">
                                <h4 class="card-title">{{ $char->name }}</h4>
                                <p>Class: <span class="fw-bold">{{$pgtype}}</span></p>

                                {{-- <a href="{{ route('characters.show', ['id' => $char->id, str_replace(' ', '-', $char->name)]) }}"
                                    class="btn btn-primary">More infos</a> --}}
                            </div>
                        </div>
                        <div class="flip-card-back">
                            <a class="position-relative" href="@if (url()->current() == route('characters.index'))
                                {{ route('characters.show', ['id' => $char->id, str_replace(' ', '-', $char->name)]) }}
                                @elseif (url()->current() == route('admin.characters.index'))
                                {{ route('admin.characters.show', $char->id) }}
                                @endif
                                ">
                                <img class="back" src="/img/characters/{{$pgtype}}.png" class="card-img-top" alt="barbarian">
                                <h3 class="position-absolute">Click for more datails</h3>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@section('showlink')
@endsection
