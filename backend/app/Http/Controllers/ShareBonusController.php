<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\UserProfile;

class ShareBonusController extends Controller
{
    function BonusGet(Request $request)
	{
        //DBからデータ取得
        $user_id = $request->user_id;
        $user_profile = UserProfile::where('user_id', $user_id)->first();
        $user_profile->coin += 50;

           //データの書き込み  
           try {
               $user_profile->save();
               \DB::commit();
            } catch (\PDOException $e) {
                logger($e->getMessage());
                \DB::rollback();
                return config('error.ERROR_DB_UPDATE');
            }
            //クライアントへのレスポンス
            $response = array(
                'user_profile' => $user_profile,
            );
            return json_encode($response);
    }
}
