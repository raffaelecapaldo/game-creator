<?php

use App\Http\Controllers\Api\CharactersController;
use App\Http\Controllers\Api\TeamMembersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */

Route::resource('characters', CharactersController::class)->parameters(['characters' => 'character:slug'])->only(['index', 'show']);
Route::resource('team_members', TeamMembersController::class)->only(['index']);

