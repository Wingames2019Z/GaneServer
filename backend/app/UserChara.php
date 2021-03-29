<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserChara extends Model
{
    //table
    protected $table = 'user_chara';
    public $incrementing = false;
    protected $primaryKey = 'user_id';
    public $timestamps = false;

}
