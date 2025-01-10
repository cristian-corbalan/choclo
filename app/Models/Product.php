<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{

    public function variants(): HasMany
    {
        return $this->hasMany(ProductVariant::class);
    }

    public function category (): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
