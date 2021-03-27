<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    //table
    protected $table = 'user_profile';
    public $incrementing = false;
    protected $primaryKey = 'user_id';
    public $timestamps = false;

}
