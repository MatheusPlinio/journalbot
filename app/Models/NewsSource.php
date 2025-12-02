<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class NewsSource extends Model
{
    use HasFactory;

    protected $fillable = [
        'url',
        'category_id',
        'source_provider_id',
        'is_active',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function source_provider(): BelongsTo
    {
        return $this->belongsTo(SourceProvider::class, 'source_provider_id');
    }

    public function news(): HasMany
    {
        return $this->hasMany(News::class);
    }
}
