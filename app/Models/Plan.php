<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $fillable = [
        "name",
        "slug",
        "description",
        "benefits",
        "price",
        "duration_days",
        "is_active",
        "order_by",
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'is_active' => 'boolean',
    ];
}
