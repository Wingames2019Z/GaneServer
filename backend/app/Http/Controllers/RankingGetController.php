<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class RankingGetController extends Controller
{
    public function RankingGet($user_id, $stage)
    {
        switch ($stage) {
            case 1:
                $ranking = DB::select("SELECT user_best.user_id, best_stage1 AS score, user_name FROM user_best INNER JOIN user_profile ON user_best.user_id = user_profile.user_id order by best_stage1 desc limit 100");
                foreach ($ranking as $value){       
                        if($value->user_id != $user_id){
                            $value->user_id = NULL;
                        }
                    
                    }
            break;

            case 2:
                $ranking = DB::select("SELECT user_best.user_id, best_stage2 AS score, user_name FROM user_best INNER JOIN user_profile ON user_best.user_id = user_profile.user_id order by best_stage2 desc limit 100");
                foreach ($ranking as $value){
                    if($value->user_id != $user_id){
                        $value->user_id = NULL;
                    }
    
                }

            break;

            case 3:
                $ranking = DB::select("SELECT user_best.user_id, best_stage3 AS score, user_name FROM user_best INNER JOIN user_profile ON user_best.user_id = user_profile.user_id order by best_stage3 desc limit 100");
                foreach ($ranking as $value){
                    if($value->user_id != $user_id){
                        $value->user_id = NULL;
                    }
    
                }

            break;

            case 4:
                $ranking = DB::select("SELECT user_best.user_id, best_stage4 AS score, user_name FROM user_best INNER JOIN user_profile ON user_best.user_id = user_profile.user_id order by best_stage4 desc limit 100");
                foreach ($ranking as $value){
                    if($value->user_id != $user_id){
                        $value->user_id = NULL;
                    }
    
                }
                
            break;

            case 5:
                $ranking = DB::select("SELECT user_best.user_id, best_stage5 AS score, user_name FROM user_best INNER JOIN user_profile ON user_best.user_id = user_profile.user_id order by best_stage5 desc limit 100");
                foreach ($ranking as $value){
                    if($value->user_id != $user_id){
                        $value->user_id = NULL;
                    }
    
                }
                
            break;

            case 6:
                $ranking = DB::select("SELECT user_best.user_id, best_stage6 AS score, user_name FROM user_best INNER JOIN user_profile ON user_best.user_id = user_profile.user_id order by best_stage6 desc limit 100");
                foreach ($ranking as $value){
                    if($value->user_id != $user_id){
                        $value->user_id = NULL;
                    }
    
                }
                
            break;

            case 7:
                $ranking = DB::select("SELECT user_best.user_id, best_stage7 AS score, user_name FROM user_best INNER JOIN user_profile ON user_best.user_id = user_profile.user_id order by best_stage7 desc limit 100");
                foreach ($ranking as $value){
                    if($value->user_id != $user_id){
                        $value->user_id = NULL;
                    }
    
                }
                
            break;

            case 8:
                $ranking = DB::select("SELECT user_best.user_id, best_stage8 AS score, user_name FROM user_best INNER JOIN user_profile ON user_best.user_id = user_profile.user_id order by best_stage8 desc limit 100");
                foreach ($ranking as $value){
                    if($value->user_id != $user_id){
                        $value->user_id = NULL;
                    }
    
                }
                
            break;

            case 9:
                $ranking = DB::select("SELECT user_best.user_id, best_stage9 AS score, user_name FROM user_best INNER JOIN user_profile ON user_best.user_id = user_profile.user_id order by best_stage9 desc limit 100");
                foreach ($ranking as $value){
                    if($value->user_id != $user_id){
                        $value->user_id = NULL;
                    }
    
                }
                
            break;

            case 10:
                $ranking = DB::select("SELECT user_best.user_id, best_stage10 AS score, user_name FROM user_best INNER JOIN user_profile ON user_best.user_id = user_profile.user_id order by best_stage10 desc limit 100");
                foreach ($ranking as $value){
                    if($value->user_id != $user_id){
                        $value->user_id = NULL;
                    }
    
                }
                
            break;

            default:
                $ranking = DB::select("SELECT user_best.user_id, best_stage1 AS score, user_name FROM user_best INNER JOIN user_profile ON user_best.user_id = user_profile.user_id order by best_stage1 desc limit 100");
                foreach ($ranking as $value){
                    if($value->user_id != $user_id){
                        $value->user_id = NULL;
                    }
    
                }
                
            break;

        }



        
        $response = array(
			'ranking' => $ranking,
		);
        
        return json_encode($response);

    }
}
