<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/



Route::group(array('before' => 'auth'), function()
{

Route::get('/', array('as' => 'home'), function()
{
	return View::make('dashboard');
});

Route::get('dashboard', array('uses' => 'HomeController@dashboard'));

Route::get('flume/configTool', array('as' => 'configTool', 'uses' => 'HomeController@configTool'));
Route::get('flume/addConfig', array('uses' => 'HomeController@addConfig'));
Route::post('flume/addConfig', array('as' => 'doaddConfig', 'uses' => 'HomeController@doaddConfig'));
Route::post('flume/createConfig', array('as' => 'docreateConfig', 'uses' => 'HomeController@docreateConfig'));
Route::get('flume/createConfig', array('uses' => 'HomeController@createConfig'));
Route::post('flume/uploadConfig', array('as' => 'uploadConfig', 'uses' => 'HomeController@uploadflumeConfig'));

Route::get('setting', array('uses' => 'HomeController@showSetting'));
Route::post('setting', array('as' => 'doSetting', 'uses' => 'HomeController@doSetting'));
Route::get('logout', array('as' => 'logout', function () {
    
    Auth::logout();
    return Redirect::route('home');

}));

});


Route::get('login', array('uses' => 'HomeController@showLogin'));
Route::post('login', array('uses' => 'HomeController@doLogin'));
