<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BoatTechnicalDetail extends Model
{
    protected $fillable = [
        'boat_id',
        'onboard_capacity',
        'cabins',
        'sleeping_capacity',
        'bathrooms',
        'year_built',
        'length_type',
        'length',
        'consumption',
        'speed',
        'crew',
        'engine',
        'tender',
        'cancellation_policy',
        'fuel_cost',
        'captain',
        'check_in',
        'check_out',
        'security_deposit',
        'insurance_document'
    ];

    protected $casts = [
        'tender' => 'boolean',
        'captain' => 'boolean',
    ];

    public function boat()
    {
        return $this->belongsTo(Boat::class);
    }
}
