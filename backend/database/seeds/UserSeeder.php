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
          'user_name' => 'takeru',
        ],
        [
            'user_id' => 11,
            'user_name' => 'masato',
          ],
          [
            'user_id' => 1,
            'user_name' => 'musashi',
          ],
          [
            'user_id' => 2,
            'user_name' => 'tenshin',
          ],
          [
            'user_id' => 3,
            'user_name' => 'kid',
          ],
          [
            'user_id' => 4,
            'user_name' => 'kyoji',
          ],
          [
            'user_id' => 5,
            'user_name' => 'kai',
          ],
          [
            'user_id' => 6,
            'user_name' => 'mikuru',
          ],
          [
            'user_id' => 7,
            'user_name' => 'leona',
          ],
          [
            'user_id' => 8,
            'user_name' => 'yutaka',
          ],
          [
            'user_id' => 9,
            'user_name' => 'taiju',
          ],
          [
            'user_id' => 10,
            'user_name' => 'kento',
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
