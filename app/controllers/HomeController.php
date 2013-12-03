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

	public function showFlume()
	{
		return View::make('showFlume')->with('flumeConfigs', FlumeConfig::all());
	}
	
	public function showLogin()
	{
		if (Auth::check()) {

		return Redirect::to('dashboard');

		} else {
			return View::make('login');
		}
	}
	
	public function addConfig()
	{
		return View::make('flume/addConfig');
	}
	
	public function doaddConfig()
	{
		return View::make('flume/doaddConfig')->with('rb', Input::get('rb'));
	}

	public function uploadflumeConfig()
	{

		if (Input::hasFile('config'))
		{	
		$filename = Input::get('name');	
		$destinationPath = storage_path() . "/flume/";
		$addConfig = new FlumeConfig;
		$addConfig->name = $filename;
		$config_id = $addConfig->id;
		$addConfig->path = '';
		$addConfig->isCreated = false;
		$addConfig->save();

		$config_id = $addConfig->id;
		$addConfig->path = $destinationPath . $filename . "$config_id" . '.conf';
		$addConfig->save();
		Input::file('config')->move($destinationPath, $filename . "$config_id" . '.conf');
		}
			
		return View::make('showFlume')->with('flumeConfigs', FlumeConfig::all());
	}
	
	public function showConfig()
	{

		$getConfig = DB::table('config')->select('flumePath')->first();
		return View::make('config')->with('flumeLocation', $getConfig->flumePath);
	}

	public function doConfig()
	{

		if (file_exists(Input::get('path'))) {
			DB::table('config')
				->where('id', 1)
				->update(array('flumePath' => Input::get('path')));
		} else {
			return Redirect::to('config')->withErrors(Input::get('path'));
		}
		
		$getConfig = DB::table('config')->select('flumePath')->first();
		return View::make('config')->with('flumeLocation', $getConfig->flumePath);
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
