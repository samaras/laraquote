<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
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
	protected $table = 'quotes';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['client_id', 'user_id', 'quote_date', 'status_id', 'discount_id'];

	/**
	 * The storage format for the date, changed to normal date used by everyone else except those americans
	 *
	 * @var string
	 */
	protected $dateFormat = 'd-m-Y H:i:s';

	public function user()
	{
		return $this->belongsTo('User');
	}

	public function client()
	{
		return $this->belongsTo('Client');
	}

	public function status()
	{
		return $this->belongsTo('Status');
	}
}
