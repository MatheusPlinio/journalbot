<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rss extends Model
{
    protected $table = 'rss';

    protected $fillable = [
        'link',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
