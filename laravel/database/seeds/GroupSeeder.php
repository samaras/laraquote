<?php 

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