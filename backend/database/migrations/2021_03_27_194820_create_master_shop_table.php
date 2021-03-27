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
                $table->unsignedInteger('start_price')->default(100);
                $table->float('price_increase')->default(1.5);
                $table->float('reward_increase')->default(1.2);
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
