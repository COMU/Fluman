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
Route::get('flume', array('uses' => 'HomeController@showFlume'));
Route::get('flume/addConfig', array('uses' => 'HomeController@addConfig'));
Route::get('config', array('uses' => 'HomeController@showConfig'));
Route::post('config', array('as' => 'doConfig', 'uses' => 'HomeController@doConfig'));
Route::get('logout', array('as' => 'logout', function () {
    
    Auth::logout();
    return Redirect::route('home');

}));

});


Route::get('login', array('uses' => 'HomeController@showLogin'));
Route::post('login', array('uses' => 'HomeController@doLogin'));
