<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'title',
        'maincateg',
        'platform',
        'actprice1',
        'norating1',
        'noreviews1',
        'star_5f',
        'star_4f',
        'star_3f',
        'star_2f',
        'star_1f',
        'fulfilled1',
    ];
}
