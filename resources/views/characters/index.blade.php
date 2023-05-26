@extends('layouts.app')
@section('content')
    <div class="container text-white">
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
                <div class="card text-dark" style="width: 18rem;">
                    <img src="/img/characters-profile/{{$pgtype}}.png" class="card-img-top" alt="barbarian">
                    <div class="card-body">
                        <h4 class="card-title">{{ $char->name }}</h4>
                        <p>Class: <span class="mb-1 fw-bold">Barbarian</span></p>

                        <a href="{{ route('characters.show', ['id' => $char->id, str_replace(' ', '-', $char->name)]) }}"
                            class="btn btn-primary">More infos</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
