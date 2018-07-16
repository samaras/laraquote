<?php 

namespace App\Repositories;

use App\Models\Category;
use Illuminate\Support\Facades\DB;

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
	 * Get all the categories in the db
	 *
	 * @return Illuminate\Support\Collection
	 */
	public function all()
	{
		return $this->model->all();
	}

	/**
	 * Get groups collection.
	 *
	 * @param  App\Models\User
	 * @return Array
	 */
	public function getAllSelect()
	{
		$select = $this->all()->pluck('category', 'id');

		return compact('select');
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
