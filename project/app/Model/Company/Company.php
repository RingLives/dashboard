<?php

namespace App\Model\Company;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey = 'company_id';
    
    protected $table = 'companys';

    protected $fillable = [
        'user_id', 'group_id','company_name','is_active','address','description','phone',
    ];
}