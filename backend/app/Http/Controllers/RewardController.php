<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserProfile;
use App\MasterShop;


class RewardController extends Controller
{        
    function RewardGet($user_id,$reward_type)
	{
        //reward type 0=chara
        //reward type 1=stage
        //DBからデータ取得
		$user_profile = UserProfile::where('user_id', $user_id)->first();
        $master_shop = MasterShop::all();

        if($reward_type ==0){

            $count = $user_profile->chara_reward_count;

            if($count < 20){

                $count++;
                //rewardコインの値をを取得
                foreach ($master_shop as $shop){
                    if($shop->num == $count){
                        $reward = $shop->reward;
                        break;
                    }
                
                }
    
                //rewardをセット
                $user_profile->chara_reward_count = $count;
                $user_profile->coin += $reward;
 
            }

        }elseif($reward_type ==1){

            $count = $user_profile->stage_reward_count;

            if($count < 20){

                $count++;
                //rewardコインの値をを取得
                foreach ($master_shop as $shop){
                    if($shop->num == $count){
                        $reward = $shop->reward;
                        break;
                    }
                
                }
    
                //rewardをセット
                $user_profile->stage_reward_count = $count;
                $user_profile->coin += $reward;
 
            }
            
        }
        //データの書き込み 
        try {
            $user_profile->save();
        }   
        catch (\PDOException $e) {
            logger($e->getMessage());
            return config('error.ERROR_DB_UPDATE');
        }

        $response = array(
            'user_profile' => $user_profile,
		);
        return json_encode($response);
        
    }
}
