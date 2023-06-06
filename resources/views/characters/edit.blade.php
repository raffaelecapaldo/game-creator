@extends('layouts.app')
@section('content')
    <div class="container text-white">
        <h2 class="text-center mt-2">Crea un nuovo personaggio</h2>
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
                        <option @if ($character->type_id === 1)
                            selected
                        @endif value="1">Barbarian</option>
                        <option @if ($character->type_id === 2)
                            selected
                            @endif value="2">Bard</option>
                        <option @if ($character->type_id === 3)
                            selected
                            @endif value="3">Cleric</option>
                        <option @if ($character->type_id === 4)
                            selected
                            @endif value="4">Druid</option>
                        <option @if ($character->type_id === 5)
                            selected
                            @endif value="5">Fighter</option>
                        <option @if ($character->type_id === 6)
                            selected
                            @endif value="6">Monk</option>
                        <option @if ($character->type_id === 7)
                            selected
                            @endif value="7">Paladin</option>
                        <option @if ($character->type_id === 8)
                            selected
                            @endif value="8">Ranger</option>
                        <option @if ($character->type_id === 9)
                            selected
                            @endif value="9">Rogue</option>
                        <option @if ($character->type_id === 10)
                            selected
                            @endif value="10">Sorcerer</option>
                        <option @if ($character->type_id === 11)
                            selected
                            @endif value="11">Warlock</option>
                        <option @if ($character->type_id === 12)
                            selected
                            @endif value="12">Wizard</option>
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
