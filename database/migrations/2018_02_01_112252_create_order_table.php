<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('order', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('orderId');
			$table->integer('userId');
			$table->string('type', 20);
			$table->string('status', 10);
			$table->text('metas', 65535);
			$table->boolean('mark');
			$table->string('comment');
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
		Schema::drop('order');
	}

}
