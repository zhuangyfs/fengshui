<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserAccountTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_account', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('openId');
			$table->string('unionid')->unique();
			$table->integer('phone');
			$table->string('nickname');
			$table->text('metas', 65535);
			$table->string('InviteCode');
			$table->integer('createdTime');
			$table->integer('updateTime');
			$table->string('remember_token', 100)->nullable();
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
		Schema::drop('user_account');
	}

}
