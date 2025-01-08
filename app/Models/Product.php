<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    //
    public function colors (): BelongsToMany
    {
        return $this->belongsToMany(Color::class, 'product_variants');
    }

    public function sizes (): BelongsToMany
    {
        return $this->belongsToMany(Size::class, 'product_variants');
    }

    public function category (): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
