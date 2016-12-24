<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Department
 * @package App\Models
 * @version December 23, 2016, 3:35 am UTC
 */
class Department extends Model
{
    use SoftDeletes;

    public $table = 'departments';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'office_number',
        'manager'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'office_number' => 'string',
        'manager' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required,max:200',
        'office_number' => 'required,max:15,min:9',
        'manager' => 'required,max:100'
    ];

    
}
