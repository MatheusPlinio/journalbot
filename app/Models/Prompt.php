<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prompt extends Model
{
    protected $fillable = ["category_id", "type", "prompt"];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
