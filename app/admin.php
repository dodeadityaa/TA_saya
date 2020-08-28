<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $table = 'admins';
    protected $fillable = ['nama','email','no_telp','password'];
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $dates = ['created_at','update_at'];
}
