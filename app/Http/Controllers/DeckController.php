<?php

namespace App\Http\Controllers;

use App\Models\Deck;
use Illuminate\Http\Request;

class DeckController extends Controller
{
    public function index() {
        return view('home',[
            'decks' => Deck::latest()->get(),
            'current_user' => auth()->user()
        ]);
    }
}
