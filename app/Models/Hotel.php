<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $fillable = [
        // 'name', 'destination', 'price', 'rooms', 'available_from', 'available_to'
        'name', 'destination', 'price', 'available_from', 'available_to'
    ];
}