<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class homebanner extends Model
{
    use HasFactory;

    protected $table = "homebanners";
    protected $casts = [
        'main_heading' => 'array' // JSON ko automatically array mein convert karega
    ];
    protected $fillable = ['short_heading', 'main_heading', 'paragraph'];
}
