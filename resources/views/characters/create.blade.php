@extends('layouts.app')
@section('content')
    <div class="container text-white">
        <h2 class="text-center">Crea un nuovo personaggio</h2>
        <form action="{{ route('admin.characters.store') }}" method="post">
            @csrf
            <div class="row d-flex justify-content-center mt-3 mb-2">
                <div class="col-6">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Insert character name">
                </div>

            </div>
            <div class="row d-flex justify-content-center mb-2">
                <div class="col-6">
                    <label for="type_id" class="form-label">Choose your class</label>
                    <select name="type_id" class="form-select">
                        <option value="1">Barbarian</option>
                        <option value="2">Bard</option>
                        <option value="3">Cleric</option>
                        <option value="4">Druid</option>
                        <option value="5">Fighter</option>
                        <option value="6">Monk</option>
                        <option value="7">Paladin</option>
                        <option value="8">Ranger</option>
                        <option value="9">Rogue</option>
                        <option value="10">Sorcerer</option>
                        <option value="11">Warlock</option>
                        <option value="12">Wizard</option>
                    </select>
                </div>

            </div>
            <div class="row d-flex justify-content-center mt-3 mb-2">
                <div class="col-6">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" placeholder="Insert your description" name="description" cols="30" rows="10"></textarea>
                </div>

            <div class="buttons d-flex justify-content-center mt-3">
                <button type="submit" class="btn btn-primary">Create</button>
                </div>

        </form>

    </div>
@endsection
