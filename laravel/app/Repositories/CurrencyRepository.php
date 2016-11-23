<?php 

namespace App\Repositories;

use App\Currency;

class CurrencyRepository extends BaseRepository
{
	/**
	 * Create a CurrencyRepository instance 
	 *
	 * @return void
	 */
	public function __construct(Currency $currency)
	{
		$this->model = $currency;
	}
}
