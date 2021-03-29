<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserLogin;

class LoginGetController extends Controller
{
    public function LoginGet(Request $request)
	{   date_default_timezone_set('Asia/Tokyo');
        //DBからデータ取得
		$user_id = $request->user_id;
		$user_login = UserLogin::where('user_id', $user_id)->first();
        $login_day = $user_login->login_day;
        $last_login_at = $user_login->last_login_at;

        //最終ログインより24時間以上経過チェック

        $LastLoginDate = strtotime($last_login_at);
        $CurrentDate =  time();
        $ElapsedTime = $CurrentDate - $LastLoginDate;

        //24時間経過してればボーナス付与 86400秒で１日
        if($ElapsedTime > 1)
        {
            $user_login->login_day = $login_day + 1;

            //データの書き込み 
		try {
			$user_login->save();
		} catch (\PDOException $e) {
			logger($e->getMessage());
			return config('error.ERROR_DB_UPDATE');
		}
        }

		//クライアントへのレスポンス
		$response = array(
			'user_login' => $user_login,
		);

		return json_encode($response);
	}
}
