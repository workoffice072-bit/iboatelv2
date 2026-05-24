<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BoatPrice extends Model
{
    protected $fillable = [
        'boat_id',
        'period',
        'price'
    ];

    public function boat()
    {
        return $this->belongsTo(Boat::class);
    }
}
