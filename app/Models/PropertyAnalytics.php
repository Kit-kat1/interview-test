<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * Class VehiclePhoto
 *
 * @package App\Models
 */
class PropertyAnalytics extends Model
{
    protected $table = 'property_analytics';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['created_at', 'updated_at', 'property_id', 'analytic_type_id', 'value'];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function property() : HasOne
    {
        return $this->hasOne(Property::class, 'id', 'property_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function analyticsType() : HasOne
    {
        return $this->hasOne(AnalyticTypes::class, 'id', 'analytic_type_id');
    }
}
