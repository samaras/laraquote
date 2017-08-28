<?php 

namespace App\Repositories;

use App\Models\ExchangeFxPrice;

class ExchangePriceRepository extends BaseRepository
{
	/**
	 * Create ExchangePriceRepository instance
	 *
	 * @param App\ExchangeFxPrice 
	 * @return void
	 */
	public function __construct(ExchangeFxPrice $exchange)
	{
		$this->model = $exchange;
	}

	/**
	 * Get Prices with currencies
	 * 
	 * @return Illuminate\Support\Collection
	 */
	public function getByIdWithCurrencies($id)
	{
		$this->model->with('currencies')->find($id);
	}
}