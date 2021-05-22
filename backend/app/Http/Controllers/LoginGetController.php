<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserProfile;
use App\UserLogin;
use App\UserStage;
use App\UserChara;
use App\MasterLoginBonus;

class LoginGetController extends Controller
{
    public function LoginGet(Request $request)
	{   date_default_timezone_set('Asia/Tokyo');
        //DBからデータ取得
		$user_id = $request->user_id;
		$user_login = UserLogin::where('user_id', $user_id)->first();
		$user_profile = UserProfile::where('user_id', $user_id)->first();
		$user_stage = UserStage::where('user_id', $user_id)->first();
		$user_chara = UserChara::where('user_id', $user_id)->first();
        $login_day = $user_login->login_day;
        $last_login_at = $user_login->last_login_at;

        //最終ログインより24時間以上経過チェック

        $LastLoginDate = strtotime($last_login_at);
        $CurrentDate =  time();
        $ElapsedTime = $CurrentDate - $LastLoginDate;

        //24時間経過してればボーナス付与 86400秒で１日
        if($ElapsedTime > 86400)
        {
			$user_login->login_day = $login_day + 1;
			if($login_day < 10){

				$master_login_bonus = MasterLoginBonus::where('login_day', $user_login->login_day)->first();

				if($user_profile->coin < 1000000){
					$user_profile->coin += $master_login_bonus->bonus_coin;
				}
			}
            //データの書き込み  
			try {
				$user_login->save();
				$user_profile->save();
				\DB::commit();
			} catch (\PDOException $e) {
				logger($e->getMessage());
				\DB::rollback();
				return config('error.ERROR_DB_UPDATE');
			}
		
		}

		//クライアントへのレスポンス
		$response = array(
			'user_login' => $user_login,
			'user_profile' => $user_profile,
			'user_stage' => $user_stage,
			'user_chara' => $user_chara,
		);

		return json_encode($response);
	}
}
