<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'user_id',
        'title',
        'slug',
        'description',
        'image',
        'status',
    ];

    protected $with = ['user', 'blogcategories'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function blogcategories()
    {
        return $this->belongsTo(BlogCategory::class);
    }

}
