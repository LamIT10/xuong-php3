<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    /** @use HasFactory<\Database\Factories\LikesFactory> */
    use HasFactory;
    protected $fillable = [
        'id',
        'friend_id',
        'user_id',
        'status'
    ];
}
