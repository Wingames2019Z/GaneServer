<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserBest extends Model
{
    //table
    protected $table = 'user_best';
    public $incrementing = false;
    protected $primaryKey = 'user_id';
    public $timestamps = false;

}
