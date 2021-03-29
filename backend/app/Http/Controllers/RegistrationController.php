<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserProfile;
use App\UserLogin;

class RegistrationController extends Controller
{
    public function Registration(Request $request)
	{
		//ユーザーIDの決定
		$user_id = uniqid(); //例:4b3403665fea6

		//初期データの設定　user_profile
		$user_profile = new UserProfile;
		$user_profile->user_id = $user_id;
		$user_profile->user_name = $request->user_name;
		$user_profile->coin = config('constants.COIN_DEFAULT');
		$user_profile->character = config('constants.CHARA_DEFAULT');
		$user_profile->chara_price = config('constants.PRICE_DEFAULT');
		$user_profile->chara_reward_price = config('constants.REWARD_DEFAULT');
		$user_profile->stage_reward_price = config('constants.REWARD_DEFAULT');
		
		//初期データの設定　user_login
		$user_login = new UserLogin;
		$user_login->user_id = $user_id;
		$user_login->login_day = config('constants.LOGIN_DEFAULT');

		//データの書き込み 
		try {
			$user_profile->save();
			$user_login->save();
		} catch (\PDOException $e) {
			logger($e->getMessage());
			return config('error.ERROR_DB_UPDATE');
		}

		//クライアントへのレスポンス
		$user_profile = UserProfile::where('user_id', $user_id)->first();
		$user_login = UserLogin::where('user_id', $user_id)->first();


		$response = array(
			'user_profile' => $user_profile,
			'user_login' => $user_login,
		);

		return json_encode($response);
	}
}
