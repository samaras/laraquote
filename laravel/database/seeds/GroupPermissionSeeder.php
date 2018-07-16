<?php

use App\Models\User;
use App\Models\Group;
use App\Models\Permission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class GroupPermissionSeeder extends Seeder 
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		/**
		 * Get available permissions
		 */
		$permissions = Permission::all();

		/**
		 * Attach permissions to groups
		 */
		$grpAdmin = Group::where('group', '=', 'admin')->first();
		foreach ($permissions as $permission) {
			$grpAdmin->attachPermission($permission);
		}
	}
}