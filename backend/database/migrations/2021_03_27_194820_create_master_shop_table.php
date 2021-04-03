<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasterShopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('master_shop'))
        {
            Schema::create('master_shop', function (Blueprint $table) {            
                $table->string('num', 37)->charset('utf8');
                $table->unsignedInteger('price')->default(0);
                $table->unsignedInteger('reward')->default(0);
                $table->primary('num');
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
        Schema::dropIfExists('master_shop');
    }
}
