<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserProfile;
use App\UserLogin;
use App\UserChara;
use App\MasterShop;

class CharaShopController extends Controller
{
    public function CharaGet($user_id)
	{
        date_default_timezone_set('Asia/Tokyo');
        //DBからデータ取得
		$user_profile = UserProfile::where('user_id', $user_id)->first();
		$user_chara = UserChara::where('user_id', $user_id)->first();
        $master_shop = MasterShop::all();

        //オープンキャラカウント
        $count = 0;
        $open = 0;
        //dd($user_chara);
        if($user_chara->open_chara1 == 0){
            $num[$count] = 1;
            $count++;
        }else{
            $open++;
        }

        if($user_chara->open_chara2 == 0){
            $num[$count] = 2;
            $count ++;
        }else{
            $open++;
        }

        if($user_chara->open_chara3 == 0){
            $num[$count] = 3;
            $count ++;
        }else{
            $open++;
        }

        if($user_chara->open_chara4 == 0){
            $num[$count] = 4;
            $count ++;
        }else{
            $open++;
        }
        if($user_chara->open_chara5 == 0){
            $num[$count] = 5;
            $count ++;
        }else{
            $open++;
        }

        if($user_chara->open_chara6 == 0){
            $num[$count] = 6;
            $count ++;
        }else{
            $open++;
        }

        foreach ($master_shop as $shop){
			if($shop->num == $open){
				$price = $shop->price;
                break;
			}
		}

        if($user_profile->coin >= $price){
           $max = count($num) -1;
            $open_num = mt_rand(0, $max);
            dd($num);
            switch($num[$open_num]){
                case 1:
                    $user_chara->open_chara1 = 1;
                break;

                case 2:
                    $user_chara->open_chara2 = 1;
                break;

                case 3:
                    $user_chara->open_chara3 = 1;
                break;

                case 4:
                    $user_chara->open_chara4 = 1;
                break;

                case 5:
                    $user_chara->open_chara5 = 1;
                break;

                case 6:
                    $user_chara->open_chara6 = 1;
                break;

                default:
                    $user_chara->open_chara1 = 1;
                break;
            }


            $user_profile->coin = $user_profile->coin-$price;

            //データの書き込み 
             try {
                $user_profile->save();
                $user_chara->save();
                }   
                 catch (\PDOException $e) {
                    logger($e->getMessage());
                    return config('error.ERROR_DB_UPDATE');
            }              



        }

        $response = array(
            'user_profile' => $user_profile,
			'user_chara' => $user_chara,
		);
        return json_encode($response);




    }
}
