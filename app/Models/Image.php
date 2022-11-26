<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'card_id',
        'location_type',
        'url',
    ];
    public function flash_card() {
        return $this->belongsTo(Flash_cards::class, 'card_id');
    }
}
