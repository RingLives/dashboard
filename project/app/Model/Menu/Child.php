<?php

namespace App\Model\Menu;

use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey = 'child_menu_id';

    protected $table = 'child_menus';
    
    protected $fillable = [
        'user_id', 'child_menu_name', 'is_active'
    ];
}
