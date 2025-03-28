<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /** @use HasFactory<\Database\Factories\CommentsFactory> */
    use HasFactory;
    protected $fillable = [
        'id',
        'user_id',
        'post_id',
        'parent_id',
        'content'
    ];
}
