<?php 

namespace App\Repositories;

abstract class BaseRepository 
{
	/** 
	 * @var Illuminate\Database\Eloquent\Model
	 */
	protected $model;

	/**
	 * @var int $n
	 * @return 
	 */
	public function getPaginate($n)
	{
		return $this->model->paginate($n);
	}

	/**
	 * Get total number of records
	 *
	 * @return array
	 */
	public function getTotal()
	{
		$total = $this->model->count();

		return compact('total');
	}

	/**
	 * @var int $id
	 * @return App\Model
	 */
	public function getById($id)
	{
		return $this->model->findOrFail($id);
	}

	/**
	 * Destroy a model by ID 
	 *
	 * @var int $id
	 * @return boolean
	 */
	public function destory($id)
	{
		return $this->getById($id)->delete();
	} 

	/** 
	 * @param int $id
	 * @param Array $inputs
	 * @return boolean
	 */
	public function update($id, Array $inputs)
	{
	 	return $this->getById($id)->fill($inputs)->save();
	}

	/**
	 * Store input to model
	 *
	 * @param Array $inputs
	 * @return boolean
	 */
	public function store(Array $inputs) 
	{
		return $this->model->create($inputs);
	}
}