<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\UserProfile;
use App\UserBest;


class BestSetController extends Controller
{
    public function BestSet($user_id, $stage, $score, $coin)
    {

		$user_best = UserBest::where('user_id', $user_id)->first();
        $user_profile = UserProfile::where('user_id', $user_id)->first();

        switch($stage){
            
            case 1:
                if($user_best->best_stage1 < $score){
                    $user_best->best_stage1 = $score;
                }
            break;
            case 2:
                if($user_best->best_stage2 < $score){
                    $user_best->best_stage2 = $score;
                }            
            break;
                                  
            case 3:
                if($user_best->best_stage3 < $score){
                    $user_best->best_stage3 = $score;
                }                     
            break;
                          
            case 4:
                if($user_best->best_stage4 < $score){
                    $user_best->best_stage4 = $score;
                }               
            break;
            
            case 5:
                if($user_best->best_stage5 < $score){
                    $user_best->best_stage5 = $score;
                }              
            break;
                                
            case 6:
                if($user_best->best_stage6 < $score){
                    $user_best->best_stage6 = $score;
                }                    
            break;
                                       
            case 7:
                if($user_best->best_stage7 < $score){
                    $user_best->best_stage7 = $score;
                }                    
            break;
            
            case 8:
                if($user_best->best_stage8 < $score){
                    $user_best->best_stage8 = $score;
                }                           
            break;
                                            
            case 9:
                if($user_best->best_stage9 < $score){
                    $user_best->best_stage9 = $score;
                }                               
            break;
                                    
            case 10:
                if($user_best->best_stage10 < $score){
                    $user_best->best_stage10 = $score;
                }                                   
            break;
                                                    
        }
        if($user_profile->coin < 1000000){
            $user_profile->coin += $coin;
        }


        		//データの書き込み 
		try {
			$user_best->save();
            $user_profile->save();
            \DB::commit();
		} catch (\PDOException $e) {
            \DB::rollback();
			logger($e->getMessage());
			return config('error.ERROR_DB_UPDATE');
		}

        $response = array(
			'user_best' => $user_best,
            'user_profile' => $user_profile,
		);
        
		return json_encode($response);
    }
}
