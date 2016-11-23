<?php 

namespace App\Repositories;

use App\Group;

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
	 * Get Group by id with users
	 *
	 * @return Illuminate\Support\Collection
	 */
	public function getByIdWithUsers($id)
	{
		return $this->model->with('users')->find($id);
	}
}