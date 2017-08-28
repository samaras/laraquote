<?php 

namespace App\Repositories;

use App\Models\Status;

class StatusRepository extends BaseRepository
{
	/**
	 * Create StatusRepository instance
	 *
	 * @param App\Discount
	 * @return void
	 */
	public function __construct(Status $status)
	{
		$this->model = $status;
	}
}