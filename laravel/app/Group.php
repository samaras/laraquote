<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'groups';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['group'];

	/**
	 * The storage format for the date, changed to normal date used by everyone else except those americans
	 *
	 * @var string
	 */
	protected $dateFormat = 'd-m-Y H:i:s';

	public function users()
	{
		return $this->belongsToMany('User');
	}

	/**
   	 * Permissions belong to many groups
   	 *
    public function permissions()
    {
        $this->belongsToMany('Permission');
    }*/

    /**
     * Many-to-Many relations with the permission model.
     * Named "perms" for backwards compatibility. Also because "perms" is short and sweet.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function permissions()
    {
        return $this->belongsToMany('Permission', 'GroupPermission', 'group_id', 'permission_id');
    }

    /** 
     * Checks if the group has a permission by its name.
     *
     * @param string|array $perm 	Permission name or array of permissions
     * @return bool
     */
    public function hasPermission($perm)
    {
    	if(is_array($perm)) {
    		foreach ($perm as $p) {
    			$hasPermission = $this->hasPermission($p);

    			if($hasPermission) {
    				return true;
    			}
    		}

    		return false;
    	}
    }

    /**
     * Save the permissions
     *
     * @param mixed $inputPerms
     * @return void
     */
    public function savePermissions($inputPerms)
    {
    	if(!empty($inputPerms)) {
    		$this->perms()->sync($inputPerms);
    	} else {
    		$this->perms()->detach();
    	}
    }

    /**
     * Attach permission to current group
     *
     * @param object|array $permission
     * @return void
     */
    public function attachPermission($permission)
    {
    	$this->perms()->attach($permission);
    }

    /**
     * Attach permission to current group
     *
     * @param object|array $permission
     * @return void
     */
    public function detachPermission($permission)
    {
    	$this->perms()->detach($permission);
    }
}
