<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword, SoftDeletes;

    //setting $timestamp to true so Eloquent
    //will automatically set the created_at
    //and updated_at values
    public $timestamps = true;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['first_name', 'last_name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token', 'active', 'last_login'];

    /**
     * The storage format for the date, changed to normal date used by everyone else except those americans
     *
     * @var string
     */
    protected $dateFormat = 'd-m-Y H:i:s';

    /**
     * Validation
     */
    protected $validationRules = [
        'email' => 'required|email|unique:users,email,<id>',
        'first_name' => 'required|alpha_num',
        'last_name' => 'required|alpha_num',
    ];

    public function quote()
    {
        return $this->hasMany('App\Quote', 'id');
    }

    public function group()
    {
        return $this->hasManyThrough('App\Group', 'App\UserGroup');
    }

    public function getGroups() {
        if (! isset($this->userGroup)) {
            $this->userGroup = $this->group;
        }

        return $this->userGroup;
    }

    public function isAdmin()
    {
        return $this->hasGroup('admin');
    }

    public function hasGroup($groupName) 
    {
        return $this->hasGroups($groupName);
    }

    public function hasGroups($groups = [])
    {
        $groupList = app(GroupRepository::class)->getGroupList();

        /*foreach ((array) $groups as $group) {
            if(! )
        }*/

        return true;
    }

    /**
     * Check if user has a permission by its name
     *
     * @param string|array $permission      Permission string or array of permissions
     * @return bool
     */
    public function can($permission)
    {
        if(is_array($permission)) {
            foreach ($permission as $perm) {
                $hasPerm = $this->can($perm);

                if($hasPerm) {
                    return true;
                }
            }

            return false;
        } else {
            // Get users permissions and check if permission is there
            return true;
        }
    }

    /**
     * Attach user to group
     *
     * @param mixed $group
     */
    public function attachGroup($group)
    {
        $this->groups()->attach($group)
    }

    /**
     * Detach user to group
     *
     * @param mixed $group
     */
    public function detachGroup($group)
    {
        $this->groups()->detach($group);
    }
}
