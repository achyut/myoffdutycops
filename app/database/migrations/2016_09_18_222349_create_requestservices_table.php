<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRequestservicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('requestservices', function(Blueprint $table) {
			$table->increments('id');
			$table->string('fullname');
			$table->string('company');
			$table->string('email');
			$table->string('phone');
			$table->string('location');
			$table->string('status');
			$table->string('dateandtime');
			$table->string('request_message');
			
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
		Schema::drop('requestservices');
	}

}
