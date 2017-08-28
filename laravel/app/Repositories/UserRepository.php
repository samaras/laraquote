<?php 

namespace App\Repositories;

use App\Models\User;

class UserRepository extends BaseRepository
{
	/**
	 * Create UserRepository instance
	 *
	 * @param App\User
	 * @return void
	 */
	public function __construct(User $user)
	{
		$this->model = $user;
	}

	/**
	 * Get by Id with Group
	 *
	 * @param int $id
	 * @return Illuminate\Support\Collection
	 */
	public function getByIdWithGroup($id)
	{
		return $this->model->with('groups')->find($id);
	}
	
	/**
	 *  Get the number of users 
	 * 
	 * @return Illuminate\Support\Collection 
	 */
	public function getCount()
	{
		return $this->model->count();
	}
}
