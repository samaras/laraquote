<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Group;

/**
 * Class Permission
 * @package App\Permission
 */
class Permission extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table;

    /**
     * The attributes that are mass assignable
     * 
     * @var array
     */
    protected $fillable = ['name', 'display_name', 'description'];

    /**
     * Many-to-Many relations with role model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function groups()
    {
        return $this->belongsToMany('Group', 'GroupPermission');
    }
}
