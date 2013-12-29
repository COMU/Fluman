<?php

use Illuminate\Database\Migrations\Migration;

class CreateSettingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('setting', function($table)
		{
			$table->increments('id');
			$table->string('flumePath', 256);
			$table->string('flumeVer', 8);
			$table->timestamps();
			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('setting');
	}

}
