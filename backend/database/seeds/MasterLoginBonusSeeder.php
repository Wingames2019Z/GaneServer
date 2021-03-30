<?php

use Illuminate\Database\Seeder;

class MasterLoginBonusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('master_login_bonus')->insert([
            [
                'login_day' => '1',
                'bonus_coin' => '100',
            ],
            [
                'login_day' => '2',
                'bonus_coin' => '130',
            ],
            [
                'login_day' => '3',
                'bonus_coin' => '169',
            ],
            [
                'login_day' => '4',
                'bonus_coin' => '219',
            ],
            [
                'login_day' => '5',
                'bonus_coin' => '285',
            ],
            [
                'login_day' => '6',
                'bonus_coin' => '371',
            ],
            [
                'login_day' => '7',
                'bonus_coin' => '482',
            ],
            [
                'login_day' => '8',
                'bonus_coin' => '627',
            ],
            [
                'login_day' => '9',
                'bonus_coin' => '815',
            ],
            [
                'login_day' => '10',
                'bonus_coin' => '1060',
            ],

          ]);


          DB::table('master_setting')->insert([
            [
                'max_stage' => '10',
                'max_chara' => '6',
            ],         
          ]);

          DB::table('master_shop')->insert([
            [
                'start_price' => '100',
                'price_increase' => '1.5',
                'reward_increase' => '1.2',
            ],         
          ]);
    }
}
