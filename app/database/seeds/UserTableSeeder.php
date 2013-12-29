<?php

class UserTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('users')->delete();
		User::create(array(
			'username' => 'admin',
			'password' => Hash::make('admin'),
		));
				
		DB::table('setting')->delete();
		Setting::create(array(
            'flumePath' => "/usr/flume/bin/flume-ng",
            'flumeVer' => "",
		));
	}

}
