<?php 

namespace App\Repositories;

use App\Models\Quote;

class QuoteRepository extends BaseRepository
{
	/**
	 * Create QuoteRepository instance
	 *
	 * @param App\Quote
	 * @return void
	 */
	public function __construct(Quote $quote)
	{
		$this->model = $quote;
	}

	/**
	 * Get by Id with status
	 *
	 * @param int $id
	 * @return Illuminate\Support\Collection
	 */
	public function getByIdWithStatus()
	{
		return $this->model->with('quote_status')->find($id);
	}

	/**
	 * Get by Id with clients and users
	 *
	 * @param int $id
	 * @return Illuminate\Support\Collection
	 */
	public function getByIdWithClientAndUserAndStatus($id)
	{
		return $this->model->with('clients', 'users', 'quote_status')->find($id);
	}
	
	/**
	 *  Get the number of quotes
	 * 
	 * @return Illuminate\Support\Collection 
	 */
	public function getCount()
	{
		return $this->model->count();
	}
}
