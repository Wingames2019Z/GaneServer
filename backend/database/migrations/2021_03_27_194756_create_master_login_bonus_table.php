<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasterLoginBonusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        if(!Schema::hasTable('master_login_bonus'))
        {
            Schema::create('master_login_bonus', function (Blueprint $table) {            
                $table->unsignedSmallInteger('login_day')->default(0);
                $table->unsignedInteger('bonus_coin')->default(0);
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_login_bonus');
    }
}
