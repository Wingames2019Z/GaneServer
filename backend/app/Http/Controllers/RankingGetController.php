<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class RankingGetController extends Controller
{
    public function RankingGet($user_id, $stage)
    {
        $ranking = DB::select("SELECT user_best.user_id, best_stage1 AS score, user_name FROM user_best INNER JOIN user_profile ON user_best.user_id = user_profile.user_id order by best_stage1 desc");
       
            foreach ($ranking as $value){
                if($value->user_id != $user_id){
                    $value->user_id = NULL;
                }

            }
        
        $response = array(
			'ranking' => $ranking,
		);
        
        return json_encode($response);

    }
}
