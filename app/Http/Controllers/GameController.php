<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Models\Type;
use Illuminate\Http\Request;


class GameController extends Controller
{
    public function index(){
        return view('home');
    }
    public function characters(){
        $chars = Character::all();
        $types = Type::all();
        return view('characters.index', compact('chars', 'types'));
    }
    public function show($id){
        $char = Character::findOrFail($id);
        $type = Type::findOrFail($char->type_id);
        return view('characters.show', compact('char', 'type'));
    }
}
