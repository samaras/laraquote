<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
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
	protected $table = 'currencies';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['currency', 'code', 'symbol'];

	/**
	 * The storage format for the date, changed to normal date used by everyone else except those americans
	 *
	 * @var string
	 */
	protected $dateFormat = 'd-m-Y H:i:s';

	/**
	 *
	 *
	 */
	public function base_currency()
	{
		return $this->belongsTo('ExchangeFxPrice', 'base_currency');
	}

	/**
	 *
	 *
	 */
	public function qoute_currency()
	{
		return $this->belongsTo('ExchangeFxPrice', 'qoute_currency');
	}
}
