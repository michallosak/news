<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;

class AvatarUser extends Model
{
    protected $fillable = [
        'user_id',
        'avatar'
    ];
}
