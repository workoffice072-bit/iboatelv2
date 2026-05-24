<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BoatUnavailableDate extends Model
{
    protected $fillable = [
        'boat_id',
        'date'
    ];

    protected $casts = [
        'date' => 'date'
    ];

    public function boat()
    {
        return $this->belongsTo(Boat::class);
    }
}
