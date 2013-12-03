<?php

use Illuminate\Database\Migrations\Migration;

class CreateFlumeconfigTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('flumeconfig', function($table)
		{
			$table->increments('id');
			$table->string('name', 32);
			$table->string('path', 64);
			$table->boolean('isCreated');
			$table->timestamps();
		});
		//
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('flumeconfig');
	}

}
