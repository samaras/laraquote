<?php 

use App\Models\User;
use App\Models\Permission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use App\Models\Group;

class GroupSeeder extends Seeder 
{
	public function run() 
	{
		DB::table('groups')->delete();

		Group::create([
			'group' => 'sales',
		]);

		Group::create([
			'group' => 'admin',
		]);
	}
}