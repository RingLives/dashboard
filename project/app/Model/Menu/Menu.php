<?php

namespace App\Model\Menu;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey = 'menu_id';

    protected $table = 'menus';
    
    protected $fillable = [
        'user_id', 'route_name','id_parent_menu','id_child_menu','description','icon','order_by','is_active'
    ];
}
