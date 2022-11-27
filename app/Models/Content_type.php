<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content_type extends Model
{
    use HasFactory;

    protected $fillable = [
        'content_type_number',
        'content_type_name',
    ];

    public function flash_card_answer() {
        return $this->hasMany(Flash_cards::class, 'answer_content_type_id');
    }

    public function flash_card_question() {
        return $this->hasMany(Flash_cards::class, 'question_content_type_id');
    }
}
