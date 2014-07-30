<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTaskBoard extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('task', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('project_id');
			$table->integer('user_id');
			$table->string('title');
			$table->text('description');
			$table->time('duration');
			$table->integer('state')->nullable();
			$table->boolean('complete');
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
		Schema::drop('task');
	}

}
