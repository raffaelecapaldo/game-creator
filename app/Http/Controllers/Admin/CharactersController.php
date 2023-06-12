<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreCharacterRequest;
use App\Http\Requests\UpdateCharacterRequest;
use Illuminate\Http\Request;
use App\Models\Character;
use App\Http\Controllers\Controller;
use App\Models\Type;

class CharactersController extends Controller
{
    public function index() {
        $chars = Character::all();
        $types = Type::all();
        return view('admin.characters.index', compact('chars', 'types'));
    }

    public function create()
    {
        $types = Type::all();
        return view('admin.characters.create', compact('types'));
    }

    public function edit(Character $character)
    {
        $types = Type::all();
        return view('admin.characters.edit', compact('character', 'types'));
    }

    public function show(Character $character){
        $char = $character;
        $type = $character->type;
        return view('admin.characters.show', compact('char', 'type'));
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

        $newChar->items()->attach($request->items);

        return redirect()->route('admin.characters.show', $newChar->id);

    }

    public function update(UpdateCharacterRequest $request, Character $character)
    {
        $data = $request->validated();
        $character->update($data);
        $character->items()->sync($request->items);


        return redirect()->route('admin.characters.show', $character->id);

    }

    public function destroy(Character $character)
    {
        $character->delete();
        return redirect()->route('admin.characters.index');
    }
}
