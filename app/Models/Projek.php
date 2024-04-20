<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projek extends Model
{
    use HasFactory;

    protected $table = 'projek';

    protected $fillable = [
        'image', 
        'title', 
        'content',
        'slug',
        'is_active',
        'views'
    ];
}
