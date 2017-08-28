<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuoteProduct extends Model
{
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'quote_products';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['quote_id', 'product_id', 'quantity', 'price', 'discount_id'];

	/**
	 *
	 */
	public function product()
	{
		return $this->hasMany('Product');
	}

	/**
	 *
	 */
	public function quote()
	{
		return $this->hasMany('Quote');
	}

	/**
	 *
	 */
	public function discount()
	{
		return $this->hasMany('Discount');
	}
}
