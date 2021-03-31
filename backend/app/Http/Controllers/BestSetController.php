<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserBest;

class BestSetController extends Controller
{
    public function BestSet($user_id, $stage, $score)
    {

		$user_best = UserBest::where('user_id', $user_id)->first();

        switch($stage){
            
            case 1:
                $user_best->best_stage1= $score;
            break;

            case 2:
                $user_best->best_stage2= $score;               
            break;
                                  
            case 3:
                $user_best->best_stage3= $score;                      
            break;
                          
            case 4:
                $user_best->best_stage4= $score;                
            break;
            
            case 5:
                $user_best->best_stage5= $score;                
            break;
                                
            case 6:
                $user_best->best_stage6= $score;                     
            break;
                                       
            case 7:
                $user_best->best_stage7= $score;                     
            break;
            
            case 8:
                $user_best->best_stage8= $score;                            
            break;
                                            
            case 9:
                $user_best->best_stage9= $score;                               
            break;
                                    
            case 10:
                $user_best->best_stage10= $score;                                     
            break;
                                                    
        }


        		//データの書き込み 
		try {
			$user_best->save();

		} catch (\PDOException $e) {
			logger($e->getMessage());
			return config('error.ERROR_DB_UPDATE');
		}

        $response = array(
			'user_best' => $user_best,
		);




		return json_encode($response);
    }
}
