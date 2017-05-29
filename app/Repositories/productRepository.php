<?php

namespace App\Repositories;

use App\Models\product;
use InfyOm\Generator\Common\BaseRepository;

class productRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'image',
        'detail',
        'type'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return product::class;
    }
}
