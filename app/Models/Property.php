<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VehiclePhoto
 *
 * @package App\Models
 */
class Property extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['created_at', 'updated_at', 'guid', 'suburb', 'state', 'country'];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
