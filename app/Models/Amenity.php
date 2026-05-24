<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Amenity extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'amenity_category_id',
        'name',
        'slug',
        'icon',
        'description',
        'status'
    ];

    public function category()
    {
        return $this->belongsTo(AmenityCategory::class, 'amenity_category_id');
    }
    protected $casts = [
        'status' => 'boolean'
    ];

    public function boats()
    {
        return $this->belongsToMany(
            Boat::class,
            'amenity_boat'
        );
    }
}
