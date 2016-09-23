<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePolicesignupsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('policesignups', function(Blueprint $table) {
			$table->increments('id');
			$table->string('fname');
			$table->string('lname');
			$table->string('email');
			$table->string('phone');
			$table->string('badgenumber');
			$table->string('policeagency');
			$table->string('state');
			$table->string('authorization');
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
		Schema::drop('policesignups');
	}

}
