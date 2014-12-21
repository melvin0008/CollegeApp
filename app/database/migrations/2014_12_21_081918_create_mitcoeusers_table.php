<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMitcoeusersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mitcoeusers', function(Blueprint $table)
		{
			$table->string('email', 320);
			$table->string('password', 64);
                        // required for Laravel 4.1.26
            $table->string('remember_token', 100)->nullable();
			$table->timestamps();
			$table->increments('id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('mitcoeusers');

	}

}
