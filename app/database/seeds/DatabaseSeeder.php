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
		 $this->call('CreateAttendancedbTableSeeder');
		 $this->call('MitcoeUsersSeeder');
		 
		// $this->call('UserTableSeeder');
	}

}
