<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use App\Models\Group;
use App\Models\User;
use App\Models\Permission;


class UserSeeder extends Seeder 
{
	public function run()
	{
		//$faker = Faker\Factory::create();

		DB::table('users')->delete();

		$adminRole = Group::whereGroup('admin')->first();
		$salesRole = Group::whereGroup('user')->first();

		$user = User::create(array(
			'first_name' => 'John',
			'last_name' => 'Doe',
			'email' => 'jo.doe@obrerosoft.com',
			'password' => Hash::make('password'),
			'token' => str_random(64),
			'activated' => true
		));

		$user->assignGroup($adminRole);

		$user = User::create(array(
			'first_name' => 'Jane',
			'last_name' => 'Doe',
			'email' => 'ja.doe@obrerosoft.com',
			'password' => Hash::make('password'),
			'token' => str_random(64),
			'activated' => true
		));

		$user->assignGroup($salesRole)
	}
}