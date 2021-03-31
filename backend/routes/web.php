<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('registration', 'RegistrationController@Registration');

Route::get('login_get', 'LoginGetController@LoginGet');

Route::get('best_set/user_id/{user_id}/stage/{stage}/score/{score}','BestSetController@BestSet');

Route::get('ranking_get/user_id/{user_id}/stage/{stage}','RankingGetController@RankingGet');