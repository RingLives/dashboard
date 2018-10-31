<?php

namespace App\Model\Menu;

use Illuminate\Database\Eloquent\Model;

class Parent extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey = 'parent_menu_id';

    protected $table = 'parent_menus';

    protected $fillable = [
        'user_id', 'parent_menu_name', 'is_active'
    ];
}
