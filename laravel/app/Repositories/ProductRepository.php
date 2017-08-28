<?php 

namespace App\Repositories;

use App\Models\Product;

class ProductRepository extends BaseRepository
{
	/**
	 * Create ProductRepository instance
	 *
	 * @param App\Product
	 * @return void
	 */
	public function __construct(Product $product)
	{
		$this->model = $product;
	}

	/**
	 * Get Product by id with category
	 *
	 * @return Illuminate\Support\Collection
	 */
	public function getByIdWithCategory($id)
	{
		return $this->model->with('categories')->find($id);
	}

	/**
	 * Get Product by id with Price
	 *
	 * @return Illuminate\Support\Collection
	 */
	public function getByIdWithPrice($id)
	{
		return $this->model->with('exchange_fx_price')->find($id);
	}

	/**
	 * Get Product with Price and Category
	 *
	 * @return Illuminate\Support\Collection
	 */
	public function getByIdWithPriceAndCategory($id)
	{
		return $this->model->with('exchange_fx_price', 'categories')->find($id);
	}
}