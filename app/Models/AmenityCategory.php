<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AmenityCategory extends Model
{
    use SoftDeletes;
    protected $fillable = ['name', 'slug', 'icon'];

    public function amenities()
    {
        return $this->hasMany(Amenity::class);
    }
}
