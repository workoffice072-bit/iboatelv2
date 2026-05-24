<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Boat extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'support',
        'partner_name',
        'partner_email',
        'title',
        'description',
        'boat_type',
        'harbour',
        'manufacturer',
        'model',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    public function owner()
    {
        return $this->belongsTo(User::class);
    }

    public function technicalDetail()
    {
        return $this->hasOne(BoatTechnicalDetail::class);
    }

    public function prices()
    {
        return $this->hasMany(BoatPrice::class);
    }

    public function photos()
    {
        return $this->hasMany(BoatPhoto::class);
    }

    public function unavailableDates()
    {
        return $this->hasMany(BoatUnavailableDate::class);
    }

    public function amenities()
    {
        return $this->belongsToMany(
            Amenity::class,
            'amenity_boat'
        );
    }
}
