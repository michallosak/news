<?php

namespace App;

use App\Model\User\AvatarUser;
use App\Model\User\SpecificUser;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'email', 'password'
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];


    // s = specific data user
    public function s(){
        return $this->hasOne(SpecificUser::class);
    }

    public function avatar(){
        return $this->hasOne(AvatarUser::class);
    }
}
