<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    protected $fillable = ['title', 'client', 'image', 'tech', 'is_private', 'web'];

    protected $casts = [
        'image' => 'array',
        'tech' => 'array',
    ];
}
