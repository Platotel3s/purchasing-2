<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Posting extends Model
{
    protected $table = 'posts';
    protected $fillable = [
        'title',
        'content'
    ];
}
