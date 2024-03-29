<?php

namespace Colorize;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Storage;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable, HasApiTokens;

    public $timestamps = false;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'name', 'email', 'password', 'active', 'activation_token', 'avatar', 'role', 'phone'
    ];
}
