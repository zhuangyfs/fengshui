<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserContributeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_contribute', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('userId');
			$table->float('amount', 10);
			$table->integer('createdTime');
			$table->integer('updateTime');
			$table->string('remember_token', 100)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_contribute');
	}

}
