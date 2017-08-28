<?php 

namespace App\Repositories;

use App\Models\GroupAccess;

class GroupAccessRepository extends BaseRepository
{
	/**
	 * Create GroupAccessRepository instance
	 *
	 * @param App\GroupAccess
	 * @return void
	 */
	public function __construct(GroupAccess $group_access)
	{
		$this->model = $group_access;
	}

	/**
	 * Get by Id with groups
	 *
	 * @return Illuminate\Support\Collection
	 */
	public function getByIdWithGroups($id)
	{
		return $this->model->with('groups')->find($id);
	}
}