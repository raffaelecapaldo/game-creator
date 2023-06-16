@extends('layouts.app')


@section('content')
    <div class="text-white px-5 mx-auto">
        <div class="py-5 row row-cols-1 row-cols-md-2 row-cols-lg-4 flex-wrap mx-auto">
            @foreach ($items as $item)
                <div class="col p-2">
                    <div class="flex flex-column gap-2 justify-content-center p-2 cardBackgroundIndex">
                        <div>
                            <h4 class="card-title">{{ $item->name }}</h4>
                            <p class="fw-bold">{{ $item->type }}</p>
                        </div>
                        <div class="d-flex gap-2 flex-wrap">
                            <a class="btn btn-primary text-uppercase fw-bold" href="{{ route('admin.items.edit', $item->slug) }}">dettagli</a>
                            <a class="btn btn-primary text-uppercase fw-bold" href="{{ route('admin.items.edit', $item->slug) }}">modifica</a>
                            <form action="{{ route('admin.items.destroy', $item->slug) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type='submit' class="delete-button btn btn-danger text-uppercase fw-bold"
                                    data-item-title="{{ $item->name }}">elimina</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @include('partials.modal-delete')
@endsection

@section('showlink')
@endsection
