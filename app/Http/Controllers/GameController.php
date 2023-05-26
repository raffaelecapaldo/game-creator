<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;


class GameController extends Controller
{
    public function index(){
        return view('home');
    }
    public function characters(){
        $characters = Character::all();
        return view('characters.index', compact('characters'));
    }
    public function show($id){
        return view('characters.show');
    }
}
