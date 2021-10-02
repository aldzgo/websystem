<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Products
 * @package App\Models
 * @version October 2, 2021, 1:43 pm UTC
 *
 * @property string $Product_name
 * @property string $Product_brand
 * @property number $Price
 * @property string $Description
 */
class Products extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'products';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'Product_name',
        'Product_brand',
        'Price',
        'Description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Product_name' => 'string',
        'Product_brand' => 'string',
        'Price' => 'decimal:2',
        'Description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Product_name' => 'required|string|max:255',
        'Product_brand' => 'required|string|max:255',
        'Price' => 'required|numeric',
        'Description' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
