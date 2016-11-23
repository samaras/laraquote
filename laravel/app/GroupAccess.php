<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupAccess extends Model
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
	protected $table = 'groups_access';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['group_id', 'access', 'group_access'];

	/**
	 * The storage format for the date, changed to normal date used by everyone else except those americans
	 *
	 * @var string
	 */
	protected $dateFormat = 'd-m-Y H:i:s';

	/**
	 * 
	 * @return 
	 */
	public function group()
	{
		return $this->hasMany('Group');
	}
}
