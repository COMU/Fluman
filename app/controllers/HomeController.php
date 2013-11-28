<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/


	public function dashboard()
	{
		return View::make('dashboard');
	}

	public function showLogin()
	{
		if (Auth::check()) {

		return Redirect::to('dashboard');

		} else {
			return View::make('login');
		}
	}
	
	
	public function showConfig()
	{
		return View::make('config');
	}

	public function doConfig()
	{
		return View::make('config');
	}
	
	public function doLogin()
	{

	
		$rules = array(
			'username' => 'required',
			'password' => 'required|alphaNum|min:3'
		);

		$validator = Validator::make(Input::all(), $rules);
	
		if ($validator->fails()) {
			return Redirect::to('login')->withErrors($validator);
		} else {
	
			$userdata = array(
				'username' 	=> Input::get('username'),
				'password' 	=> Input::get('password')
			);
	
			if (Auth::attempt($userdata)) {
				return Redirect::to('dashboard');
			} else {	 	
				return Redirect::to('login')->with('login_errors', true);
			}

		}
	}

}
