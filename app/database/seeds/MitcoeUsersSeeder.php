<?php

class MitcoeUsersSeeder extends Seeder
{

	public function run()
	{
		DB::table('mitcoeusers')->delete();
		MitcoeUsers::create(array(
			'email'    => 'me@melvinphilips.com',
			'password' => Hash::make('awesome'),
		));
	}

}