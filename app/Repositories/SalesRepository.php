<?php

namespace App\Repositories;

use App\Models\Sales;
use App\Repositories\BaseRepository;

/**
 * Class SalesRepository
 * @package App\Repositories
 * @version October 2, 2021, 2:44 pm UTC
*/

class SalesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Product',
        'Total_sales'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Sales::class;
    }
}
