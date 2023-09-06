<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;
    // function category(): BelongsTo
    // {
    //     return $this->belongsTo(Category::class);
    // }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($product) {
            // Genera el slug automáticamente a partir del título
            $product->slug = Str::slug($product->name);
        });
    }
}
