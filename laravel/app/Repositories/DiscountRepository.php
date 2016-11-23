<?php 

namespace App\Repositories;

use App\Discount;

class DiscountRepository extends BaseRepository
{
	/**
	 * Create DiscountRepository instance
	 *
	 * @param App\Discount
	 * @return void
	 */
	public function __construct(Discount $discount)
	{
		$this->model = $discount;
	}

	/**
	 * Get Discount by id with Quotes
	 *
	 * @return Illuminate\Support\Collection
	 */
	public function getByIdWithQuote($id)
	{
		return $this->model->with('quotes')->find($id);
	}
}