<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Request;
use Response;

class LoginController extends Controller
{
    public function Start($request)
    {
        $data=json_decode($request,true);
        $user_id = $data['user_id'];

        $response = array();
        return $response;


    }
}
