<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder{
	public function run()
	{
		\DB::table('users')->insert(array(
			'user'     => 'Ana Banana',
			'email'    => 'ana_sanchez05@oulook.com',
			'name'     => 'Ana Sánchez',
			'password'   => \Hash::make('admin')
		));
	}
}