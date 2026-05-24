<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BoatPhoto extends Model
{
    protected $fillable = [
        'boat_id',
        'image',
        'is_primary'
    ];

    protected $casts = [
        'is_primary' => 'boolean'
    ];

    public function boat()
    {
        return $this->belongsTo(Boat::class);
    }
}
