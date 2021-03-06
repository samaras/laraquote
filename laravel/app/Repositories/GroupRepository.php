<?php 

namespace App\Repositories;

use App\Models\Group;

class GroupRepository extends BaseRepository
{
	/**
	 * Create GroupRepository instance
	 *
	 * @param App\Group
	 * @return void
	 */
	public function __construct(Group $group)
	{
		$this->model = $group;
	}
	
	/**
	 * Get all groups/roles
	 * 
	 * @return Illuminate\Support\Collection
	 */
	public function all()
	{
		return $this->model->all(['id', 'group']);
	}

	/**
	 * Get Group by id with users
	 *
	 * @return Illuminate\Support\Collection
	 */
	public function getByIdWithUsers($id)
	{
		return $this->model->with('users')->find($id);
	}
	
	/**
	 * Get groups collection.
	 *
	 * @param  App\Models\User
	 * @return Array
	 */
	public function getAllSelect()
	{
		$select = $this->all()->pluck('group', 'id');

		return compact('select');
	}
}
