<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Pricing
 * @package App\Models
 * @version October 2, 2021, 2:21 pm UTC
 *
 * @property string $Product
 * @property string $Product_price
 * @property string $Discount_price
 */
class Pricing extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'pricing';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'Product',
        'Product_price',
        'Discount_price'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Product' => 'string',
        'Product_price' => 'string',
        'Discount_price' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Product' => 'required|string|max:255',
        'Product_price' => 'required|string|max:255',
        'Discount_price' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
