<?php

use App\Models\User;
use App\Models\Group;
use App\Models\Permission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		/**
		 * Add permissions
		 */
		if(Permission::where('name', '=', 'Can View Users')->first() === null) {
			Permission::create([
				'name' => 'Can View Users',
				'display_name' => 'view.users'
				'description' => 'Can view users',
			]);
		}

		if(Permission::where('name', '=', 'Can Create Users')->first() === null) {
			Permission::create([
				'name' => 'Can Create Users',
				'display_name' => 'create.users'
				'description' => 'Can create users',
			]);
		}

		if(Permission::where('name', '=', 'Can Edit Users')->first() === null) {
			Permission::create([
				'name' => 'Can Edit Users',
				'display_name' => 'edit.users'
				'description' => 'Can edit users',
			]);
		}
		
		if(Permission::where('name', '=', 'Can Delete Users')->first() === null) {
			Permission::create([
				'name' => 'Can Delete Users',
				'display_name' => 'delete.users'
				'description' => 'Can delete users',
			]);
		}

	}
}