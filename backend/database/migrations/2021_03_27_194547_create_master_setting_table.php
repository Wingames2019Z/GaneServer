<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasterSettingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('master_setting'))
        {
            Schema::create('master_setting', function (Blueprint $table) {     
                $table->unsignedSmallInteger('max_stage')->default(10);
                $table->unsignedSmallInteger('max_chara')->default(6);
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
        Schema::dropIfExists('master_setting');
    }
}
