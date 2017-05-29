<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class slide
 * @package App\Models
 * @version May 21, 2017, 8:28 pm UTC
 */
class slide extends Model
{
    use SoftDeletes;

    public $table = 'slides';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'image' => 'required'
    ];

    
}
