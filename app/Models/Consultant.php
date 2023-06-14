<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultant extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'category_id',
        'location',
        'min_price',
        'max_price',
        'bedroom',
        'master_bedroom',
        'bathroom',
        'varanda',
        'servent_room',
        'parking',
        'lift',
        'guard',
        'status',
    ];

    protected $with = ['user', 'category'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
