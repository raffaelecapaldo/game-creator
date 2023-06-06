<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCharacterRequest;
use App\Http\Requests\UpdateCharacterRequest;
use Illuminate\Http\Request;
use App\Models\Character;

class CharactersController extends Controller
{
    public function index() {
       // return view('characters.index');
    }

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
        $newChar->attack = random_int(0, 100);
        $newChar->defence = random_int(0, 100);
        $newChar->speed = random_int(0, 100);
        $newChar->life = random_int(0, 100);
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
