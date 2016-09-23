<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('users')->truncate();

		$users = array(
   			'name'     => 'Achyut Paudel',
	        'username' => 'achyut',
	        'email'    => 'achyut.pdl@gmail.com',
	        'password' => Hash::make('tuyhca'),
		);

		// Uncomment the below to run the seeder
		DB::table('users')->insert($users);
	}

}
