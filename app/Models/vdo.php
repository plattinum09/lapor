<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class vdo
 * @package App\Models
 * @version May 21, 2017, 8:12 pm UTC
 */
class vdo extends Model
{
    use SoftDeletes;

    public $table = 'vdos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'url'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'text' => 'string',
        'url' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
