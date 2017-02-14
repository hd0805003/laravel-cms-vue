<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Admins extends Model
{
    //
    protected $table = 'admins';
    protected $primaryKey = 'id';
    protected $fillable = ['username', 'password','phone', 'email','sex', 'image', 'is_super','updated_at'];
}
