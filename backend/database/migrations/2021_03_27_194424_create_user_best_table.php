<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserBestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        if(!Schema::hasTable('user_best'))
        {
            Schema::create('user_best', function (Blueprint $table) {
                $table->string('user_id', 37)->charset('utf8');              
                $table->unsignedInteger('best_stage1')->default(0);
                $table->unsignedInteger('best_stage2')->default(0);
                $table->unsignedInteger('best_stage3')->default(0);
                $table->unsignedInteger('best_stage4')->default(0);
                $table->unsignedInteger('best_stage5')->default(0);
                $table->unsignedInteger('best_stage6')->default(0);
                $table->unsignedInteger('best_stage7')->default(0);
                $table->unsignedInteger('best_stage8')->default(0);
                $table->unsignedInteger('best_stage9')->default(0);
                $table->unsignedInteger('best_stage10')->default(0);
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
        Schema::dropIfExists('user_best');
    }
}
