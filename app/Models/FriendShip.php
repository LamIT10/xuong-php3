<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FriendShip extends Model
{
    /** @use HasFactory<\Database\Factories\FriendShipFactory> */
    use HasFactory;
    protected $table = 'friendships';
    protected $fillable = [
        'id',
        'user_id',
        'friend_id',
        'status'
    ];
}
