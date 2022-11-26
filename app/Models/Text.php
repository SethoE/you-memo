<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Text extends Model
{
    use HasFactory;

    protected $fillable = [
        'card_id',
        'location_type',
        'text',
    ];
    public function flash_card() {
        return $this->belongsTo(Flash_cards::class, 'card_id');
    }
}
