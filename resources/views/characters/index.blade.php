@extends('layouts.app')
@section('content')
    <div class="container text-white">
        <div class="pg-list p-5 d-flex justify-content-center flex-wrap gap-4">
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
                <div class="card" style="width: 16rem;">
                    <img src="/img/characters-profile/{{$pgtype}}.jpg" class="card-img-top" alt="barbarian">
                    <div class="card-body">
                        <h6 class="card-title">{{ $char->name }}</h6>
                        <p>Class: <span class="mb-1 fw-bold">{{$pgtype}}</span></p>

                        <a href="{{ route('characters.show', ['id' => $char->id, str_replace(' ', '-', $char->name)]) }}"
                            class="btn btn-primary">More infos</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
