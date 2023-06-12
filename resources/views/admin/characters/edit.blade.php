@extends('layouts.app')
@section('content')
    <div class="container text-white">
        <h2 class="text-center mt-2">Modifica il personaggio {{$character->name}}</h2>
        <form action="{{ route('admin.characters.update', $character->id) }}" method="post">
            @csrf
             @method('PUT')
            <div class="row d-flex justify-content-center mt-3 mb-2">
                <div class="col-6">
                    <label for="name" class="form-label">Name</label>
                    <input name="name" type="text" value="{{$character->name}}" class="form-control" placeholder="Insert character name">
                </div>

            </div>
            <div class="row d-flex justify-content-center mb-2">
                <div class="col-6">
                    <label for="type_id" class="form-label">Choose your class</label>
                    <select name="type_id" class="form-select">
                        @foreach ($types as $type)
                        <option @if ($character->type_id === $type->id)
                            selected
                        @endif value="{{$type->id}}">{{$type->name}}</option>
                        @endforeach

                    </select>
                </div>

            </div>
            <div class="row d-flex justify-content-center mb-2">
                <div class="col-6">
                    <label for="items[]" class="form-label">Choose your items</label>
                    <select id="select-items" name="items[]" multiple data-placeholder="Add items">
                        @foreach ($items as $item)
                        <option
                        {{$character->items->contains($item->id) ? 'selected': ''}}
                         class="optionItem" value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>

                </div>

            </div>
            <div class="row d-flex justify-content-center mt-3 mb-2">
                <div class="col-6">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" name="description" cols="30" rows="10">{{$character->description}}</textarea>
                </div>

            </div>
            <div class="buttons d-flex justify-content-center mt-3">
            <button type="submit" class="btn btn-primary">Edit</button>
            </div>


        </form>

    </div>
@endsection

@section('characterlink')
{{route('admin.characters.index')}}
@endsection
