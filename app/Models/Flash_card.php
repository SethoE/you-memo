<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flash_card extends Model
{
    use HasFactory;

    protected $fillable = [
        'deck_id',
        'question_content_type_id',
        'answer_content_type_id',
        'question_content_type_id',
        'question_content_type_id',
    ];

    public function deck() {
        return $this->belongsTo(Deck::class, 'deck_id');
    }
    
    public function content_typ() {
        return $this->belongsTo(Deck::class, 'content_typ_id');
    }
    public function text() {
        return $this->hasMany(Text::class, 'text_id');
    }

    public function image() {
        return $this->hasMany(Image::class, 'image_id');
    }

    public function audio() {
        return $this->hasMany(Audio::class, 'audio_id');
    }

    public function video() {
        return $this->hasMany(Video::class, 'video_id');
    }
    
}
