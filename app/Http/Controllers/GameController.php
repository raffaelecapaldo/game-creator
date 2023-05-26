<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index(){
        return view('home');
    }
    public function characters(){
        return view('characters.index');
    }
    public function show(){
        return view('characters.show');
    }
}
