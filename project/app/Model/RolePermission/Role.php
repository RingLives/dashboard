<?php

namespace App\Model\RolePermission;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey = 'role_id';

    protected $table = 'roles';
    
    protected $fillable = [
        'user_id', 'role_name','is_value','is_active'
    ];
}
