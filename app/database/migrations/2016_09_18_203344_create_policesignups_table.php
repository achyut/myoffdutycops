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
			$table->string('zipcode');

			$table->string('authorization');

			$table->string('street_number');
			$table->string('route');
			$table->string('locality');
			$table->string('administrative_area_level_1');
			$table->string('administrative_area_level_2');
			$table->string('country');
			$table->string('postal_code');
			$table->string('postal_code_suffix');

			$table->string('latitude');
			$table->string('longitude');
			$table->string('distance');

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
