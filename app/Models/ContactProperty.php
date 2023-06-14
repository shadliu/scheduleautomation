<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactProperty extends Model
{
    use HasFactory;

    protected $fillable = [
        'property_id',
        'phone',
        'email',
        'message',
    ];
}
