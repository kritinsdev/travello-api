<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Place extends Model implements HasMedia
{
    use HasFactory;

    use InteractsWithMedia;

    protected $fillable = [
        'name',
        'phone_number',
        'lat',
        'lng',
        'address',
        'website',
        'rating',
        'user_ratings_total',
        'delivery',
        'dine_in',
        'takeout',
        'operational',
        'priority',
        'place_id',
        'city_id'
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function cuisines()
    {
        return $this->belongsToMany(Cuisine::class, 'place_cuisine');
    }

    public function type()
    {
        return $this->belongsToMany(Type::class, 'place_type');
    }
}