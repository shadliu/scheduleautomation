<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'ar_name',
        'name',
    ];

    public function blogcategory()
    {
        return $this->belongsTo(BlogCategory::class);
    }
}
