<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\TeamMembers;
use Illuminate\Http\Request;

class TeamMembersController extends Controller
{
    public function index() {
        $members = TeamMembers::all();
        if (!$members) {
            return response()->json([
                'success' => false,
                'results' => 'Members not founded',
                'status' => 'not-found'
            ], 404);
    }
    else {
        return response()->json([
            'success' => true,
            'results' => $members,
            'status' => 'ok'

        ]);
    }
    }}
