<?php

use App\Http\Controllers\DeckController;
use App\Http\Controllers\UserController;
use App\Models\Deck;
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

/**
 *  DECKS Endpoints
 */

Route::get('/', [DeckController::class, 'index']);

Route::get('/{user}/decks', [DeckController::class, 'user_decks'])->middleware('auth');
// Show create deck page
Route::get('/decks/create', [DeckController::class, 'showCreateDeck'])->middleware('auth');


/**
 *  USERS Endpoints
 */


 // Update listing
 Route::get('/register', [UserController::class, 'index'])->middleware('guest');

 // Update listing
 Route::post('/users', [UserController::class, 'store'])->middleware('guest');
 
//  // Log user out
 
 Route::post('/users/logout', [UserController::class, 'logout'])->middleware('auth');
 
//  // Show login form
 
 Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
 
//  // Login user 
 Route::post('/users/authenticate', [UserController::class, 'authenticate']);

