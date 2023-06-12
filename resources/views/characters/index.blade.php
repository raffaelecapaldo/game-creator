@extends('layouts.app')


@section('content')
    <div class="text-white px-5 mx-auto">
        <div class="py-5 row row-cols-1 row-cols-md-2 row-cols-lg-4 flex-wrap mx-auto">
            @foreach ($chars as $char)
                @php
                    foreach ($types as $type) {
                        if ($type->id == $char->type_id) {
                            $pgtype = $type->name;
                        }
                    }
                @endphp

                <div class="col p-2">
                    <div class="flex flex-column gap-2 justify-content-center p-2 cardBackgroundIndex">
                        <div class="overflow-hidden mb-3" style="height: 240px">
                            <img class="characterImage h-100 w-100" src="/img/characters-profile/{{ $pgtype }}.jpg"
                                alt="barbarian">
                        </div>
                        <div>
                            <h4 class="card-title">{{ $char->name }}</h4>
                            <p class="fw-bold">{{ $pgtype }}</p>
                        </div>
                        <div>
                            <a class="btn btn-primary text-uppercase fw-bold"
                                href="{{ '/characters/' . $char->id }}">datails</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@section('showlink')
@endsection
