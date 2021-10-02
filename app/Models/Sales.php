<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Sales
 * @package App\Models
 * @version October 2, 2021, 2:44 pm UTC
 *
 * @property string $Product
 * @property number $Total_sales
 */
class Sales extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'sales';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'Product',
        'Total_sales'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Product' => 'string',
        'Total_sales' => 'decimal:2'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Product' => 'required|string|max:255',
        'Total_sales' => 'required|numeric',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
