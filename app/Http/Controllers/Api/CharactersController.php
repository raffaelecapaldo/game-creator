<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Character;
use Illuminate\Http\Request;

class CharactersController extends Controller
{
    public function index(Request $request)
    {
        $quantity = $request->input('quantity', 5);
        $characters = Character::latest()->with(['type'])->paginate($quantity);

        if (!$characters) {
            return response()->json([
                'success' => false,
                'results' => 'Characters not found'
            ]);
        } else {
            $characters->appends(['quantity' => $quantity]);

            return response()->json([
                'success' => true,
                'results' => $characters
            ]);
        }
    }

    public function show($id) {
        $character = Character::where('id', $id)->with(['type', 'items'])->first();
        if (!$character) {
            return response()->json([
                'success' => false,
                'results' => 'Project not found'
            ]);
    }
    else {
        return response()->json([
            'success' => true,
            'results' => $character
        ]);
    }
}}
