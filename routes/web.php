<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;

use App\Http\Controllers\AccountController;
use App\Http\Controllers\SearchResultController;

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
})->name('home');

Route::get('/profile', function () {
    return view('account-profile');
})->middleware(['auth'])->name('account-profile');

Route::get('/games', [GameController::class, 'gameList']) ->name('game-list');
Route::get('/game/{id}', [GameController::class, 'getGameById' ]) ->name('game-info');

require __DIR__.'/auth.php';


Route::get('/wishlist', [AccountController::class, 'show'])->middleware(['auth']) ->name ('wish-list');

Route::get('/search-results', [GameController::class, 'displayResults']);
