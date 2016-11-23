<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
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
	protected $table = 'quote_status';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['status'];

	public function status_qoute()
	{
		return $this->hasMany('Quote');
	}
}
