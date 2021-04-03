<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MasterShop extends Model
{
    //table
    protected $table = 'master_shop';
    public $incrementing = false;
    protected $primaryKey = 'num';
    
}