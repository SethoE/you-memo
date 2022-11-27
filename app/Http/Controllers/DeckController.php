<?php

namespace App\Http\Controllers;

use App\Models\Content_type;
use App\Models\User;


class DeckController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('decks.home', [
            'title' => 'Home',
            'current_user' => $user
        ]);
    }

    public function user_decks(User $user)
    {
        
        return view('decks.users-decks', [
            'title' => 'Your decks',
            'user' => $user,
            'userDecks' => $user->deck()->get(),
        ]);
    }

    public function showCreateDeck() {
        return view('decks.create', [
            'title' => 'Create deck',
            'content_types' => Content_type::latest()->get(),
        ]);
    }
}
