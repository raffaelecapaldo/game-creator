<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCharacterRequest;
use App\Http\Requests\UpdateCharacterRequest;
use Illuminate\Http\Request;
use App\Models\Character;

class CharactersController extends Controller
{
    public function create()
    {
        return view('characters.create');
    }

    public function edit(Character $character)
    {
        return view('characters.edit', compact('character'));
    }

    public function store(StoreCharacterRequest $request)
    {
        //
    }

    public function update(UpdateCharacterRequest $request, Character $character)
    {
        //
    }

    public function destroy(Character $character)
    {
        //
    }
}
