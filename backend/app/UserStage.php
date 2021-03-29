<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserStage extends Model
{
    //table
    protected $table = 'user_stage';
    public $incrementing = false;
    protected $primaryKey = 'user_id';
    public $timestamps = false;

}
