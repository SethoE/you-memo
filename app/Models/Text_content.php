<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Text_content extends Model
{
    protected $fillable = [
        'content_typ_number',
        'content_typ_name',
    ];

    use HasFactory;
}
