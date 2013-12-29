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


Route::get('/', array('uses' => 'HomeController@showLogin'));

//Auth Control (!)
Route::group(array('before' => 'auth'), function()
{

Route::get('/', array('as' => 'home'), function()
{
	return View::make('dashboard');
});

//Dashboard
Route::get('dashboard', array('uses' => 'HomeController@dashboard'));

//Config Tool
Route::get('flume/configTool', array('as' => 'configTool', 'uses' => 'HomeController@configTool'));

//
Route::get('flume/addConfig', array('uses' => 'HomeController@addConfig'));
Route::post('flume/addConfig', array('as' => 'doaddConfig', 'uses' => 'HomeController@doaddConfig'));

//
Route::post('flume/createConfig', array('as' => 'docreateConfig', 'uses' => 'HomeController@docreateConfig'));
Route::get('flume/createConfig', array('uses' => 'HomeController@createConfig'));

//Upload Flume Configuration File Page.
Route::post('flume/uploadConfig', array('as' => 'uploadConfig', 'uses' => 'HomeController@uploadflumeConfig'));

//Setting Page
Route::get('setting', array('uses' => 'HomeController@showSetting'));
Route::post('setting', array('as' => 'doSetting', 'uses' => 'HomeController@doSetting'));

//Logout Page
Route::get('logout', array('as' => 'logout', function () {
    
    Auth::logout();
    return Redirect::route('home');

}));
// End of Logout Page

// Apache Flume Api
Route::get('api/{name}', function($name){
	
	
	$model_setting = Setting::all()->first();
	$flume_path = $model_setting->flumePath;
	$flume_command = $flume_path . " ";
	
	switch ($name) {
    
    case "version":
		$flume_command .= "version";
		$result = shell_exec($flume_command);
		$io_version = strtok($result, "\n");
		$model_setting->flumeVer = substr($io_version, -5);
		$model_setting->save();
		return Response::json(array('status' => 'OK', 'version' => $model_setting->flumeVer));
		break;
    
    // TODO
    case "agent":
        return Response::json(array('status' => 'OK'));
        break;
	}
	
	
});
// End of Apache Flume Api

});
// End of Auth Control (!)



// Login page
Route::get('login', array('uses' => 'HomeController@showLogin'));
Route::post('login', array('uses' => 'HomeController@doLogin'));
