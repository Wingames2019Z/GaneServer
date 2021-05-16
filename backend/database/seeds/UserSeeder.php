<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('user_profile')->insert([
        [
          'user_id' => 0,
          'user_name' => '武尊',
        ],
        [
            'user_id' => 11,
            'user_name' => '魔裟斗',
          ],
          [
            'user_id' => 1,
            'user_name' => '武蔵',
          ],
          [
            'user_id' => 2,
            'user_name' => '天心',
          ],
          [
            'user_id' => 3,
            'user_name' => 'キッド',
          ],
          [
            'user_id' => 4,
            'user_name' => 'きょうじ',
          ],
          [
            'user_id' => 5,
            'user_name' => 'かい',
          ],
          [
            'user_id' => 6,
            'user_name' => 'みくる',
          ],
          [
            'user_id' => 7,
            'user_name' => 'れおな',
          ],
          [
            'user_id' => 8,
            'user_name' => 'ゆたか',
          ],
          [
            'user_id' => 9,
            'user_name' => '大珠',
          ],
          [
            'user_id' => 10,
            'user_name' => 'けんと',
          ],
      ]);

      DB::table('user_best')->insert([
          [
                'user_id' => 0,
                'best_stage1' => mt_rand(100, 5000),
                'best_stage2' => mt_rand(100, 5000),
                'best_stage3' => mt_rand(100, 5000),
                'best_stage4' => mt_rand(100, 5000),
                'best_stage5' => mt_rand(100, 5000),
                'best_stage6' => mt_rand(100, 5000),
                'best_stage7' => mt_rand(100, 5000),
                'best_stage8' => mt_rand(100, 5000),
                'best_stage9' => mt_rand(100, 5000),
                'best_stage10' => mt_rand(100, 5000),
            ],
            [
                'user_id' => 1,
                'best_stage1' => mt_rand(100, 5000),
                'best_stage2' => mt_rand(100, 5000),
                'best_stage3' => mt_rand(100, 5000),
                'best_stage4' => mt_rand(100, 5000),
                'best_stage5' => mt_rand(100, 5000),
                'best_stage6' => mt_rand(100, 5000),
                'best_stage7' => mt_rand(100, 5000),
                'best_stage8' => mt_rand(100, 5000),
                'best_stage9' => mt_rand(100, 5000),
                'best_stage10' => mt_rand(100, 5000),
            ],
            [
                'user_id' => 2,
                'best_stage1' => mt_rand(100, 5000),
                'best_stage2' => mt_rand(100, 5000),
                'best_stage3' => mt_rand(100, 5000),
                'best_stage4' => mt_rand(100, 5000),
                'best_stage5' => mt_rand(100, 5000),
                'best_stage6' => mt_rand(100, 5000),
                'best_stage7' => mt_rand(100, 5000),
                'best_stage8' => mt_rand(100, 5000),
                'best_stage9' => mt_rand(100, 5000),
                'best_stage10' => mt_rand(100, 5000),
            ],
            [
                'user_id' => 3,
                'best_stage1' => mt_rand(100, 5000),
                'best_stage2' => mt_rand(100, 5000),
                'best_stage3' => mt_rand(100, 5000),
                'best_stage4' => mt_rand(100, 5000),
                'best_stage5' => mt_rand(100, 5000),
                'best_stage6' => mt_rand(100, 5000),
                'best_stage7' => mt_rand(100, 5000),
                'best_stage8' => mt_rand(100, 5000),
                'best_stage9' => mt_rand(100, 5000),
                'best_stage10' => mt_rand(100, 5000),
            ],
            [
                'user_id' => 4,
                'best_stage1' => mt_rand(100, 5000),
                'best_stage2' => mt_rand(100, 5000),
                'best_stage3' => mt_rand(100, 5000),
                'best_stage4' => mt_rand(100, 5000),
                'best_stage5' => mt_rand(100, 5000),
                'best_stage6' => mt_rand(100, 5000),
                'best_stage7' => mt_rand(100, 5000),
                'best_stage8' => mt_rand(100, 5000),
                'best_stage9' => mt_rand(100, 5000),
                'best_stage10' => mt_rand(100, 5000),
            ],
            [
                'user_id' => 5,
                'best_stage1' => mt_rand(100, 5000),
                'best_stage2' => mt_rand(100, 5000),
                'best_stage3' => mt_rand(100, 5000),
                'best_stage4' => mt_rand(100, 5000),
                'best_stage5' => mt_rand(100, 5000),
                'best_stage6' => mt_rand(100, 5000),
                'best_stage7' => mt_rand(100, 5000),
                'best_stage8' => mt_rand(100, 5000),
                'best_stage9' => mt_rand(100, 5000),
                'best_stage10' => mt_rand(100, 5000),
            ],
            [
                'user_id' => 6,
                'best_stage1' => mt_rand(100, 5000),
                'best_stage2' => mt_rand(100, 5000),
                'best_stage3' => mt_rand(100, 5000),
                'best_stage4' => mt_rand(100, 5000),
                'best_stage5' => mt_rand(100, 5000),
                'best_stage6' => mt_rand(100, 5000),
                'best_stage7' => mt_rand(100, 5000),
                'best_stage8' => mt_rand(100, 5000),
                'best_stage9' => mt_rand(100, 5000),
                'best_stage10' => mt_rand(100, 5000),
            ],
            [
                'user_id' => 7,
                'best_stage1' => mt_rand(100, 5000),
                'best_stage2' => mt_rand(100, 5000),
                'best_stage3' => mt_rand(100, 5000),
                'best_stage4' => mt_rand(100, 5000),
                'best_stage5' => mt_rand(100, 5000),
                'best_stage6' => mt_rand(100, 5000),
                'best_stage7' => mt_rand(100, 5000),
                'best_stage8' => mt_rand(100, 5000),
                'best_stage9' => mt_rand(100, 5000),
                'best_stage10' => mt_rand(100, 5000),
            ],
            [
                'user_id' => 8,
                'best_stage1' => mt_rand(100, 5000),
                'best_stage2' => mt_rand(100, 5000),
                'best_stage3' => mt_rand(100, 5000),
                'best_stage4' => mt_rand(100, 5000),
                'best_stage5' => mt_rand(100, 5000),
                'best_stage6' => mt_rand(100, 5000),
                'best_stage7' => mt_rand(100, 5000),
                'best_stage8' => mt_rand(100, 5000),
                'best_stage9' => mt_rand(100, 5000),
                'best_stage10' => mt_rand(100, 5000),
            ],
            [
                'user_id' => 9,
                'best_stage1' => mt_rand(100, 5000),
                'best_stage2' => mt_rand(100, 5000),
                'best_stage3' => mt_rand(100, 5000),
                'best_stage4' => mt_rand(100, 5000),
                'best_stage5' => mt_rand(100, 5000),
                'best_stage6' => mt_rand(100, 5000),
                'best_stage7' => mt_rand(100, 5000),
                'best_stage8' => mt_rand(100, 5000),
                'best_stage9' => mt_rand(100, 5000),
                'best_stage10' => mt_rand(100, 5000),
            ],
            [
                'user_id' => 10,
                'best_stage1' => mt_rand(100, 5000),
                'best_stage2' => mt_rand(100, 5000),
                'best_stage3' => mt_rand(100, 5000),
                'best_stage4' => mt_rand(100, 5000),
                'best_stage5' => mt_rand(100, 5000),
                'best_stage6' => mt_rand(100, 5000),
                'best_stage7' => mt_rand(100, 5000),
                'best_stage8' => mt_rand(100, 5000),
                'best_stage9' => mt_rand(100, 5000),
                'best_stage10' => mt_rand(100, 5000),
            ],
      ]);

    }
}
