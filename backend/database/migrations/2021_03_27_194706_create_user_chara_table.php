<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserCharaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('user_chara'))
        {
            Schema::create('user_chara', function (Blueprint $table) {
                $table->string('user_id', 37)->charset('utf8');              
                $table->unsignedSmallInteger('open_chara1')->default(1);
                $table->unsignedSmallInteger('open_chara2')->default(0);
                $table->unsignedSmallInteger('open_chara3')->default(0);
                $table->unsignedSmallInteger('open_chara4')->default(0);
                $table->unsignedSmallInteger('open_chara5')->default(0);
                $table->unsignedSmallInteger('open_chara6')->default(0);
                $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
                $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
                $table->primary('user_id');
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
        Schema::dropIfExists('user_chara');
    }
}
