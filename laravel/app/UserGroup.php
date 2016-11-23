<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserGroup extends Model
{
    public function group()
	{
		return $this->hasOne('Group');
	}

	public function user()
	{
		return $this->hasOne('User');
	}
}
