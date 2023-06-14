<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'category_id',
        'property_name',
        'address_divission',
        'address_city',
        'address',
        'beds',
        'bathroom',
        'squire_feet',
        'monthly_amount',
        'land_area',
        'kitchen',
        'garage',
        'garage_size',
        'security_deposit',
        'building_age',
        'property_purpose',
        'interior',
        'service_charge',
        'take_rent',
        'gas',
        'registration_type',
        'registration_number',
        'servent_room',
        'servent_washroom',
        'unit_per_floor',
        'front_road_size',
        'building_facing',
        'vacant_since',
        'get_closing_time',
        'any_special_think',
        'image',
        'status',
    ];

    protected $with = ['user', 'multiplaimages', 'category'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function multiplaimages()
    {
        return $this->hasMany(MultipleImage::class, 'property_id');
    }

}
