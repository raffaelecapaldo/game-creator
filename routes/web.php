<?php

use App\Http\Controllers\Admin\CharactersController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\Admin\ItemsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});


/* Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
}); */

Route::get('/', [GameController::class, 'index'] )->name('home');
Route::get('/characters', [GameController::class, 'characters'] )->name('characters.index');
Route::get('/characters/{id}', [GameController::class, 'show'] )->name('characters.show');


Route::middleware(['auth', 'verified'])
    ->name('admin.')
    ->prefix('admin')
    ->group(function(){
        Route::resource('characters', CharactersController::class);
        Route::resource('items', ItemsController::class);
    });

Route::get('/admin', function () {
    return view('dashboard');
});

require __DIR__ . '/auth.php';


