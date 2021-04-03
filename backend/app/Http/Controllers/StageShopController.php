<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserProfile;
use App\UserStage;
use App\MasterShop;

class StageShopController extends Controller
{
    public function StageGet($user_id, $stage)
	{
		$user_profile = UserProfile::where('user_id', $user_id)->first();
        $user_stage = UserStage::where('user_id', $user_id)->first();
        $master_shop = MasterShop::all();
        foreach ($master_shop as $shop){
			if($shop->num == $stage){
				$price = $shop->price;
                break;
			}
		}

        switch($stage){
            case 2:

                if($user_profile->coin >= $price && $user_stage->open_stage2 == 0){
                    $user_profile->coin = $user_profile->coin-$price;
                    $user_stage->open_stage2 = 1;
                    //データの書き込み 
                    try {
                        $user_profile->save();
                        $user_stage->save();
                    } 
                    catch (\PDOException $e) {
                        logger($e->getMessage());
                        return config('error.ERROR_DB_UPDATE');
                    }                    
                }

            break;

            case 3:

                if($user_profile->coin >= $price && $user_stage->open_stage3 == 0){
                    $user_profile->coin = $user_profile->coin-$price;
                    $user_stage->open_stage3 = 1;
                    //データの書き込み 
                    try {
                        $user_profile->save();
                        $user_stage->save();
                    } 
                    catch (\PDOException $e) {
                        logger($e->getMessage());
                        return config('error.ERROR_DB_UPDATE');
                    }                    
                }

            break;

            case 4:

                if($user_profile->coin >= $price && $user_stage->open_stage4 == 0){
                    $user_profile->coin = $user_profile->coin-$price;
                    $user_stage->open_stage4 = 1;
                    //データの書き込み 
                    try {
                        $user_profile->save();
                        $user_stage->save();
                    } 
                    catch (\PDOException $e) {
                        logger($e->getMessage());
                        return config('error.ERROR_DB_UPDATE');
                    }                    
                }

            break;
            case 5:

                if($user_profile->coin >= $price && $user_stage->open_stage5 == 0){
                    $user_profile->coin = $user_profile->coin-$price;
                    $user_stage->open_stage5 = 1;
                    //データの書き込み 
                    try {
                        $user_profile->save();
                        $user_stage->save();
                    } 
                    catch (\PDOException $e) {
                        logger($e->getMessage());
                        return config('error.ERROR_DB_UPDATE');
                    }                    
                }

            break;

            case 6:

                if($user_profile->coin >= $price && $user_stage->open_stage6 == 0){
                    $user_profile->coin = $user_profile->coin-$price;
                    $user_stage->open_stage6 = 1;
                    //データの書き込み 
                    try {
                        $user_profile->save();
                        $user_stage->save();
                    } 
                    catch (\PDOException $e) {
                        logger($e->getMessage());
                        return config('error.ERROR_DB_UPDATE');
                    }                    
                }

            break;

            case 7:

                if($user_profile->coin >= $price && $user_stage->open_stage7 == 0){
                    $user_profile->coin = $user_profile->coin-$price;
                    $user_stage->open_stage7 = 1;
                    //データの書き込み 
                    try {
                        $user_profile->save();
                        $user_stage->save();
                    } 
                    catch (\PDOException $e) {
                        logger($e->getMessage());
                        return config('error.ERROR_DB_UPDATE');
                    }                    
                }

            break;

            case 8:

                if($user_profile->coin >= $price && $user_stage->open_stage8 == 0){
                    $user_profile->coin = $user_profile->coin-$price;
                    $user_stage->open_stage8 = 1;
                    //データの書き込み 
                    try {
                        $user_profile->save();
                        $user_stage->save();
                    } 
                    catch (\PDOException $e) {
                        logger($e->getMessage());
                        return config('error.ERROR_DB_UPDATE');
                    }                    
                }

            break;

            case 9:

                if($user_profile->coin >= $price && $user_stage->open_stage9 == 0){
                    $user_profile->coin = $user_profile->coin-$price;
                    $user_stage->open_stage9 = 1;
                    //データの書き込み 
                    try {
                        $user_profile->save();
                        $user_stage->save();
                    } 
                    catch (\PDOException $e) {
                        logger($e->getMessage());
                        return config('error.ERROR_DB_UPDATE');
                    }                    
                }

            break;

            case 10:

                if($user_profile->coin >= $price && $user_stage->open_stage10 == 0){
                    $user_profile->coin = $user_profile->coin-$price;
                    $user_stage->open_stage10 = 1;
                    //データの書き込み 
                    try {
                        $user_profile->save();
                        $user_stage->save();
                    } 
                    catch (\PDOException $e) {
                        logger($e->getMessage());
                        return config('error.ERROR_DB_UPDATE');
                    }                    
                }

            break;              
            default:
                
            break;
                
        }

        $response = array(
            'user_profile' => $user_profile,
			'user_stage' => $user_stage,
		);
        return json_encode($response);

    }
}
