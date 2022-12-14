<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deck extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'deck_name',
        'deck_status',
        'last_used_at',
        'active_since',
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function flash_cards() {
        return $this->hasMany(Flash_cards::class, 'card_id');
    }
}
