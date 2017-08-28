<?php 

namespace App\Repositories;

use App\Models\Category;

class CategoryRepository extends BaseRepository
{
	/**
	 * Create a CategoryRepository instance
	 *
	 * @param App\Category $category
	 * @return void
	 */
	public function __construct(Category $category)
	{
		$this->model = $category;
	}

	/**
	 * Get categories by Id with their Products
	 *
	 * @return Illuminate\Support\Collection
	 */
	public function getByIdWithProduct($id)
	{
		return $this->model->with('product')->find($id);
	}
}
