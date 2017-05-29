<?php

namespace App\Repositories;

use App\Models\slide;
use InfyOm\Generator\Common\BaseRepository;

class slideRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'image'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return slide::class;
    }
}
