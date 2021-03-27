<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserStageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('user_stage'))
        {
            Schema::create('user_stage', function (Blueprint $table) {
                $table->string('user_id', 37)->charset('utf8');              
                $table->unsignedSmallInteger('open_stage1')->default(1);
                $table->unsignedSmallInteger('open_stage2')->default(0);
                $table->unsignedSmallInteger('open_stage3')->default(0);
                $table->unsignedSmallInteger('open_stage4')->default(0);
                $table->unsignedSmallInteger('open_stage5')->default(0);
                $table->unsignedSmallInteger('open_stage6')->default(0);
                $table->unsignedSmallInteger('open_stage7')->default(0);
                $table->unsignedSmallInteger('open_stage8')->default(0);
                $table->unsignedSmallInteger('open_stage9')->default(0);
                $table->unsignedSmallInteger('open_stage10')->default(0);
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
        Schema::dropIfExists('user_stage');
    }
}
