<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserProfile;
use App\UserLogin;
use App\UserStage;
use App\UserBest;
use App\UserChara;
use App\MasterLoginBonus;
use DB;

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

		//初期データの設定　user_stage
		$user_stage = new UserStage;
		$user_stage->user_id = $user_id;
		$user_stage->open_stage1 = config('constants.OPEN');
		$user_stage->open_stage2 = config('constants.CLOSE');
		$user_stage->open_stage3 = config('constants.CLOSE');
		$user_stage->open_stage4 = config('constants.CLOSE');
		$user_stage->open_stage5 = config('constants.CLOSE');
		$user_stage->open_stage6 = config('constants.CLOSE');
		$user_stage->open_stage7 = config('constants.CLOSE');
		$user_stage->open_stage8 = config('constants.CLOSE');
		$user_stage->open_stage9 = config('constants.CLOSE');
		$user_stage->open_stage10 = config('constants.CLOSE');

		//初期データの設定　user_best
		$user_best = new UserBest;
		$user_best->user_id = $user_id;
		$user_best->best_stage1 = config('constants.BEST_DEFAULT');
		$user_best->best_stage2 = config('constants.BEST_DEFAULT');
		$user_best->best_stage3 = config('constants.BEST_DEFAULT');
		$user_best->best_stage4 = config('constants.BEST_DEFAULT');
		$user_best->best_stage5 = config('constants.BEST_DEFAULT');
		$user_best->best_stage6 = config('constants.BEST_DEFAULT');
		$user_best->best_stage7 = config('constants.BEST_DEFAULT');
		$user_best->best_stage8 = config('constants.BEST_DEFAULT');
		$user_best->best_stage9 = config('constants.BEST_DEFAULT');
		$user_best->best_stage10 = config('constants.BEST_DEFAULT');

		//初期データの設定　user_chara
		$user_chara = new UserChara;
		$user_chara->user_id = $user_id;
		$user_chara->open_chara1 = config('constants.OPEN');
		$user_chara->open_chara2 = config('constants.CLOSE');
		$user_chara->open_chara3 = config('constants.CLOSE');
		$user_chara->open_chara4 = config('constants.CLOSE');
		$user_chara->open_chara5 = config('constants.CLOSE');
		$user_chara->open_chara6 = config('constants.CLOSE');

		//データの書き込み 
		try {
			$user_profile->save();
			$user_login->save();
			$user_stage->save();
			$user_best->save();
			$user_chara->save();

		} catch (\PDOException $e) {
			logger($e->getMessage());
			return config('error.ERROR_DB_UPDATE');
		}

		//クライアントへのレスポンス
		$user_profile = UserProfile::where('user_id', $user_id)->first();
		$user_login = UserLogin::where('user_id', $user_id)->first();
		$user_stage = UserStage::where('user_id', $user_id)->first();
		$user_best = UserBest::where('user_id', $user_id)->first();
		$user_chara = UserChara::where('user_id', $user_id)->first();
		$master_login_bonus = MasterLoginBonus::all();
        $ranking = DB::select("SELECT user_best.user_id, best_stage1 AS score, user_name FROM user_best INNER JOIN user_profile ON user_best.user_id = user_profile.user_id order by best_stage1 desc");
		
		foreach ($ranking as $value){
			if($value->user_id != $user_id){
				$value->user_id = NULL;
			}
		}


		$response = array(
			'user_profile' => $user_profile,
			'user_login' => $user_login,
			'user_stage' => $user_stage,
			'user_best' => $user_best,
			'user_chara' => $user_chara,
			'master_login_bonus' => $master_login_bonus,
			'ranking' => $ranking,
		);

		return json_encode($response);
	}
}
