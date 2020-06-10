<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VehiclePhoto
 *
 * @package App\Models
 */
class AnalyticTypes extends Model
{
    protected $table = 'analytics_type';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['created_at', 'updated_at', 'name', 'units', 'is_numeric', 'num_decimal_places'];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
