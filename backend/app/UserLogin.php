<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserLogin extends Model
{
    //table
    protected $table = 'user_login';
    public $incrementing = false;
    protected $primaryKey = 'user_id';
    public $timestamps = false;

}
