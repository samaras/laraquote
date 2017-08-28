<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
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
	protected $table = 'clients';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['company', 'address', 'contact_person', 'address_line1', 'address_line2', 'address_line3', 'province', 'postal_code', 'phone_number', 'cell_number'];

	/**
	 * The storage format for the date, changed to normal date used by everyone else except those americans
	 *
	 * @var string
	 */
	protected $dateFormat = 'd-m-Y H:i:s';

	/**
	 *
	 */
	public function quote()
	{
		return $this->belongsTo('Quote');
	}
}
