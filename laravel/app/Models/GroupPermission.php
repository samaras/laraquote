<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GroupPermission extends Model
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'permissions_groups';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['group_id', 'permission_id'];

    public function group()
	{
		return $this->hasMany('Group');
	}

	public function permission()
	{
		return $this->hasMany('Permission');
	}
}
