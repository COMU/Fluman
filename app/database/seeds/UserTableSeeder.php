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
		DB::table('config')->delete();
		$flumeLocation = array(
                'flumePath' => "/usr/bin/flume-ng",
            	);
	        DB::table('config')->insert( $flumeLocation );

	}

}
