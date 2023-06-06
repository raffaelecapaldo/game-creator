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
        $data = $request->validated();
        $newChar = new Character();
        $newChar->fill($data);
        $newChar->save();

        return redirect()->route('characters.show', $newChar->id);

    }

    public function update(UpdateCharacterRequest $request, Character $character)
    {
        $data = $request->validated();
        $character->update($data);

        return redirect()->route('characters.show', $character->id);

    }

    public function destroy(Character $character)
    {
        $character->delete();
        return redirect()->route('characters.index');
    }
}
