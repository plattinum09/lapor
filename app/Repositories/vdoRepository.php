<?php

namespace App\Repositories;

use App\Models\vdo;
use InfyOm\Generator\Common\BaseRepository;

class vdoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'url'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return vdo::class;
    }
}
