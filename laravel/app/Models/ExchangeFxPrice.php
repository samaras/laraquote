<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExchangeFxPrice extends Model
{
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'exchange_fx_prices';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['product_id', 'price', 'base_currency', 'qoute_currency', 'exchange_rate', 'commision'];

	public function product()
	{
		return $this->hasMany('Product');
	}

	public function base_currency()
	{
		return $this->hasMany('Currency');
	}

	public function qoute_currency()
	{
		return $this->hasMany('Currency');
	}
}
