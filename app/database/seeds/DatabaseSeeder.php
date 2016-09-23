<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
		$this->call('PolicesignupsTableSeeder');
		$this->call('RequestservicesTableSeeder');
		$this->call('ContactsTableSeeder');
		$this->call('NewsTableSeeder');
		$this->call('UsersTableSeeder');
	}

}
