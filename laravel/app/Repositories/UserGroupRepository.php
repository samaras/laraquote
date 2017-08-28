<?php 

namespace App\Repositories;

use App\Models\UserGroup;

class UserGroupRepository extends BaseRepository
{
	/**
	 * Create UserGroupRepository instance
	 *
	 * @param App\UserGroup
	 * @return void
	 */
	public function __construct(UserGroup $user_group)
	{
		$this->model = $user_group;
	}

	/**
	 * Get by Id with groups and users
	 *
	 * @param int $id
	 * @return Illuminate\Support\Collection
	 */
	public function getByIdWithGroupAndUser($id)
	{
		return $this->model->with('groups', 'users')->find($id);
	}
}