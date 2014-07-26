<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStep extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('step', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('task');
			$table->integer('user');
			$table->string('title');
			$table->text('report');
			$table->time('duration');
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
		Schema::drop('step');
	}

}
