<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Character;
use Illuminate\Http\Request;

class CharactersController extends Controller
{
    public function index(Request $request)
    {
        $quantity = $request->input('quantity');
        if ($quantity) {
        $characters = Character::latest()->with(['type'])->paginate($quantity);
        }
        else {
            $characters = Character::with(['type'])->get();
        }

        if (!$characters) {
            return response()->json([
                'success' => false,
                'results' => 'Characters not found',
                'status' => 'not-found'
            ], 404);
        } else {

            if ($quantity) {
            $characters->appends(['quantity' => $quantity]);
            }

            return response()->json([
                'success' => true,
                'results' => $characters,
                'status' => 'ok'

            ]);
        }
    }

    public function show($id) {
        $character = Character::where('id', $id)->with(['type', 'items'])->first();
        if (!$character) {
            return response()->json([
                'success' => false,
                'results' => 'Character not found',
                'status' => 'not-found'
            ], 404);
    }
    else {
        return response()->json([
            'success' => true,
            'results' => $character,
            'status' => 'ok'

        ]);
    }
}}
