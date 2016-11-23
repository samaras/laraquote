<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Product extends Model
{
    	//setting $timestamp to true so Eloquent
	//will automatically set the created_at
	//and updated_at values
	public $timestamps = true;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'products';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'category_id', 'description', 'stock'];

	public function category()
	{
		return $this->belongsTo('App\Category');
	}

	// To prevent the mass assignment exception
	protected $guarded = [];
}
